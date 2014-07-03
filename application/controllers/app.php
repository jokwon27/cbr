<?php defined('BASEPATH') OR exit('No direct script access allowed');

class APP extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    function test(){
        $this->load->view('test');
    }

    function index(){
    	/*
        $data['title'] = "Home";
    	$data['active'] = '';
        $data['module'] = $this->m_app->get_data_module($this->session->userdata('id_group'));
        $data['page'] = 'home_page';
        $id_user = $this->session->userdata('id_user');
        
        if (!empty($id_user)) {
            $data['clinic'] = $this->m_app->get_atribute_clinic();
            $this->load->view('dashboard', $data);
        } else {
            $this->login();
        }
        */
        $this->load->view('dashboard');
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

    function cek_shift($shift = null){
        if ($shift !== null) {
             $shift_now = $this->get_shift_now();
            if ($shift !== $shift_now) {
                $status = false;
                $message = "Shift saat ini adalah shift <b>".$shift_now."</b><br/> Apakah anda akan tetap menggunakan shift yang anda pilih?";
            }else{
                $status = true;
                $message = "";
            }

            die(json_encode(array('status' => $status, 'shift'=>$shift_now, 'message' => $message)));
        }else{
            die();
        }
       
    }
    private function get_shift_now(){
        $jam7 = strtotime("07:00:00");
        $jam15 = strtotime("15:00:00");
        $jam21 = strtotime("21:00:00");
        $jam6 = strtotime("06:00:00");
        $now = time();
        $shift = '1';
        if (($now >= $jam7) & ($now < $jam15)) {
            $shift = '1';
        }else if (($now >= $jam15) & ($now < $jam21)) {
            $shift = '2';
        }else if (($now >= $jam21) & ($now < $jam6)) {
            $shift = '3';
        }

        return $shift;
    }
    



    function dashboard_data_pasien_lama_baru(){
        $date   = mktime(0, 0, 0, date("m"), date("d")-6, date("Y"));
        $start  = date("Y-m-d", $date);
        $tgl = createRange($start, date('Y-m-d'));
        $status = $this->m_app->data_pasien_lama_baru($tgl);
        $result['data'] = array(
                array('type'=>'spline', 'name'=>'Pasien Lama', 'data'=>$status['lama']),
                array('type'=>'spline', 'name'=>'Pasien Baru', 'data'=>$status['baru']),
            );

        $result['title'] = "Grafik Status Kunjungan Pasien";
        foreach ($tgl as $key => $value) {
             $result['tanggal'][] = date('d M', strtotime($value));
        }
       
        die(json_encode($result));

    }

    function dashboard_data_diagnosis(){
        $awal = date('Y-m-01');
        $akhir = date('Y-m-t');
        $data = $this->m_app->data_top10_diagnosis($awal, $akhir);
        $result['nama'] = array();
        $result['jumlah'] = array();
        $result['title'] = "Data 10 Penyakit yang Diderita Pasien Dalam 1 Bulan";
        foreach ($data as $key => $value) {
            $result['nama'][] = $value->nama;
            $result['jumlah'][] = (int)$value->jumlah;
        }
        die(json_encode($result));
    }

    function dashboard_data_pasien_per_unit(){
        $date   = mktime(0, 0, 0, date("m"), date("d")-6, date("Y"));
        $start  = date("Y-m-d", $date);
        $tgl = createRange($start, date('Y-m-d'));
        
        $result['data'] = array();
        $result['title'] = "Grafik Kunjungan Pasien per Unit";

        $sql = "select  s.id , s.nama from dc_layanan_pendaftaran lp 
                join dc_spesialisasi s on (s.id = lp.id_unit_layanan)
                where lp.id_pendaftaran is not null and date(lp.waktu) between '$start' and '".date('Y-m-d')."' 
                group by s.id ";

        $unit = $this->db->query($sql)->result();
        //echo $sql;
        //echo print_r($unit);

        foreach ($unit as $key => $value) {
            $status = $this->m_app->data_pasien_per_unit($value->id,$tgl);
            $result['data'][] = array('type'=>'spline', 'name'=>$value->nama, 'data'=>$status);
        }

        foreach ($tgl as $key => $value) {
            $result['tanggal'][] = date('d M', strtotime($value));

        }
       
        die(json_encode($result));

    }

    function get_data_all_pasien() {
        $date   = mktime(0, 0, 0, date("m"), date("d")-7, date("Y"));
        $start  = date("Y-m-d", $date);
        $result = $this->m_app->get_data_all_pasien($start)->result();
        $data   = array();
        $juml   = array();
        foreach ($result as $hasil) {
            $data[] = indo_tgl_graph($hasil->MyJoinDate);
            $juml[] = (int)$hasil->jumlah;
        }
        die(json_encode(array('tanggal' => $data, 'jumlah' => $juml)));
    }

    function ganti_password(){
        $data['id'] = $this->session->userdata("id_user");
        $this->load->view('ganti_password', $data);
    }
    
    function cek_password() {
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $data = $this->m_users->check_my_account($username, $password)->row();
        if (isset($data->id)) {
            die(json_encode(array('status' => TRUE)));
        } else {
            die(json_encode(array('status' => FALSE)));
        }
    }

    function save_password(){
        $data = array(
                'password' => md5(post_safe('password_baru'))
            );

        $this->db->where('id',$this->session->userdata("id_user"))->update('dc_users',$data);

        die(json_encode(array('status'=>true)));
    }
}