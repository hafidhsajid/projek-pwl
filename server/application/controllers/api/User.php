<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class User extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $user = $this->user->getUser();
        } else {
            $user = $this->user->getUser($id);
        }
        if ($user) {
            $this->response([
                'status' =>true,
                'data' => $user
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
            if ($this->user->deleteUser($id) > 0) {
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
            'nama' => $this->post('nama'),
            'password' => $this->post('password'),
            'level' => $this->post('level'),

        ];

        if ($this->user->createUser($data)>0) {
            $this->response([
                'status' =>true,
                'message' => 'new user has been created'
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
            'nama' => $this->put('nama'),
            'password' => $this->put('password'),
            'level' => $this->put('level'),
        ];

        if ($this->user->updateUser($data, $id)>0) {
            $this->response([
                'status' =>true,
                'message' => 'new user has been updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message'=> 'failed to update new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}

/* End of file User.php */

?>