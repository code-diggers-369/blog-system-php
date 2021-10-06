<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('admin/index');
        }
        $this->load->library('form_validation');
        $this->load->model('register_model');
    }

    function index()
    {
        $this->load->view('register');
    }

    function validation()
    {
        $this->form_validation->set_rules('user_name', 'User Name', 'required|trim|regex_match[/^([a-zA-z0-9_])+$/i]');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run()) {

            $data = array(
                'name'  => $this->input->post('user_name'),
                'email'  => $this->input->post('user_email'),
                'password' => $this->input->post('user_password')

            );
            // if (!preg_match("/^[a-zA-Z0-9_]+$/", $data['name'])) {
            //     echo "<script> alert('Plz enter valid username'); 
            //     window.history.back();
            //     </script>";
            //     return;
            // }
            if ($this->db->where('name', $data['name'])->get('user_register')->num_rows() == 0) {
                $tmp = false;
                $id = $this->register_model->insert($data);
                $path = base_url();


                echo "<script>alert('Your resquest sent to the CEO.');window.location.href='$path'</script>";

                // exit;
                // redirect('home/index');
            } else {
                    echo "<script>alert('User name already exist Please choose other.'); </script>";
                $this->index();
            }
        } else {
            $this->index();
        }
    }
}
