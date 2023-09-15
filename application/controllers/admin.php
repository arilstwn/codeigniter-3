<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
        if ($this->session->userdata('logged_in')!=true){
            redirect(base_url());
        }
	}

	public function index()
	{
		
		$this->load->view('admin/index');
	}
	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/siswa', $data);
	}

	public function hapus_siswa($id)
	{
		$this->m_modal->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}
	public function tambah_siswa()
	{
		$this->load->view('admin/tambah_siswa');
	}
	// public function tambah_siswa()
	// {
	// 	$data['kelas'] = $this->m_model->get_data('kelas')->result();
	// 	$this->load->view('admin/tambah_siswa', $data);
	// }
	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('kelas'),
		];
		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('admin/siswa'));
	}
}
?>