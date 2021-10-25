<?php

class Login_model extends CI_model
{
	function login_user($inputan)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password2 = md5($password);
        
        $q_data = $this->db->query("select * from user where username = '".$username."' and password = '$password'");
        $j_data = $q_data->num_rows();
        $a_data = $q_data->row();
        
        $adding = false; $edit = false; $delete = false; $cetak = false;
        
        if($j_data === 1) {

                        

            redirect('buku/index');
        } else {
            echo "<script>alert('username or password salah !');history.go(-1);</script>";
        }
	}
}

?>
