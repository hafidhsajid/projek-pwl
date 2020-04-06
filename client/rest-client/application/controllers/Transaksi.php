<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
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
        $respon = json_decode($this->curl->simple_get($this->API . '/transaksi'));
        $data['datatransaksi'] = $respon->data;
        $getmenu = json_decode($this->curl->simple_get($this->API . '/menu'));
        $data['datamenu'] = $getmenu->data;
        $getuser = json_decode($this->curl->simple_get($this->API . '/user'));
        $data['datauser'] = $getuser->data;
        $this->load->view('template/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
        
    }


    public function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->NULL,
                'id_customer'  => $this->input->post('id_customer'),
                'id_menu'  => $this->input->post('id_menu'),
                'tanggal'  => $this->input->post('tanggal')
            );

            $insert = $this->curl->simple_post($this->API . '/transaksi', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }

            redirect('transaksi');
        } else {
            
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API . '/transaksi', $params));
            $data['datatransaksi'] = $respon->data;
            $getuser = json_decode($this->curl->simple_get($this->API . '/user'));
            $data['datauser'] = $getuser->data;
            $getmenu = json_decode($this->curl->simple_get($this->API . '/menu'));
            $data['datamenu'] = $getmenu->data;
            $this->load->view('template/header', $data);
            $this->load->view('transaksi/tambah', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function edit()
    {
        $data['customer']=json_decode($this->curl->simple_get($this->API . '/transaksi'));
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->post('id'),
                'id_customer'  => $this->input->post('id_customer'),
                'id_menu'  => $this->input->post('id_menu'),
                'tanggal'  => $this->input->post('tanggal'),
            );

            $update = $this->curl->simple_put($this->API . '/transaksi', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }

            redirect('transaksi');
        } else {
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API . '/transaksi', $params));
            $data['datatransaksi'] = $respon->data;
            $getuser = json_decode($this->curl->simple_get($this->API . '/user'));
            $data['datauser'] = $getuser->data;
            $getmenu = json_decode($this->curl->simple_get($this->API . '/menu'));
            $data['datamenu'] = $getmenu->data;
            $this->load->view('template/header', $data);
            $this->load->view('transaksi/edit', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function hapus($id)
    {
        if (empty($id)) {
            redirect('transaksi');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/transaksi', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('transaksi');
        }
    }
}

/* End of file transaksi.php */
