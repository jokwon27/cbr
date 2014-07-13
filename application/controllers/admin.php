<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('m_admin'));
        $this->load->library('session');
        $this->limit = 10;
        date_default_timezone_set('Asia/Jakarta');
    }

    function show_dashboard($data){
  
        $id_user = $this->session->userdata('id_user');
        $data['menu'] = $this->m_admin->menu_load_data($id_user);
        $this->load->view('admin/layout', $data);
       
    }

    function login() {
        $jml = $this->m_admin->cek_login();
        if (isset($jml->username) and $jml->username != '') {
            $data = array(
                'id_user' => $jml->id, 
                'user' => $jml->username, 
                'pass' => $jml->password
            );
            $this->session->set_userdata($data);
            //session_start();
            //$_SESSION['kcfinder'] = FALSE;
            die(json_encode(array('status'=>'login')));
        } else {
            die(json_encode(array('status'=>'gagal')));
        }
    }

    function logout() {
        $this->session->sess_destroy();
        //session_start();
        //session_unset('kcfinder');
        redirect(base_url('admin'));
    }

    function cek(){
        $user = $this->session->userdata('user'); 

        if ($user == '') {
            redirect(base_url('admin/sign_in'));
        }
    }

    function sign_in(){
         $this->load->view('admin/login');
    }

    function ganti_password() {
        $this->cek();
        $data['title'] = 'Ganti Password';
        $data['page'] = 'ganti_password';
        $data['id_user'] = $this->session->userdata('id_user');
        $this->show_dashboard($data);
    }

    function cek_password($id_user) {
        $parameter = array(
            'id' => $id_user, 
            'password' => post_safe('password'), 
        );  
        $status=$this->m_admin->cek_password($parameter);
        die(json_encode(array('status'=>$status)));
    }

    function simpan_password(){
        $parameter = array(
            'id' => post_safe("id_user"), 
            'password' => md5(post_safe('baru')), 
        );  
        $this->m_admin->simpan_password($parameter);
        die(json_encode(array('status'=>true)));  
    }

    function reset_password($id_user){
        $parameter = array(
            'id' => $id_user, 
            'password' => md5('1234')
        );  
        $this->m_admin->simpan_password($parameter);
        die(json_encode(array('status'=>true)));  
    }

	function index(){
        $this->cek();
        $data['title'] = 'Home';
        $data['page'] = 'home';
        $data['total_artikel'] = $this->db->get('artikel')->num_rows();
        $data['total_museum'] = $this->db->get('museum')->num_rows();
        $data['museum_populer'] = $this->m_admin->museum_populer();
        $data['artikel_populer'] = $this->m_admin->artikel_populer();
		$this->show_dashboard($data);
	}

    
    
    

    
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */