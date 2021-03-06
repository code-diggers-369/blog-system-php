<?php


class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('admin/index');
        }
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('login');
    }


    function validation() 
    {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        
        if ($this->form_validation->run()) {
            $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            if ($result == '') {
                $type= $this->session->userdata('type');
                redirect(base_url());
            } else {
                $this->session->set_flashdata('message', $result);
                $this->index();
            }
        } else {
            $this->index();
        }
    }
 }
