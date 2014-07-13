<?php defined('BASEPATH') OR exit('No direct script access allowed');

class APP extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_app');
        $this->limit = 3;
    }

    function test(){
        $this->load->view('test');
    }

    function index(){
        $this->cek();
        $id_user = $this->session->userdata('id_user');
    	$data['menu'] = $this->m_app->menu_load_data($id_user);
        

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


    function artikel(){
        $this->cek();
        $this->load->view('content/artikel');
    }

        /* User */
    function user(){
        $this->cek();
        $data['title'] = 'User';
        $this->load->view('content/user/user', $data); 
    }

    function user_list($page){
        $this->cek();
        $search = array(
                'id' => get_safe('id'),
                'username' => get_safe('search')
            );
        $start = ($page - 1) * $this->limit;        
        $data = $this->m_app->user_get_data($this->limit, $start, $search);
        if ($data['data'] == NULL) {
            $data = $this->m_app->user_get_data($this->limit, 0, $search);
        }
        $data['page'] = $page;
        $data['limit'] = $this->limit;
        $data['pagination'] = pagination($data['jumlah'], $this->limit, $page, 1);
        $this->load->view('content/user/user_list', $data);

    }

    function user_save(){
        $id = $this->m_app->user_save_data();
        die(json_encode(array('id'=>$id)));
    }

    function user_delete($id,$page) {
        $this->cek();
        $this->m_app->user_delete_data($id);
        $this->user_list($page);
    }

    function get_privileges($id){
        $data['username'] = $this->db->where('id', $id)->get('users')->row()->username;
        $data['user_priv'] = $this->m_app->user_privileges_data($id);
        $data['privileges'] = $this->m_app->privileges_get_data();
        $this->load->view('content/user/user_privileges', $data);
    }

    function save_privileges($id_user){
        $add = array(
            'privileges' => post_safe('data'),
            'id_user' => $id_user
        );

        $hasil = $this->m_app->user_privileges_edit_data($add);
        die(json_encode(array('status'=>$hasil)));
    }
    /* User */





}