<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Validator\Constraints\Required;

#[Route('leGout', name:'leGout.')]
class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');

    }
    #[Route('/home/{username}',name:'home.user',requirements:['username'=> Requirement::ASCII_SLUG])]
    public function homeUser():Response
    {
        return $this->render('home/user/homeUser.html.twig');
    }

    #[Route('/home/{username}/admin', name:'home.user.admin',requirements:['username'=> Requirement::ASCII_SLUG])]
    public function about():Response
    {
        return $this->render('home/user/admin/index.html.twig');
    }

    #[Route('/about', name:'about')]
    public function admin():Response
    {
        return $this->render('home/about.html.twig');
    }
}
