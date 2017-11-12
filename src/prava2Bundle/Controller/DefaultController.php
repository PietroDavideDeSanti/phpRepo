<?php
//commento
namespace prava2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="hello_route")
     */
    public function indexAction()
    {   
        
        //considera che fra i : c è resources/view
        return $this->render('prava2Bundle:Default:index.html.twig');
        //return $this->render('default/prova.html.twig');
    }
    
     /**
     * @Route("/response")
     */
    public function indexAction1()
    {   
        return new Response("ciao");
    }
    /**
     * @Route("/ridirectTo")
     */
    public function indexAction2()
    {   
        return $this->redirectToRoute("hello_route");
    }
    
    /**
     * @Route("/request")
     */
    public function indexAction3(Request $request)
    {   
        var_dump($request->getClientIp());
        die();
        return $this->redirectToRoute("hello_route");
    }
}
