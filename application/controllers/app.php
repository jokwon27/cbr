<?php defined('BASEPATH') OR exit('No direct script access allowed');

class APP extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_app');
    }

    function test(){
        $this->load->view('test');
    }

    function index(){
        $this->cek();
    	$data['menu'] = $this->m_app->menu_load_data();
        

        $this->load->view('dashboard', $data);
    }

    function cek(){
        $user = $this->session->userdata('user'); 

        if ($user == '') {
            redirect(base_url('app/sign_in'));
        }
    }

    function login() {
        $jml = $this->m_app->cek_login();
        if (isset($jml->username) and $jml->username != '') {
            $data = array(
                'id_user' => $jml->id, 
                'user' => $jml->username, 
                'nama' => $jml->nama,
                'profesi' => $jml->profesi
            );
            $this->session->set_userdata($data);
            //session_start();
            //$_SESSION['kcfinder'] = FALSE;
            die(json_encode(array('status'=>'login')));
        } else {
            die(json_encode(array('status'=>'gagal')));
        }
    }

    function sign_in(){
         $this->load->view('login');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function user(){
        $this->cek();
        $this->load->view('content/user');   
    }

    function artikel(){
        $this->cek();
        $this->load->view('content/artikel');
    }





}