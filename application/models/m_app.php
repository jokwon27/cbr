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

    /* User */
    function user_get_data($limit, $start, $search){
        $q = '';
        if (isset($search['id']) && ($search['id'] !== '')) {
            $q = " and id = '".$search['id']."'";
        }

        if (isset($search['username']) && ($search['username'] !== '')) {
            $q = " and username like '%".$search['username']."%' 
                 or nama like '%".$search['username']."%'";
        }
        $limit = " limit $start, $limit ";
        $sql = "select * from users where id is not null $q order by username";
        $query = $this->db->query($sql . $limit);
        $ret['data'] = $query->result();
        $ret['jumlah'] = $this->db->query($sql)->num_rows();
        return $ret;
    }

    function user_delete_data($id){
        $this->db->where('id', $id)->delete('users');
    }

    function user_save_data(){
        $data = array(
            'username' => post_safe('user'),
            'nama' => post_safe('nama')  
        );

        $id = post_safe('id');

        if ($id === '') {
            $data['password'] = md5('1234');
            $this->db->insert('users', $data);
            $id = $this->db->insert_id();
        }else{
            $this->db->where('id', $id)->update('users', $data);
        }

        return $id;
    }

    function privileges_get_data() {
        $query = $this->db->get('menu_admin');
        return $query->result();
    }

    function user_privileges_data($id) {
        $sql = "select * from menu_user_privileges where 
             user_id = '" . $id . "'";
        //echo $sql;
        $query = $this->db->query($sql)->result();
        $data = array();
        foreach ($query as $value) {
            $data[] = $value->menu_admin_id;
        }
        return $data;
    }

    function user_privileges_edit_data($data) {
        $this->db->trans_begin();
        //delete privileges
        $this->db->where('user_id', $data['id_user']);
        $this->db->delete('menu_user_privileges');

        // add privileges
        if (is_array($data['privileges'])) {
            foreach ($data['privileges'] as $value) {
                $insert = array(
                    'user_id' => $data['id_user'],
                    'menu_admin_id' => $value
                );
                $this->db->insert('menu_user_privileges', $insert);
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $status = false;
        } else {
            $this->db->trans_commit();
            $status = true;
        }

        return $status;
    }

    /* User */

}