<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function Login()
    {
        
    }
    public function register(){

    }
    public function posts(){

    }

    public function createPost(){
        if($this->input->post("submit")){
            $config['upload_path']      = './Assets/photos/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        = time().pathinfo($_FILES['user-photo']['name'], PATHINFO_EXTENSION);
            $this->load->library('upload', $config);
            if($this->upload->do_upload('patient-photo')){
                $data['ulpoadedImg'] = $this->upload->data('file_name');
                $data['description'] = $this->input->post('desc');
                $this->load->model("Main");
                $res = $this->Main->createPost($data);
            }
        }
        $this->load->view('uploadPhoto');
    }
}