<?php

namespace Gbl\SiteVitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProduitController extends Controller
{
	/**
	 * @Route("/produits")
	 * @Template()
	 */
	public function indexAction()
	{
		return array();
	}	
}