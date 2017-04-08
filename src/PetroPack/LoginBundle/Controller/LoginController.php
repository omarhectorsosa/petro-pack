<?php

namespace PetroPack\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;


class LoginController extends Controller
{
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('PetroPackLoginBundle:Login:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/auth")
     */

    public function authAction(){
        return $this->redirect('/');
    }

}
