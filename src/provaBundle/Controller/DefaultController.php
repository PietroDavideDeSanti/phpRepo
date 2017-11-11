<?php

namespace provaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use provaBundle\Entity\Model\Person;
use provaBundle\Entity\Casa;

class DefaultController extends Controller
{
    /**
     * @Route("/provaBundle")
     */
    public function indexAction()
    {   
        /*
        $person= new Person();
        $person->setNome("Pier");
        $person->setCognome("Des");
         * */
         $casa=new Casa();
         $casa->setNome("Magic");
         $casa->setColore("giallo");
       // var_dump($casa);
        
        $em=$this->getDoctrine()->getManager();
        $em->persist($casa);
        $em->flush(); 
         
        //considera che fra i : c è resources/view
        return $this->render('provaBundle:Default:index.html.twig');
        //return $this->render('default/prova.html.twig');
    }
}
