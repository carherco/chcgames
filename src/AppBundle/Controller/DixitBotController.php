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
         
        $this->em = $this->getDoctrine()->getManager();
        
        $command = $params['message']['text'];       
        switch ($command) {
            case "/new":
                $output = $this->newGame($params);
                break;
            case "/join":
                $output = $this->joinGame($params); 
                break;
            case "/start":
                $output = $this->startGame($params);
                break;
            default:
                $chat_id = $params['message']['chat']['id'];
                $output = array();
                $output['method'] = 'sendMessage';
                $output['chat_id'] = $chat_id;
                $output['text'] = 'Lo siento, no he reconocido el comando.';
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
        
        if($params['message']['chat']['type']!=="group"){
            $output = array();
            $output['method'] = 'sendMessage';
            $output['chat_id'] = $chat_id;
            $output['text'] = 'Solamente puedes crear partidas en grupos';    
            return $output;
        }
        
        $chat_title = $params['message']['chat']['title'];
        
        //Primero se debería buscar al usuario por si ya existe
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
        
        $partidasRepository = $this->getDoctrine()->getRepository('AppBundle:ChcPartidas');
        $partida = $partidasRepository->findOneBy(array('telegram_group_id' => $chat_id));
        
        if(!$partida){
            $partida = new ChcPartidas();
            $partida->setJuego($juego);
            $partida->setTelegramGroupId($chat_id);
            $partida->setNombre($chat_title);
            $partida->setUsuario($usuario); 
            $partida->setEstado(0);
            $this->em->persist($partida);
            
            $participante = new ChcParticipantes();
            $participante->setUsuario($usuario);
            $participante->setPartida($partida);
            $this->em->persist($participante);
        }

        $this->em->flush();
        
        $partida = $partidasRepository->findOneBy(array('telegram_group_id' => $chat_id));
        
        $output = array();
        $output['method'] = 'sendMessage';
        $output['chat_id'] = $chat_id;
        $output['text'] = 'Partida creada. Quien quiera jugar debe apuntarse con el comando /join'.PHP_EOL;
      
        $participantes = $partida->getParticipantes();
        if(count($participantes)>0){
            $output['text'].= 'Usuarios apuntados: '.count($participantes).PHP_EOL;
            foreach($participantes as $participante){
                $output['text'].= $participante->getUsuario()->getNombre().PHP_EOL;
            }
        }
        
        return $output;
      
    }
       
    private function joinGame($params){
        $telegram_user_id = $params['message']['from']['id'];
        $telegram_user_name = $params['message']['from']['first_name'].' '.$params['message']['from']['last_name'];
        $chat_id = $params['message']['chat']['id'];
        
        if($params['message']['chat']['type']!=="group"){
            $output = array();
            $output['method'] = 'sendMessage';
            $output['chat_id'] = $chat_id;
            $output['text'] = 'Solamente puedes crear partidas en grupos';    
            return $output;
        }
        
        $chat_title = $params['message']['chat']['title'];
        
        //Primero se debería buscar al usuario por si ya existe
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
        
        $partidasRepository = $this->getDoctrine()->getRepository('AppBundle:ChcPartidas');
        $partida = $partidasRepository->findOneBy(array('telegram_group_id' => $chat_id));
        
        if(!$partida){
            $output = array();
            $output['method'] = 'sendMessage';
            $output['chat_id'] = $chat_id;
            $output['text'] = 'Primero se debe crear una partida con el comando /new';    
            return $output;
        }
        
        $participantesRepository = $this->getDoctrine()->getRepository('AppBundle:ChcParticipantes');
        $participantes = $participantesRepository->findOneByPartidaAndUsuario($partida, $usuario);
        
        if(!$participantes){
            $participante = new ChcParticipantes();
            $participante->setUsuario($usuario);
            $participante->setPartida($partida);
            $this->em->persist($participante);
        }

        $this->em->flush();
        
        
        $partida = $partidasRepository->findOneBy(array('telegram_group_id' => $chat_id));
        
        $output = array();
        $output['method'] = 'sendMessage';
        $output['chat_id'] = $chat_id;
        $output['text'] = 'Enhorabuena, te has unido a la partida.'.PHP_EOL;
      
        $participantes = $partida->getParticipantes();
        if(count($participantes)>0){
            $output['text'].= 'Usuarios apuntados: '.count($participantes).PHP_EOL;
            foreach($participantes as $participante){
                $output['text'].= $participante->getUsuario()->getNombre().PHP_EOL;
            }
        }

        return $output;
    }
    
    private function startGame($params){

        //Guardamos en la sesión el partida_id seleccionado
        $partida = ChcPartidaPeer::retrieveByPK($partida_id);
        
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
