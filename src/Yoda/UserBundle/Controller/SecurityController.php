<?php

namespace Yoda\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class SecurityController extends Controller
{

    /**
     * @Route("/login", name="login_form")
     * @Template
     *
     *
     */
    public function loginAction(Request $request) {
        $session = $request->getSession();
        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

        return array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function loginCheckAction()
    {
        //Blank

    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function logoutAction()
    {
        //Blank

    }

}