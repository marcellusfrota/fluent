<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\SecurityContext;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Template("security/login.html.twig")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
    	// get the login error if there is one
	    $error = $authUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authUtils->getLastUsername();

	    // return $this->render('security/login.html.twig', array(
	    //     'last_username' => $lastUsername,
	    //     'error'         => $error,
	    // ));

	    return array(
	        'last_username' => $lastUsername,
	        'error'         => $error,
	    );

	    // if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	    //     $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    // } else {
	    //     $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
	    // }

	    // return array(
	    //     'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
	    //     'error'         => $error,
	    // );
    }
}
