<?php

namespace PetroPack\ProductoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClienteControllerTest extends WebTestCase
{
    public function testGetlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/producto/list');
    }

}
