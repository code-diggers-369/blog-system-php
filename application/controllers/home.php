<?php
class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
    }

    public function about_user()
    {

        $id = 5;
        $data['data'] = $this->home_model->about_user_model($id);
        /* echo "<pre>";
            print_r($data);
        echo "</pre>"; */
        $this->load->view("user_about_page", $data);
    }

    public function index()
    {

        $formData['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['data'] = $this->home_model->getAllPosts($formData);

        // print_r($data['posts']);
        $this->load->view('public/index', $data);
    }


    public function userblog($username)
    {
        $formData['user_name'] = $username;

        $formData['page'] = isset($_GET['page']) ? $_GET['page'] : 1;

        $data['data'] = $this->home_model->get_users_data($formData);

        $this->load->view('public/userblog', $data);
    }
    public function blogpage($id)
    {
        $formData['id'] = $id;

        $data['post_data'] = $this->home_model->getPostsData($formData);
        $data['post_id'] = $id;

        $data['like_data'] = $this->home_model->like_status_model($formData);

        // print_r($data['like_data']);

        // echo "<pre>";
        //     print_r($data);
        // echo "</pre>";
        // exit;
        // print_r($data['post_data']->article_title);


        $this->load->view('public/blogpage', $data);
    }
    public function like($post_id, $user_id)
    {
        if ($this->session->userdata('id')) {
            $formData['user_id'] = $user_id;
            $formData['post_id'] = $post_id;
            $formData['type'] = "1";

            $formData['id'] = $post_id;

            $this->home_model->like_model($formData);

            $data = $this->home_model->like_status_model($formData);

            echo json_encode($data);
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'Login First', 'code' => 1337)));
        }
    }

    public function dislike($post_id, $user_id)
    {
        if ($this->session->userdata('id')) {

            $formData['user_id'] = $user_id;
            $formData['post_id'] = $post_id;
            $formData['type'] = "0";

            $formData['id'] = $post_id;

            $this->home_model->unlike_model($formData);

            $data = $this->home_model->like_status_model($formData);

            echo json_encode($data);
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'Login First', 'code' => 1337)));
        }
    }

    public function removelike($post_id, $user_id)
    {
        if ($this->session->userdata('id')) {
            $formData['user_id'] = $user_id;
            $formData['post_id'] = $post_id;

            $formData['id'] = $post_id;

            $this->home_model->removelike_model($formData);

            $data = $this->home_model->like_status_model($formData);

            echo json_encode($data);
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'Login First', 'code' => 1337)));
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
