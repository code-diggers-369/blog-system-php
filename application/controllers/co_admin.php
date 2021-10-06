<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Co_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id') <= 0) {
			redirect('login/index');
		}
		if ($this->session->userdata('type') != "co_admin") {
			redirect('admin/index');
		}
		$this->load->model('co_admin_model');
	}
	public function index()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "dashboard";

		$this->load->model('co_admin_model');
		$active_page['total_post'] = count($this->co_admin_model->total_posts());

		$this->load->view('co_admin/index', $active_page);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function add_post()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "add_post";
		$this->load->view('co_admin/index', $active_page);
	}

	public function total_posts()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "total_posts";
		$this->load->model('co_admin_model');
		$posts['posts'] = $this->co_admin_model->total_posts();
		$this->load->view('co_admin/index', $active_page + $posts);
	}
	public function delete_row()
	{
		$id = $this->input->get('post_id');
		$this->load->model('co_admin_model');
		$this->co_admin_model->row_delete($id);
		$this->total_posts();
	}
	// .this will be implement from public side
	public function update_profile_view()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "update_profile";
		$this->load->model('co_admin_model');
		$user['profile'] = $this->co_admin_model->update_profile_view();
		$this->load->view('co_admin/index', $active_page + $user);
	}
	// ./ close
	public function update_profile()
	{
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "update_info";
		$this->load->model('co_admin_model');
		$user['profile'] = $this->co_admin_model->update_profile_view();
		$this->load->view('co_admin/index', $active_page + $user);
	}
	public function update_profile_user()
	{
		$data = array(
			'user_name'  => $this->input->post('inputName'),
			'email'  => $this->input->post('email'),
			'profession' => $this->input->post('profession'),
			'address' => $this->input->post('address'),
			'website' => $this->input->post('website'),
			'github' => $this->input->post('github'),
			'twitter' => $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'moblie' => $this->input->post('moblie'),
			'phone' => $this->input->post('phone')
		);


		if (!preg_match("/^[a-zA-Z0-9_]+$/", $data['user_name'])) {
			echo "<script> alert('Plz enter valid username'); 
			window.history.back();
			</script>";
			return;
		}
		if (empty($data['user_name']) || empty($data['email'])) {
			redirect(base_url() . "co_admin/update_profile");
			return;
		}

		$this->load->model('co_admin_model');
		$this->co_admin_model->update_profile($data);
		redirect('co_admin/update_profile');
		/* echo "<pre>";
		print_r($data);
		echo "</pre>"; */
	}

	function upload_profile_pic()
	{
		$formData['user_id'] = $this->session->userdata('id');

		if ($_FILES['profile_img'] && $_FILES['profile_img']['tmp_name']) {
			$imageFileType = pathinfo($_FILES['profile_img']['name'], PATHINFO_EXTENSION);
			$filename = rand(1, 10000) . "-" . rand(1, 10000) . "-" . rand(1, 10000) . rand(1, 10000) . ".$imageFileType";
			$location = "uploads/users/" . $filename;

			move_uploaded_file($_FILES['profile_img']['tmp_name'], $location);

			$formData['img_path'] = $location;
			$this->co_admin_model->update_profile_pic($formData);

			redirect(base_url() . "co_admin/update_profile");
		}
	}

	public function calender()
	{
		$active_page['active_page'] = "calender";
		$active_page['page'] = "calender";
		$this->load->view('co_admin/index', $active_page);
	}

	public function update_post_view()
	{
		$post_id = $_GET['post_id'];
		$active_page['post_data'] = $this->co_admin_model->update_post_view_model($post_id);
		$active_page['active_page'] = "dashboard";
		$active_page['page'] = "update_post";

		$this->load->view('co_admin/index', $active_page);
	}
}
