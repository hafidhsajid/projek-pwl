<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Transaksi extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model', 'transaksi');
        
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $transaksi = $this->transaksi->getTransaksi();
        } else {
            $transaksi = $this->transaksi->getTransaksi($id);
        }
        if ($transaksi) {
            $this->response([
                'status' =>true,
                'data' => $transaksi
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' =>false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }
    public function index_delete()
    {
        $id=$this->delete('id');

        if ($id === null) {
            $this->response([
                'status'=> false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->transaksi->deleteTransaksi($id) > 0) {
                $this->response([
                    'status' =>true,
                    'id' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message'=> 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
            
        }
        
    }
    public function index_post()
    {
        $data =[
            'id_customer' => $this->post('id_customer'),
            'id_menu' => $this->post('id_menu'),
            'tanggal' => $this->post('tanggal'),

        ];

        if ($this->transaksi->createTransaksi($data)>0) {
            $this->response([
                'status' =>true,
                'message' => 'new transaksi has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message'=> 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put()
    {
        $id = $this->put('id');
        $data =[
            'id_customer' => $this->put('id_customer'),
            'id_menu' => $this->put('id_menu'),
            'tanggal' => $this->put('tanggal'),
        ];

        if ($this->transaksi->updateTransaksi($data, $id)>0) {
            $this->response([
                'status' =>true,
                'message' => 'new transaksi has been updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message'=> 'failed to update new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}

/* End of file Transaksi.php */

?>