<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $themes = [
            ['title' => 'Base de données', 'nbPost' => 5, 'id' => 1],
            ['title' => 'Programmation', 'nbPost' => 2, 'id' => 2],
            ['title' => 'Sécurité', 'nbPost' => 5, 'id' => 3]
        ];
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'themes' => $themes
        ]);
    }

    /**
     * @Route("/theme/{id}", name="app_default_theme",
     *     requirements={"id":"\d+"}
     *     )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function themeAction($id) {
        $posts = [
            ['title' => 'Installer Mysql', 'nbResponse' => 5, 'id' => 1],
            ['title' => 'Les nouveautés de SQL Server', 'nbResponse' => 3, 'id' => 2],
            ['title' => 'Tout sur la clause WHERE', 'nbResponse' => 5, 'id' => 3]
        ];

        return $this->render('default/theme.html.twig', ['posts' => $posts]);
    }
}
