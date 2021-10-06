<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id')) {
		} else {
			redirect('login/index');
		}
		if ($this->session->userdata('type') != "admin") {
			redirect('co_admin/index');
		}
	}

	public function index()
	{
		$this->load->model('admin_model');
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "dashboard";
		$active_page['data'] = $this->admin_model->deskbord_data();

		$this->load->view('admin/index', $active_page);
	}

	public function user_list()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "users_info";
		$this->load->model('admin_model');
		$users['users'] = $this->admin_model->all();

		$this->load->view('admin/index', $users + $active_page);
	}
	public function access_row()
	{

		$reg_id = $this->input->get('reg_id');
		if ($this->input->get('access') == 1) {
			$this->load->model('admin_model');
			$users_permission['users_permission'] = $this->admin_model->users_permission($reg_id);
			redirect('admin/panding_request');
		} else {
			$this->db->where('reg_id', $reg_id)
				->delete('user_register');
			redirect('admin/panding_request');
		}
	}
	public function delete_user()
	{

		$id = $this->input->get('reg_id');
		$this->load->model('admin_model');
		$this->admin_model->delete_user_model($id);
		$this->user_list();
	}
	public function panding_request()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "panding_request";
		$this->load->model('admin_model');
		$users['users'] = $this->admin_model->all_reg();
		$this->load->view('admin/index', $users + $active_page);
	}


	public function calender()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "calender";
		$this->load->view('admin/index', $active_page);
	}

	// post related functions

	public function post_list()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "total_post";
		$this->load->model('admin_model');
		$posts['posts'] = $this->admin_model->disp_post();

		// echo "<pre>";
		// 	print_r($posts);
		// echo "</pre>";
		// exit;
		$this->load->view('admin/index', $posts + $active_page);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}


	// this is for delete poasts by admin...
	function delete_post_by_admin()
	{
		$post_id = $_GET['post_id'];
		$this->load->model('admin_model');
		$this->admin_model->delete_post_by_admin_model($post_id);

		redirect('admin/post_list');
	}
}
