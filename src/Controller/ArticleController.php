<?php
/**
 * Created by PhpStorm.
 * User: capensis
 * Date: 08.06.2018
 * Time: 00:38
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('asdasd');
    }

    /**
     * @Route("/news/{slug}");
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show article: %s',
            $slug
        ));
    }
}