<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('header-main');
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_page($main_id, $category_id, $page_id)
	{
		$this->load->view('header1');

		$data['left_menu'] = $this->load->view($main_id . '/' . $category_id . '/menu', '', true);
		$data['main_content'] = $this->load->view($main_id . '/' . $category_id . '/' . $page_id, '', true);

		$this->load->view('render', $data);

		$this->load->view('footer');

	}

	public function show_tab($main_id, $category_id, $page_id, $tab_id)
	{
		$this->load->view('header1');

		$data['left_menu'] = $this->load->view($main_id . '/' . 'kns' . '/menu', '', true);
		$data['main_content'] = $this->load->view($main_id . '/' . $category_id . '/' . $page_id . '/' . $tab_id, '', true);

		$this->load->view('render', $data);

		$this->load->view('footer');

	}

	public function show_main($main_id)
	{
		$this->load->view('header');

		$this->load->view($main_id . '/' . 'main-page');

		$this->load->view('footer');
	}

}
