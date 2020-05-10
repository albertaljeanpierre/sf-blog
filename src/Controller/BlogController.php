<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="app_default_index" , methods={"GET"})
     */
    public function index()
    {   // La fonction render prend en deuxième paramètre un tableau nominatif dont la clé coresponds
        //  à la variable twig et suivis par sa valeur.
        return $this->render('base.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }


    /**
     * @Route("/blog", name="app_default_blog", methods={"GET"})
     */
    public function blog()
    {
        return $this->render('blog/index.html.twig', [
            'id'        => '1',
            'title'     => 'Un titre de blog',
            'content'   => 'Contenu de l article',
            'image'     => 'https://picsum.photos/200/300',
            'author'    => 'Jean-Pierre'
        ]);
    }
}
