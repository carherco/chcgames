<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\ChcUsuarios;
use AppBundle\Entity\ChcPartidas;
use AppBundle\Entity\ChcJuegos;
use AppBundle\Entity\ChcParticipantes;

class DixitBotController extends Controller
{
    /**
     * @Route("/dixit/telegrambotapi", name="dixit_telegrambotapi")
     */
    public function indexAction(Request $request)
    {
        //$this->logRequest($request);        
        $response = new JsonResponse();
        
        $content = $request->getContent(); 
        if (!empty($content)) {
            $params = json_decode($content, true); // 2nd param to get as array
        } else {
            $response->setStatusCode(500,'Empty request');
            return $response;
        }
   
        $command = $params['message']['text'];
        $this->em = $this->getDoctrine()->getManager();
print_r($command);                
        switch ($command) {
            case "/new":
                $output = $this->newGame($params);
                echo "hola"; print_r($output);
                break;
            case "/join":
//                $output = $this->joinGame($params);
                $chat_id = $params['message']['chat']['id'];
                $output = array();
                $output['method'] = 'sendMessage';
                $output['chat_id'] = $chat_id;
                $output['text'] = 'Hola. Has utilizado el comando /join';
                break;
            case "/start":
//                $output = $this->startGame($params);
                $chat_id = $params['message']['chat']['id'];
                $output = array();
                $output['method'] = 'sendMessage';
                $output['chat_id'] = $chat_id;
                $output['text'] = 'Hola. Has utilizado el comando /start';
                break;
            default:
                $chat_id = $params['message']['chat']['id'];
                $output = array();
                $output['method'] = 'sendMessage';
                $output['chat_id'] = $chat_id;
                $output['text'] = 'Hola. Has utilizado el comando '.$command;
                break;
        }

        $response->setData($output);
        return $response;
    }
    
    /**
     * {
     *      "update_id":545915717,
     *      "message":{
     *          "message_id":37,
     *          "from":{
     *              "id":15054302,
     *              "first_name":"Carlos",
     *              "last_name":"Herrera"
     *          },
     *          "chat":{
     *              "id":-245140800,
     *              "title":"Pruebas dixit",
     *              "type":"group",
     *              "all_members_are_administrators":true
     *          },
     *          "date":1494508985,
     *          "text":"/new",
     *          "entities":[{"type":"bot_command","offset":0,"length":4}]
     *      }
     *  }
     * 
     * 
     * @param type $params
     * @return string
     */
    private function newGame($params){
        $telegram_user_id = $params['message']['from']['id'];
        $telegram_user_name = $params['message']['from']['first_name'].' '.$params['message']['from']['last_name'];
        $chat_id = $params['message']['chat']['id'];
        $nombre = 'Partida de prueba';
        
        //@TODO: Primero se debería buscar al usuario por si ya existe
        $usuarioRepository = $this->getDoctrine()->getRepository('AppBundle:ChcUsuarios');
        $usuario = $usuarioRepository->findOneBy(array('plataforma_id' => $telegram_user_id));
        
        if(!$usuario){
            $usuario = new ChcUsuarios();
            $usuario->setNombre($telegram_user_name);
            $usuario->setPlataforma('Telegram');
            $usuario->setPlataforma_id($telegram_user_id);
            $this->em->persist($usuario);
        }
        
        $juegoRepository = $this->getDoctrine()->getRepository('AppBundle:ChcJuegos');
        $juego = $juegoRepository->find(4);
       
        $partida = new ChcPartidas();
        $partida->setJuego($juego);
        $partida->setNombre($nombre);
        $partida->setUsuario($usuario); 
        $partida->setEstado(0);
        $this->em->persist($partida);

        $participante = new ChcParticipantes();
        $participante->setUsuario($usuario);
        $participante->setPartida($partida);
        $this->em->persist($participante);
      
        $this->em->flush();
        
        $output = array();
        $output['method'] = 'sendMessage';
        $output['chat_id'] = $chat_id;
        $output['text'] = 'Partida creada. Quien quiera jugar debe apuntarse con el comando /join'.PHP_EOL;
        $output['text'].= 'Usuarios apuntados:'.PHP_EOL;
        $output['text'].= $telegram_user_name.PHP_EOL;
        
        return $output;
      
    }
       
    private function joinGame($params){
        $user_id = $this->id_jugador;
        
        $partida_id = $request->getParameter('partida_id');
        if(is_null($partida_id)) {
            $this->redirect('@dashboard');
        }
        
        //Comprobamos que el usuario NO participa en dicha partida
        $criteria = new Criteria();
        $criteria->add(ChcParticipantePeer::ID_PARTIDA,$partida_id);
        $criteria->add(ChcParticipantePeer::ID_USUARIO,$user_id);
        $participante = ChcParticipantePeer::doSelectOne($criteria);
        if(!$participante instanceof ChcParticipante){
            $participacion = new ChcParticipante();
            $participacion->setIdPartida($partida_id);
            $participacion->setIdUsuario($user_id);
            $participacion->save();
        }
    }
    
    private function startGame($params){
        //Comprobamos que hay un usuario en la sesión
        $user_id = $this->getUser()->getAttribute('user_id');
        if(is_null($user_id)) {
            $this->redirect('@homepage');
        }
        
        //Comprobamos que ha venido un id de partida por la request
        $partida_id = $request->getParameter('partida_id');
        if(is_null($partida_id)) {
            $this->redirect('@dashboard');
        }
               
        //Comprobamos que el usuario participa en dicha partida
        $criteria = new Criteria();
        $criteria->add(ChcParticipantePeer::ID_PARTIDA,$partida_id);
        $criteria->add(ChcParticipantePeer::ID_USUARIO,$user_id);
        $participante = ChcParticipantePeer::doSelectOne($criteria);
        if(!$participante instanceof ChcParticipante){
            $this->redirect('@dashboard'); 
        }
       
        //Guardamos en la sesión el partida_id seleccionado
        $partida = ChcPartidaPeer::retrieveByPK($partida_id);
        if(!$partida instanceof ChcPartida){
            $this->redirect('@dashboard'); 
        }
        elseif($partida->getEstado() != 0){
            $this->redirect('@dashboard'); 
        }
        else
        {
            $this->getUser()->setAttribute('partida_id',$partida_id);
        }
        
        //Creamos el juego 
        
        $juego = JuegosManager::create($partida);
        $juego->start();
        $this->redirect($juego->getDashboardRoute());
    }
    
    private function logRequest($request){
        $peticion = $request->getContent();
        $f=fopen("peticiones.txt", "a+"); 
        fwrite($f, $peticion); 
        fclose($f);
    }
}
