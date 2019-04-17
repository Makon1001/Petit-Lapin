<?php

function selectAllPerso() {
    $client = new GuzzleHttp\Client([
            'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
           ]);
    $response = $client->request('GET', 'characters');
    // or

    $body = $response->getBody();

    return json_decode($body->getContents());
}
