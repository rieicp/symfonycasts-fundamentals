<?php
/**
 * Created by PhpStorm.
 * User: nwe
 * Date: 06.12.18
 * Time: 13:24
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}
