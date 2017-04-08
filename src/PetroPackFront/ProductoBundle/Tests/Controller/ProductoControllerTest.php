<?php

namespace PetroPackFront\ProductoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductoControllerTest extends WebTestCase
{
    public function testListhome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
