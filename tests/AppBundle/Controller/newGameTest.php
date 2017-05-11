<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class newGameTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $request_content = file_get_contents(dirname(__FILE__).'/../privateMessageToBot.json');
        
        $crawler = $client->request('POST', '/dixit/telegrambotapi',array(),array(),array(),$request_content);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $response_content = json_decode($client->getResponse()->getContent());
        print_r($response_content);
    }
    
    public function testNewGame()
    {
        $client = static::createClient();

        $request_content = file_get_contents(dirname(__FILE__).'/../commandNewInGroup.json');
        
        $crawler = $client->request('POST', '/dixit/telegrambotapi',array(),array(),array(),$request_content);

        print_r($client->getResponse());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $response_content = json_decode($client->getResponse()->getContent());
        print_r($response_content);
    }
}
