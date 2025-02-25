<?php

use \App\Controller\Circle;

final class SimpleTest extends \PHPUnit\Framework\TestCase
{

    public function testCircle(): void
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost/circle/1');
        dump(json_decode($response->getBody()));
        $this->assertEquals(
            200,
            $response->getStatusCode(),
            'true'
        );
    }

    public function testTriangle(): void
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost/triangle/3.0/4.0/5.0');
        dump(json_decode($response->getBody()));
        $this->assertEquals(
            200,
            $response->getStatusCode(),
            'true'
        );
    }
}
