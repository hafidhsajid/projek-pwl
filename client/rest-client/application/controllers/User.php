<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        //diisi dengan RESTful API ynag sebelumnya dibuat
        
        $this->API = "http://localhost/projek-pwl/server/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {

        //mengambil data server RESTful dan mendecode datanya yang berformat JSON
        $respon = json_decode($this->curl->simple_get($this->API . '/user'));
        $data['datauser'] = $respon->data;
        $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer', $data);
        
    }


    public function tambah()
    {
        $data['level_list']=['admin','user'];
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->NULL,
                'nama'  => $this->input->post('nama'),
                'password'  => $this->input->post('password'),
                'level'  => $this->input->post('level')
            );

            $insert = $this->curl->simple_post($this->API . '/user', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }

            redirect('user');
        } else {
            
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API . '/user', $params));
            $data['datauser'] = $respon->data;
            $this->load->view('template/header', $data, FALSE);
            
            $this->load->view('user/tambah');
            $this->load->view('template/footer', $data, FALSE);
        }
    }

    public function edit()
    {
        $data['level_list']=['admin','user'];
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->post('id'),
                'nama'  => $this->input->post('nama'),
                'password'  => $this->input->post('password'),
                'level'  => $this->input->post('level'),
            );

            $update = $this->curl->simple_put($this->API . '/user', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }

            redirect('user');
        } else {
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API . '/user', $params));
            $data['datauser'] = $respon->data;
            $this->load->view('template/header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function hapus($id)
    {
        if (empty($id)) {
            redirect('user');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/user', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('user');
        }
    }
}

/* End of file user.php */
