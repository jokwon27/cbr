<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_app extends CI_Model{

	function get_data_module($id_group){
		$sql = "select m.* from dc_module m
				join dc_privileges p on (m.id = p.id_module) 
				join dc_grant_privileges g on (p.id = g.id_privileges)
				where g.id_group_users = '".$id_group."'
				group by m.id order by m.urut";
		return $this->db->query($sql)->result();
	}    

   	function get_data_privileges($id_group, $id_module){
		$sql = "select p.* from dc_privileges p
				join dc_grant_privileges g on (p.id = g.id_privileges)
				where g.id_group_users = '".$id_group."'
				and p.id_module = '".$id_module."' 
				order by p.urutan asc, p.menu asc";
		return $this->db->query($sql)->result();
	}

	function get_atribute_clinic(){
		$sql = "select cl.*, k.nama as kelurahan, kb.nama as kabupaten 
				from dc_clinic cl 
				left join dc_kelurahan k on (cl.id_kelurahan = k.id)
                                left join dc_kecamatan kc on (k.id_kecamatan = kc.id)
                                left join dc_kabupaten kb on (kc.id_kabupaten = kb.id)
				where cl.aktif = 'Ya'";
		return $this->db->query($sql)->row();
	}

	function data_pasien_lama_baru($tgl){
        $data = array();

        foreach ($tgl as $key => $value) {

            $sqllama = "select count(*) as data from dc_pendaftaran pd 
                    join dc_pasien p on(pd.id_pasien= p.id)
                    where  date(pd.waktu_daftar) = '$value' and pd.status = 'Lama' "; 

                    
            $sqlbaru = "select count(*) as data from dc_pendaftaran pd 
                    join dc_pasien p on(pd.id_pasien= p.id)
                    where  date(pd.waktu_daftar) = '$value' and pd.status = 'Baru' "; 

            $data['lama'][] = (int) $this->db->query($sqllama)->row()->data;
            $data['baru'][] = (int) $this->db->query($sqlbaru)->row()->data;
        }
        
        return $data;

    }

    function data_top10_diagnosis($awal, $akhir){ 

        $sql = "select count(*) as jumlah,  g.nama from dc_diagnosa do
                join dc_golongan_sebab_sakit g on(g.id = do.id_golongan_sebab_sakit)
                where date(do.waktu) between '".$awal."' and '".$akhir."'
                group by g.id order by jumlah desc limit 0, 10 ";
       // echo $sql;

        return $this->db->query($sql)->result();
    }

    function data_pasien_per_unit($kd_unit, $tgl){
        $data = array();
        foreach ($tgl as $key => $value) {
            $sql = "select  count(*) as jumlah , s.nama, date(lp.waktu) from dc_layanan_pendaftaran lp 
                join dc_spesialisasi s on (s.id = lp.id_unit_layanan)
                where lp.id_pendaftaran is not null and date(lp.waktu) = '$value'
                and s.id = '$kd_unit' 
                and lp.jenis != 'Rawat Inap'
                ";
            //echo $sql."<br/>";
            $query = $this->db->query($sql)->row();
            if ($query != null) {
                $data[] = (int)$query->jumlah;
            }else{
                $data[] = 0;
            }
        }

        return $data;
    }

    function get_data_all_pasien($awal) {
        $sql = "
            select
            AllDaysYouWant.MyJoinDate,
            count( date(waktu_daftar) ) as jumlah
            from
            ( select
                    @curDate := Date_Add(@curDate, interval 1 day) as MyJoinDate
                 from
                    ( select @curDate := '$awal' ) sqlvars,
                    dc_pendaftaran
                 limit 7 ) AllDaysYouWant
            LEFT JOIN dc_pendaftaran p
               on AllDaysYouWant.MyJoinDate = date(p.waktu_daftar)
            group by
            AllDaysYouWant.MyJoinDate
        ";
        return $this->db->query($sql);
    }

}