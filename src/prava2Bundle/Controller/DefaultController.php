<?php
//commento
namespace prava2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/prova2Bundle")
     */
    public function indexAction()
    {   
        /*
        $person= new Person();
        $person->setNome("Pier");
        $person->setCognome("Des");
         * */
         
       // var_dump($casa);
        /*
        $em=$this->getDoctrine()->getManager();
        $em->persist($casa);
        $em->flush(); 
         */
        //considera che fra i : c è resources/view
        return $this->render('prava2Bundle:Default:index.html.twig');
        //return $this->render('default/prova.html.twig');
    }
}
