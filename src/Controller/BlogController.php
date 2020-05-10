<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="app_default_index" , methods={"GET"})
     * Affiche la liste des articles
     */
    public function index()
    {   // La fonction render prend en deuxième paramètre un tableau nominatif dont la clé coresponds
        //  à la variable twig et suivis par sa valeur.
        return $this->render('blog/index.html.twig', [
            'id'        => '1',
            'title'     => 'Un titre de blog',
            'content'   => 'Contenu de l article',
            'image'     => 'https://picsum.photos/200/300',
            'author'    => 'Jean-Pierre'
        ]);
    }


    /**
     * @Route("/blog", name="app_default_blog", methods={"GET"})
     */
    public function blog()
    {/** TODO changer la vue pour une vue détaillée de chaque article
     *  attention à passer le titre de l'article dans l'url
     */
        return $this->render('blog/index.html.twig', [
            'id'        => '1',
            'title'     => 'Un titre de blog',
            'content'   => 'Contenu de l article',
            'image'     => 'https://picsum.photos/200/300',
            'author'    => 'Jean-Pierre'
        ]);
    }
}
