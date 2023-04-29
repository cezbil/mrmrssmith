<?php

// tests/Controller/Unit/CalculatorControllerTest.php

namespace Tests\Unit\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSelectorTextContains('h1', 'Calculator');
    }

    public function testCalculateSuccess(): void
    {
        $client = static::createClient();
        $client->request('POST', '/calculate', [
            'valueOne' => 10,
            'valueTwo' => 20,
            'operation' => 'plus'
        ]);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result":30}', $client->getResponse()->getContent());
    }

    public function testCalculateFailure(): void
    {
        $client = static::createClient();
        $client->request('POST', '/calculate', [
            'valueOne' => 20,
            'valueTwo' => 0,
            'operation' => 'division'
        ]);

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"error":"Please do not divide by 0!"}', $client->getResponse()->getContent());
    }
}
