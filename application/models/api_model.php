
<?php

class Api_model extends CI_Model
{

    // for calender
    function getEventsModel($formData)
    {
        $this->db->order_by('id');
        $this->db->where('user_id', $formData['id']);
        return $this->db->get('calender')->result();
    }

    function addEventsModel($formData)
    {
        $this->db->insert('calender', $formData);
    }

    function updateEventsModel($formData)
    {
        $this->db->where('id', $formData['event_id']);
        $this->db->update('calender', array('date_from' => $formData['date_from'], 'date_to' => $formData['date_to']));
    }

    function deleteEventsModel($formData)
    {
        $this->db->where('id', $formData['event_id']);
        $this->db->delete('calender');
    }

    // for text editor

    function insert_post_model($data)
    {
        $this->db->insert('total_posts', $data);
    }

    function update_post_model($data, $post_id, $flag)
    {
        if ($flag == 1) {
            $url =    $this->db->where('post_id', $post_id)
                ->get('total_posts')->result_array()[0]['img_path'];
            unlink($url);
        }
        $this->db->where('post_id', $post_id)
            ->update('total_posts', $data);
    }
}
