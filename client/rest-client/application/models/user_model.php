<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    public function getAlluser()
    {
        // $query = $this->db->get('user');

        // return $query->result_array();

        return $this->db->get('user')->result_array();
    }

    private function uploadFoto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }
    public function datatables()
    {
        $query= $this->db->order_by('id', 'DESC')->get('user');
        return $query->result();
    }

    public function tambahdatausr()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "foto" => $this->uploadFoto()
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('user', $data);
    }

    public function hapusdatausr($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getuserByID($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function ubahdatausr()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "foto" => $this->input->post('foto', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function cariDataUser()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('user')->result_array();
    }
}

/*user_modModel.php */
