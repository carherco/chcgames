<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class newGameTest extends WebTestCase
{   
    /**
     * 
     */
    public function testNewGame()
    {
        $client = static::createClient();

        $request_content = file_get_contents(dirname(__FILE__).'/../commandNewInGroupByCarlos.json');
        
        $crawler = $client->request('POST', '/dixit/telegrambotapi',array(),array(),array(),$request_content);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $response_content = json_decode($client->getResponse()->getContent(),true);
//        print_r($response_content);

        $this->assertEquals('sendMessage',$response_content['method'],'Se envía un mensaje');
        $this->assertEquals(-245140800,$response_content['chat_id'],'Se envía mensaje al chat correcto');
        $this->assertContains('Partida creada',$response_content['text'],'Se informa de que la partida ha sido creada');
        $this->assertContains('Carlos Herrera',$response_content['text'],'Carlos está en la lista de jugadores');
        $this->assertContains('Usuarios apuntados: 1',$response_content['text'],'Hay 1 jugador apuntado');
    }
    
    /**
     * 
     */
    public function testJoinGame()
    {
        $client = static::createClient();

        $request_content = file_get_contents(dirname(__FILE__).'/../commandNewInGroupByCarlos.json');
        $crawler = $client->request('POST', '/dixit/telegrambotapi',array(),array(),array(),$request_content);
        
        $request_content = file_get_contents(dirname(__FILE__).'/../commandJoinInGroupByIsa.json');
        $crawler = $client->request('POST', '/dixit/telegrambotapi',array(),array(),array(),$request_content);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $response_content = json_decode($client->getResponse()->getContent(),true);
//        print_r($response_content);

        $this->assertEquals('sendMessage',$response_content['method'],'Se envía un mensaje');
        $this->assertEquals(-245140800,$response_content['chat_id'],'Se envía mensaje al chat correcto');
        $this->assertContains('Carlos Herrera',$response_content['text'],'Carlos está en la lista de jugadores');
        $this->assertContains('Isabel Alcaraz',$response_content['text'],'Isa está en la lista de jugadores');
        $this->assertContains('Usuarios apuntados: 2',$response_content['text'],'Hay 2 jugadores apuntados');
    }
    
    /**
     * 
     */
    public function testStartGame()
    {

    }
    
    /**
     * 
     */
    public function testStatusGame()
    {

    }
}
