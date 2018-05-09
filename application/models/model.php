<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Model extends CI_Model
{

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->database();

    }
    public function input($input)
    {
        $insert = $this->db->insert('user', $input);//
    }
    public function update($input)
    {
        $data['isi'] = $this->db->get('user');
        $this->load->view('form/update', $data);
    }

public function aksiupdate($id)
{
    $query = $this->db->get_where('user', array('id' => $id));
    return $query;
}
}
