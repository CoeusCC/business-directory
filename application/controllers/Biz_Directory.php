<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biz_Directory extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data = '';
		$this->master_view('directory/index', $data);
	}

}