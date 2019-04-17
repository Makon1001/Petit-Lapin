<?php


namespace perso;


use GuzzleHttp\Client;

class ApiController
{
    public function selectAllPerso() {
        $client = new GuzzleHttp\Client([
            'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
        ]);
        $response = $client->request('GET', 'characters');
        // or

        $body = $response->getBody();

        return json_decode($body->getContents());
    }

    public function selectFourRandomEggs (){
        $arrEggs = array();

        for($i=0;$i<4;$i++) {
            $client = new GuzzleHttp\Client([
                'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
            ]);
            $response = $client->request('GET', 'eggs/random');
            // or

            $body = $response->getBody();

            $arrEggs[$i] = json_decode($body->getContents());
        }
        return $arrEggs;

    }
}