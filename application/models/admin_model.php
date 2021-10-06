<?php

use function PHPSTORM_META\type;

class Admin_model extends CI_Model
{
    function all()
    {
        return $users = $this->db->where('type', 'co_admin')
            ->get('user_list')->result_array(); //select * from user_list
    }
    function all_reg()
    {
        return $users = $this->db->where('access', 0)
            ->get('user_register')
            ->result_array(); //select * from user_register
    }
    function users_permission($id)
    {
        if ($id > 0) {

            // Update User_register table for give permission and instert inro user_list.
            $s = $this->db->where('reg_id', $id)
                ->set('access', '1')
                ->update('user_register');
            $data = $this->db->where('reg_id', $id)
                ->get('user_register')->result_object();

            $arr = ["user_name" => $data[0]->name, "email" => $data[0]->email, "password" => $data[0]->password, "reg_id" => $data[0]->reg_id];

            // print_r($arr);
            if ($s) {
                $this->db->insert('user_list', $arr);
            }
        }
    }

    function delete_user_model($id)
    {
        // $id = intval($id);
        if ($id > 0) {
            $user_id = $this->db->select('user_id')->where('reg_id', $id)->get('user_list')->result();
            $user_id = $user_id[0]->user_id;

            // echo gettype($t);
            // echo "<pre>";
            // print_r($t);
            // echo $t[0]->user_id;
            // $t = $t[0]->user_id;
            // print_r($t);
            // echo "</pre>";

            $user_profile_pic = $this->db->select('profile_pic')->where('user_id', $user_id)->get('user_list')->result();
            $user_profile_pic = $user_profile_pic[0]->profile_pic;

            unlink($user_profile_pic);

            $post_images =    $this->db->select('img_path')->where('user_id', $user_id)
                ->get('total_posts')->result();


            foreach ($post_images as $item) {
                unlink($item->img_path);
            }

            $this->db->where('user_id', $user_id)->delete('calender');
            $this->db->where('user_id', $user_id)->delete('total_posts');

            $this->db->where('reg_id', $id)
                ->delete('user_register');
            $this->db->where('reg_id', $id)
                ->delete('user_list');
        }
    }


    function disp_post()
    {
        $this->db->select('total_posts.post_id, total_posts.article_title, user_list.user_name, total_posts.date');
        $this->db->from('total_posts');
        $this->db->join('user_list', 'total_posts.user_id = user_list.user_id');
        $query = $this->db->get()->result_array();


        // echo "<pre>";
        // // print_r($query);
        // echo $query;
        // echo "</pre>";
        // exit;
        return $query;
    }

    function deskbord_data()
    {
        $total_posts = $this->db->get('total_posts')->num_rows();
        $total_users = $this->db->get('user_list')->num_rows();
        $total_request = $this->db->where('access', 0)
            ->get('user_register')->num_rows();
        $test = ['total_posts' => $total_posts, 'total_users' => $total_users - 1, 'total_request' => $total_request];
        // echo "<pre>";
        //     print_r($test);
        // echo "</pre>";
        return $test;
    }

    function delete_post_by_admin_model($post_id)
    {
        // echo $post_id;
        $post_profile_pic = $this->db->select('img_path')->where('post_id', $post_id)->get('total_posts')->result();
        $post_profile_pic = $post_profile_pic[0]->img_path;

        unlink($post_profile_pic);
        $this->db->where('post_id', $post_id)->delete('total_posts');
    }
}
