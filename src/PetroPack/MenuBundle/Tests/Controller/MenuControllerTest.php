<?php

namespace PetroPack\MenuBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MenuControllerTest extends WebTestCase
{
    public function testItems()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

}
