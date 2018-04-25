<?php

class User extends CI_Controller {
  function add(){
    echo $this->input->post("username", "password", "fullname");
  }
  function form(){
    $this->load->view("form_user_v");
  }
  function index(){
    echo "english pro";
  }
}
