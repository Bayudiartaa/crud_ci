<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Siswa_m');
	}

	public function index() {
		$data = [
			'title' => 'Data Siswa',
			'data_siswa' => $this->Siswa_m->get_all(),
		];
		$this->template->load('template', 'pendaftaran/data_siswa', $data);
	}

	public function add()
    {
        $siswa = $this->Siswa_m; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($siswa->rules()); //menerapkan rules validasi pada Siswa_m
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada Siswa_m
        if ($validation->run()) {
            $siswa->add();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Siswa berhasil disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="alert">
                <span aria-hidden="true">&times;</span>
                </button></div>');
            redirect("siswa");
        }
        $data["title"] = "Tambah Data Siswa";
		$this->template->load('template', 'pendaftaran/add_siswa', $data);
    }
    
	public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');

        $siswa = $this->Siswa_m;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Siswa berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="alert">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("siswa");
        }
        $data["title"] = "Edit Data Siswa";
		$data["data_siswa"] = $siswa->getById($id);
        if (!$data["data_siswa"]) show_404();
        $this->template->load('template', 'pendaftaran/edit_siswa', $data);
    }
	
	public function delete()
    {
        $id = $this->input->post('id');
        if (!isset($id)) show_404();
        $this->Siswa_m->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Siswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="alert">
            <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect('siswa');
    }

}
