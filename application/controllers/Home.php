<?php
/**
 * A3M (Account Authentication & Authorization) is a CodeIgniter 3.x package.
 * It gives you the CRUD to get working right away without too much fuss and tinkering!
 * Designed for building webapps from scratch without all that tiresome login / logout / admin stuff thats always required.
 *
 * @link https://github.com/donjakobo/A3M GitHub repository
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Static pages
 *
 * This controller is for the home page and any other top level static pages.
 * 
 * @package A3M
 * @subpackage Controllers
 */
class Home extends CI_Controller
{
	
	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
		
		// Load the necessary stuff...
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->library(array('account/authentication', 'account/authorization'));
		$this->load->model('account/Account_model');
	}
	
	/**
	 * Home page
	 *
	 * This is the controller for the home page
	 */
	function index()
	{
		$data = $this->authentication->initialize(FALSE);
		
		$data['content'] = $this->load->view('home', isset($data) ? $data : NULL, TRUE);
		$this->load->view('template', $data);
	}

}


/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */