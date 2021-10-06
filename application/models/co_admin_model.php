<?php
class Co_admin_model extends CI_Model
{
    function total_posts()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->select('post_id, article_title, date,user_id')->where('user_id', $id)
            ->get('total_posts')->result_array();       
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;
        $this->db->where('user_id', $id)
            ->set('total_post', count($data))
            ->update('user_list');
        return $data;
    }

    function row_delete($id)
    {
        if ($id > 0) {
            $url =    $this->db->where('post_id', $id)
                ->get('total_posts')->result_array()[0]['img_path'];

            unlink($url);

            $this->db->where('post_id', $id)
                ->delete('total_posts');
        }
    }

    function update_profile_view()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->where('user_id', $id)
            ->get('user_list')->result();
        return $data;
    }
    function update_profile($data)
    {
        $id = $this->session->userdata('id');
        $this->db->where('user_id', $id);
        $this->db->update('user_list', $data);

        $this->db->where('reg_id', $this->session->userdata('reg_id'))
            ->set('name', $data['user_name'])
            ->set('email', $data['email'])
            ->update('user_register');

        $this->session->set_userdata('name', $data['user_name']);
    }

    function update_profile_pic($data)
    {
        $url = $this->db->where('user_id', $data['user_id'])
            ->get('user_list')->result_array()[0]['profile_pic'];

        unlink($url);

        $this->db->where('user_id', $data['user_id']);
        $this->db->update('user_list', array('profile_pic' => $data['img_path']));
    }
    function update_post_view_model($post_id)
    {
        $p = $this->db->where('post_id', $post_id)->get('total_posts')->result_array();
        // echo "<pre>";
        // print_r($p);
        // echo "</pre>";
        $p = $p[0];
        // echo "<pre>";
        // print_r($p);
        // echo "</pre>";
        return $p;
    }
}
