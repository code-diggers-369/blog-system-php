<?php
class Home_model extends CI_Model
{
    function about_user_model($id)
    {
        $data = $this->db->where('user_id', $id)
            ->get('user_list')->result_array();

        return $data;
    }

    function getAllPosts($formData)
    {
        $currentPage = $formData['page'];

        $display_post_per_page = 9;

        $totalPosts = $this->db->query("SELECT * FROM total_posts")->num_rows();

        $totalPages = ceil($totalPosts / $display_post_per_page);

        $limitNumber = ($currentPage - 1) * $display_post_per_page;

        $postData = $this->db->query("SELECT tp.*,ul.user_name as creater FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id order by tp.post_id desc LIMIT $limitNumber,$display_post_per_page ")->result();

        $oldPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts  LIMIT 0,3")->result();
        $newPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts  order by post_id desc LIMIT 0,3")->result();

        return array(
            'total_pages' => $totalPages,
            'post_data' => $postData,
            'active_page' => $formData['page'],
            'old_posts' => $oldPosts,
            'new_posts' => $newPosts
        );
        // $data = $this->db->query("SELECT * FROM total_posts")->result();

        // return $data;
    }

    function getPostsData($formData)
    {
        // $data = $this->db->where('post_id', $id)->get('total_posts')->result()[0];

        $id = $formData['id'];

        $data = $this->db->query("SELECT tp.*,ul.user_name as creater FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id WHERE post_id = $id")->result()[0];
        $newPosts = $this->db->query("SELECT tp.post_id,tp.img_path,tp.article_title,tp.date,ul.user_name FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id order by post_id desc LIMIT 0,6")->result();

        // echo "<pre>";
        //     print_r([$data,$newPosts]);
        // echo "</pre>";
        return [$data, $newPosts];
    }

    function get_users_data($formData)
    {
        $currentPage = $formData['page'];
        $userName = $formData['user_name'];

        $display_post_per_page = 4;

        $user_id = $this->db->query("SELECT user_id FROM user_list where user_name = '$userName'")->result()[0]->user_id;

        $user_data = $this->db->query("SELECT * FROM user_list where user_id = $user_id")->result()[0];
        $totalPosts = $this->db->query("SELECT * FROM total_posts where user_id = $user_id")->num_rows();

        $totalPages = ceil($totalPosts / $display_post_per_page);

        $limitNumber = ($currentPage - 1) * $display_post_per_page;

        $postData = $this->db->query("SELECT * FROM total_posts where user_id = $user_id  order by post_id desc LIMIT $limitNumber,$display_post_per_page")->result();

        $oldPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts where user_id = $user_id LIMIT 0,3")->result();
        $newPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts where user_id = $user_id order by post_id desc LIMIT 0,3")->result();

        return array(
            'total_pages' => $totalPages,
            'post_data' => $postData,
            'active_page' => $formData['page'],
            'user_data' => $user_data,
            'old_posts' => $oldPosts,
            'new_posts' => $newPosts
        );
    }

    // special for like dislike
    function like_model($formData)
    {
        $isAlreadyLike =  count($this->db->select("id")->where("post_id", $formData['post_id'])->where("user_id", $formData['user_id'])->get('likes')->result_array());

        $postId = $formData['post_id'];
        $userId = $formData['user_id'];
        $type = $formData['type'];

        if (!$isAlreadyLike) {
            // $this->db->insert('likes', $formData);
            $this->db->query("INSERT INTO likes(post_id,user_id,type) VALUES($postId,$userId,$type)");
        } else {
            $this->db->where("post_id", $formData['post_id'])->where("user_id", $formData['user_id'])->set('type', 1)->update('likes');
        }
    }

    function unlike_model($formData)
    {
        $isAlreadyexists =  count($this->db->select("post_id")->where("post_id", $formData['post_id'])->where("user_id", $formData['user_id'])->get('likes')->result_array());

        $postId = $formData['post_id'];
        $userId = $formData['user_id'];
        $type = $formData['type'];

        if (!$isAlreadyexists) {
            // $this->db->insert('likes', $formData);
            $this->db->query("INSERT INTO likes(post_id,user_id,type) VALUES($postId,$userId,$type)");
        } else {
            $this->db->where("post_id", $formData['post_id'])->where("user_id", $formData['user_id'])->set('type', 0)->update('likes');
        }
    }

    function removelike_model($formData)
    {
        $this->db->where("post_id", $formData['post_id'])->where("user_id", $formData['user_id'])->delete("likes");
    }

    function like_status_model($formData)
    {
        // $data = $this->db->select("type")->where("post_id", $formData['id'])->where("user_id", $this->session->userdata('id'))->get('likes')->result_array();


        $statusData = $this->db->select("type")->where("post_id", $formData['id'])->where("user_id", $this->session->userdata('id'))->get('likes')->result_array();

        if (count($statusData) > 0) {
            $status = $statusData[0]['type'];
        } else {
            $status = 2;
        }

        $total_likes  = count($this->db->select("id")->where('type', 1)->where("post_id", $formData['id'])->get('likes')->result_array());
        $total_dislikes  = count($this->db->select("id")->where('type', 0)->where("post_id", $formData['id'])->get('likes')->result_array());


        return array(
            'status' => $status,
            'like' => $total_likes,
            'dislike' => $total_dislikes
        );
    }
}
