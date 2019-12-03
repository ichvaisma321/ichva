<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('SiswaModel'); // Load SiswaModel ke controller ini
	}
	
	public function index(){
		$data['siswa'] = $this->SiswaModel->view();
		$this->load->view('siswa/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->SiswaModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->SiswaModel->save(); // Panggil fungsi save() yang ada di SiswaModel.php
				redirect('siswa');
			}
		}
		
		$this->load->view('siswa/form_tambah');
	}
	
	public function ubah($nis){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->SiswaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->SiswaModel->edit($nis); // Panggil fungsi edit() yang ada di SiswaModel.php
				redirect('siswa');
			}
		}
		
		$data['siswa'] = $this->SiswaModel->view_by($nis);
		$this->load->view('siswa/form_ubah', $data);
	}
	
	public function hapus($nis){
		$this->SiswaModel->delete($nis); // Panggil fungsi delete() yang ada di SiswaModel.php
		redirect('siswa');
	}

	public function detail($nis){
		$data['siswa'] = $this->SiswaModel->getSiswaById($nis);
		$this->load->view('siswa/detail', $data);		
}
}
