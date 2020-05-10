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
    // Je ne peut pas indiquer   , methods={GET}  dans la route => erreur 500
    //[Semantical Error] Couldn't find constant GET, method App\Controller\BlogController::blog() in
    // F:\Projets-PHP\sf-blog\config/routes\../../src/Controller/ (which is being imported from
    // "F:\Projets-PHP\sf-blog\config/routes/annotations.yaml").
    // Make sure annotations are installed and enabled.
    public function blog()
    {
        return $this->render('blog/index.html.twig');
    }
}
