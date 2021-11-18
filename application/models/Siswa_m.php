<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model{

	public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'Nama Siswa',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'sekolah_asal',
                'label' => 'Sekolah Asal',
                'rules' => 'trim|required'
            ]
        ];
    }
    public function getById($id)
    {
        return $this->db->get_where('calon_siswa', ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from calon_siswa where id='$id'
    }

    public function get_all() {
		$this->db->from('calon_siswa');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
		
	}

	public function add() {
		$data = [
			'nama' => ucwords($this->input->post('nama', true)),
			'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
			'agama' => $this->input->post('agama', true),
            'alamat' => $this->input->post('alamat', true),
			'sekolah_asal' => $this->input->post('sekolah_asal', true),
		];
	
		return $this->db->insert('calon_siswa', $data);
		// return $this->db->insert_id();
	}

	public function update() {
		$data = [
            'nama' => ucwords($this->input->post('nama', true)),
			'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
			'agama' => $this->input->post('agama', true),
            'alamat' => $this->input->post('alamat', true),
			'sekolah_asal' => $this->input->post('sekolah_asal', true),   
		];
        return $this->db->update('calon_siswa', $data, array('id' => $this->input->post('id')));
		// $this->db->where('id', $this->input->post('id', true));
		// $this->db->update('calon_siswa', $data);
	}

	public function delete($id) {
		$this->db->delete('calon_siswa', ['id' => $id]);
	}

}