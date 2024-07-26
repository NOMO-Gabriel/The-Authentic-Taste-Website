<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('leGout/categories' , name:'leGout.category.')]
class CategoryController extends AbstractController
{
    #[Route('/all', name: 'index')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig');
    }
    #[Route('/user/{username}', name: 'user',requirements:['username'=> '^[a-z0-9_-]{4,15}$'])]
    public function categoryUser(): Response
    {
        return $this->render('category/user/index.html.twig');
    }
    #[Route('/{slug}-{id}/show', name: 'show',requirements:['slug' => '[a-z0-9-]+','id'=> Requirement::DIGITS])]
    public function show(): Response
    {
        return $this->render('category/show.html.twig');
    }
    #[Route('/user/{username}/show', name: 'show.user',requirements:['username'=> '^[a-z0-9_-]{4,15}$'])]
    public function showUser(): Response
    {
        return $this->render('category/user/index.html.twig');
    }
    #[Route('/user/{username}/create', name: 'user.admin.create',requirements:['username'=> '^[a-z0-9_-]{4,15}$'])]
    public function create(): Response
    {
        return $this->render('category/user/admin/create.html.twig');
    }
    #[Route('/user/{username}/{slug}-{id}/edit', name: 'user.admin.edit',requirements:['slug' => '[a-z0-9-]+','id'=> Requirement::DIGITS])]
    public function edit(): Response
    {
        return $this->render('category/user/admin/edit.html.twig');
    }
    #[Route('/user/{username}/{slug}-{id}/delete', name: 'delete',requirements:['slug' => '[a-z0-9-]+','id'=> Requirement::DIGITS])]
    public function delete(): Response
    {
        return $this->redirectToRoute('leGout.category.index');
    }


}
