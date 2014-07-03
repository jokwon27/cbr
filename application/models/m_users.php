<?php

class M_users extends CI_Model {
    
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    
    function validate_my_account($username, $password) {
        $sql = "select u.*, g.nama as profesi, p.nama, p.alamat,
        	IFNULL(un.nama, '') as unit, 
            IFNULL(n.profesi, '') as profesi_nakes
        	from dc_users u
            join dc_group_users g on (u.id_group_users = g.id)
            join dc_pegawai p on (u.id = p.id) 
            left join dc_nakes n on (n.id_pegawai = p.id)
            left join dc_unit un on (un.id = u.id_unit)
            where u.username = '$username' and u.password = '".md5($password)."'";
        return $this->db->query($sql);
    }

    function check_my_account($id_user, $password) {
        $sql = "select u.*
            from dc_users u
            where u.id = '$id_user' and u.password = '".md5($password)."'";
        return $this->db->query($sql);
    }

}
?>
