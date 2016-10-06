<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {
        //$em = $this->container->get('doctrine')->getManager();
        $em = $this->getDoctrine()->getManager();
        $report = $em->getRepository('EventBundle:Event');
        $event = $report->findOneBy(array(
           'name' => 'Darth Vader'
        ));
        return  $this->render(
         'EventBundle:Default:index.html.twig',
         array('name' => $firstName, 'count' => $count, 'event' => $event)
       );
    }
}
