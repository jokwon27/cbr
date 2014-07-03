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
    	$data['menu'] = $this->m_app->menu_load_data();
        

        $this->load->view('dashboard', $data);
    }

    function login(){
        $data['shift'] = array(
                            '1' => 'Shift 1',
                            '2' => 'Shift 2',
                            '3' => 'Shift 3'
                        );
        $data['shift_now'] = $this->get_shift_now();
        $this->load->view('login', $data);
    }

    function user(){
        $this->load->view('content/user');   
    }

    function artikel(){
        $this->load->view('content/artikel');
    }





}