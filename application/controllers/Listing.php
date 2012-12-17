<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Listing_model', 'Listing');
	}

	function index()
	{
		$data['listings'] = $this->Listing->get_listings();
		$this->master_view('index', $data);
	}

}