<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post/{id}", name="app_post_details",
     *     requirements={"id":"\d+"}
     *     )
     */
    public function detailsAction($id)
    {

        return $this->render(':Post:details.html.twig', array(
            'id' => $id
        ));
    }

}
