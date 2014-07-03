<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_sistem extends CI_Model{    
    
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    
    /* Group User */
    function get_list_group_user($limit, $start, $search){
        $limit = " limit $start , $limit";
        $q = "";
        if ($search['pencarian'] !== '') {
            $q .= " and nama like '%".$search['pencarian']."%' ";
        }

        $sql = "select * from dc_group_users where id is not null $q";
        $order = " order by nama ";
        $query = $this->db->query($sql.$order.$limit);
        $result['data'] = $query->result();
        $result['jumlah'] = $this->db->query($sql)->num_rows();
        return $result;
    }

    function get_group_user_privileges($id_group){
        $sql = "select p.*,m.nama as module, g.id_group_users from dc_privileges p
                join dc_module m on (m.id = p.id_module)
                left join dc_grant_privileges g on 
                (p.id = g.id_privileges and g.id_group_users = '".$id_group."')
                order by m.id, p.menu";

        return $this->db->query($sql)->result();
    }

    function update_data_group_user($data){
        if ($data['id'] === false) {
            // insert
            $this->db->insert('dc_group_users', $data);
            $id = $this->db->insert_id();
        }else{
            // Update
            $id = $data['id'];
            $this->db->where('id', $data['id'])->update('dc_group_users', $data);
        }

        return $id;
    
    }


    function update_data_group_user_privileges($data){
        $this->db->trans_begin();
        $this->db->where('id_group_users', $data['id_group'])->delete('dc_grant_privileges');

        // insert tabel dc_grant_privileges
        if (is_array($data['privileges'])) {
            foreach ($data['privileges'] as $key => $value) {
                $add = array(
                        'id_group_users' => $data['id_group'],
                        'id_privileges' => $value
                    );

                $this->db->insert('dc_grant_privileges', $add);
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 'failed';
        } else {
            $this->db->trans_commit();
            return 'success';
        }
    }

    function delete_data_group_user($id){
        $this->db->where('id', $id)->delete('dc_group_users');
    }
    /* Group User */

    /* User */

    function get_user($id){

        $sql = "select u.id, u.username, p.nama, p.jabatan, 
                g.nama as group_user, u.id_unit, u.id_group_users,
                IFNULL(un.nama, '') as unit 
                from dc_users u
                join dc_pegawai p on (p.id = u.id)
                join dc_group_users g on (u.id_group_users =  g.id) 
                left join dc_unit un on (un.id = u.id_unit)
                where u.id = '".$id."'";
       
        $query = $this->db->query($sql);
       
        return $query->row();
    }

    function get_list_users($limit, $start, $search){
        $q = '';
        $limit = " limit $start , $limit";

        if ($search['pencarian'] !== '') {
            $q = " and u.username like '%".$search['pencarian']."%' or p.nama like '%".$search['pencarian']."%' 
                  or p.jabatan like '%".$search['pencarian']."%' or g.nama like '%".$search['pencarian']."%' ";
        }

        $sql = "select u.id, u.username, p.nama, 
                IFNULL(p.jabatan, '') as jabatan, 
                g.nama as group_user, u.id_unit, u.id_group_users,
                IFNULL(un.nama, '') as unit 
                from dc_users u
                join dc_pegawai p on (p.id = u.id)
                join dc_group_users g on (u.id_group_users =  g.id) 
                left join dc_unit un on (un.id = u.id_unit)
                where u.id is not null $q";
        $order = " order by u.username ";
        $query = $this->db->query($sql.$order.$limit);
        $result['data'] = $query->result();
        $result['jumlah'] = $this->db->query($sql)->num_rows();
        return $result;
    }

    function update_data_user($data , $tipe){
        if ($tipe === 'insert') {
            // insert
            $data['password'] = md5('1234');
            $this->db->insert('dc_users', $data);
        }else{
            // Update
            $this->db->where('id', $data['id'])->update('dc_users', $data);
        }

        return $data['id'];
    }

    function delete_data_user($id){
        $this->db->where('id', $id)->delete('dc_users');
    }

    function get_auto_users($q, $group, $start, $limit){
        $limit = " limit $start, $limit";

        $gr = "";
        if($group !== ''){
            $gr = " and g.nama like ('%$group%') ";
        }

        $sql = "select u.id, pg.nama, g.nama as grup
            from dc_users u 
            join dc_group_users g on (u.id_group_users = g.id) 
            join dc_pegawai pg on (pg.id = u.id)
            where pg.nama like ('%$q%') 
            $gr
            order by pg.nama";
        $data['data'] = $this->db->query($sql.$limit)->result();
        $data['total'] = $this->db->query($sql)->num_rows();
        return $data;
    }
    /* User */

    /* Log */
    function get_list_log($limit, $start, $search){
        $limit = " limit $start , $limit";

        $sql = "select * from dc_log ";
        $order = " order by waktu desc ";
        $query = $this->db->query($sql.$order.$limit);
        $result['data'] = $query->result();
        $result['jumlah'] = $this->db->query($sql)->num_rows();
        return $result;
    }
    /* Log */
   
}