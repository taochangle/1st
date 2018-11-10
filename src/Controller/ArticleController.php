<?php
/**
 * Created by PhpStorm.
 * User: taoxin
 * Date: 2018/11/10
 * Time: 10:59 AM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function index()
    {
        return new Response('index');
    }

    /**
     * @Route("/show/{param}")
     * @param $param
     * @return Response
     */
    public function  show($param)
    {
        return new Response(
            sprintf('hello! %s',$param)
        );
    }
}