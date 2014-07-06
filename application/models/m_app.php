<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_app extends CI_Model{

    function menu_load_data($id_user = null) {
        $q = null;
        if ($id_user != null) {
            $q.="and mp.user_id = '$id_user' ";
        }

       
        $sql = "select mp.*, m.* from menu_user_privileges mp
            join menu_admin m on (mp.menu_admin_id = m.id)
            join users u on (mp.user_id = u.id)
            where mp.id is not null $q";
        //echo $sql;
        return $this->db->query($sql)->result();
    }

    function cek_login() {
        $sql = "select * from users u
        where u.username = '".post_safe('username')."' and u.password = '".md5(post_safe('password'))."'";
        //echo $query;
        $hasil=$this->db->query($sql);
        return $hasil->row();
    }

    function cek_password($data) {
        $sql = "select * from users u
        where u.id = '".$data['id']."' and u.password = '".md5($data['password'])."'";
        //echo $query;
        $hasil=$this->db->query($sql);
        $num= $hasil->num_rows();
        if ($num>0) {
            $status=true;
        }
        else {
            $status=false;
        }
        return $status;
    }

}