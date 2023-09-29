<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
		// $this->load->libarary('upload');
        if ($this->session->userdata('logged_in')!=true && $this->session->userdata('role') != 'admin'){
            redirect(base_url());
        }
	}

	        public function index()
	{
		
		         $this->load->view('admin/index');
	}

	// //upload image
	//         public function upload_img($value)
	// {
	//         	 $kode = round(microtime(true) * 1000);
	// 	         $config['upload_path'] = '.images/siswa/';
	// 	         $config['allwed_types'] = 'jpg|png|jpeg';
    //              $config['max_size'] = '3000';
	// 	         $config['file_name'] = $kode;
	// 	        $this->upload->initialize($config);
	// 	        if (!$this->upload->do_upload($value)){
	// 		    return array( false, '');
	// 	} else {
	// 		    $fn = $this->upload->data();
	// 		    $nama = $fn['file_name'];
	// 		    return array( true, $nama );
	// 	}
	// }
	
	        public function siswa()
	{
		         $data['siswa'] = $this->m_model->get_data('siswa')->result();
		         $this->load->view('admin/siswa', $data);
	}

	        public function hapus_siswa($id)
			{
				$siswa = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->row();
				if ($siswa) {
					if ($siswa->foto !== 'User.png') {
						$file_path = './images/siswa/' . $siswa->foto;
						 if (file_exists($file_path)){
							if (unlink($file_path)){
								$this->m_model->delete('siswa', 'id_siswa', $id);
								redirect(base_url('admin/siswa'));
							} else{
								echo "Gagal menghapus file";
							}
						 } else {
							echo "File tidak ditemukan";
						 }
					} else {
						$this->m_model->delete('siswa', 'id_siswa', $id);
						redirect(base_url('admin/siswa'));
					}
				} else {
					echo "Siswa tidak ditemukan";
				}
			}
	
	   
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function tambah_siswa()
	{  
		         $data['siswa'] = $this->m_model->get_data('siswa')->result();
		         $this->load->view('admin/tambah_siswa');
	}
	
	        public function aksi_tambah_siswa()
	{
		        //  $foto = $this->upload_img('foto');
		        //  if ($foto[0]== false) {

			$data = [
				// 'foto'         => 'User.png',
				'nama_siswa'   => $this->input->post('nama_siswa'),
				'nisn'         => $this->input->post('nisn'),
				'gender'       => $this->input->post('gender'),
				'id_kelas'     => $this->input->post('id_kelas'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
			];
			$this->m_model->tambah_data('siswa', $data);
			redirect(base_url('admin/siswa'));
		} 
	// 	else {
	// 	    $data = [
	// 		    'foto'         => $foto[1],
	// 		    'nama_siswa'   => $this->input->post('nama_siswa'),
	// 		    'nisn'         => $this->input->post('nisn'),
	// 		    'gender'       => $this->input->post('gender'),
	// 		    'id_kelas'     => $this->input->post('id_kelas'),
	//             'nama_sekolah' => $this->input->post('nama_sekolah')
	// 	];
	// 	    $this->m_model->tambah_data('siswa', $data);
	// 	    redirect(base_url('admin/siswa'));
	// }

		//     public function ubah_siswa()
		//        {
		// 	     $data['siswa']=$this->m_model->get_by_id('siswa', 'id_siswa')->result();
		// 	     $data['kelas']=$this->m_model->get_data('kelas')->result();
		// 	     $this->load->view('admin/siswa', $data);
		// };

	//         public function akun()
	// {
	// 	         $data['user']=$this->m_model->get_by_id('admin', 'id', $this->session->userdata('id'))->result();
	// 	         $this->load->view('admin/akun', $data);
	// }
	//         public function aksi_ubah_akun()
	// {
	// 	         $password_baru = $this->input->post('password_baru');
	// 	         $konfirmasi_password= $this->input->post('konfirmasi_password');
	// 	         $email = $this->input->post('email');
	// 	         $username = $this->input->post('username');
	// }
    //    // baut data yang akan diubah
	//              $data = array(
	// 	         'email' => $email,
	// 	         'username' => $username
	// );	
	
	// //  //jika ada password baru
	//              if (!empty($passwor_baru)){
	// 	// pastikan password baru dan konfirmasi password sama
	// 	         if ($password_baru === $konfirmasi_password) {
	// 		//hash password baru
	// 		     $data['password'] = md5($password_baru);
	// 	} else {
	// 		     $this->session->set_flashdata('massage', 'password baru dan konfirmasi password harus sama');
	// 		     redirect(base_url('admin/akun'));
	// 	}
	// }
	 
	//  // lakukan pembaruan data
	//              $this->session->set_userdata($data);
	//              $update_result = $this->m-model->ubah_data('admin', $data, array('id' => $this->session->userdata('id')));
	
	//              if ($update_result) {
	// 	         redirect(base_url('admin/akun'));
	// } else {
	// 	         redirect(base_url('admin/akun'));
	// }


       public function keuangan()
	   {
		$data['keuangan'] = $this->m_model->get_data('keuangan')->result();
		$this->load->view('admin/keuangan', $data);
	   }
	   public function tambah_keuangan()
	   {  
					$data['keuangan'] = $this->m_model->get_data('keuangan')->result();
					$this->load->view('admin/tambah_keuangan');
	   }
	   
			   public function aksi_tambah_keuangan()
	   {
   
			   $data = [
				 
				   'pemasukan'   => $this->input->post('pemasukan'),
				   'pengeluaran' => $this->input->post('pengeluaran'),
				   'tanggal'     => $this->input->post('tanggal'),
			   ];
			   $this->m_model->tambah_data('keuangan', $data);
			   redirect(base_url('admin/keuangan'));
		   } 

		 
		}



?>