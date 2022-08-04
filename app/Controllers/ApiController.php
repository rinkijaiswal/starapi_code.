<?php

namespace App\Controllers;
use \CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class ApiController extends BaseController
{
    use ResponseTrait;
    public $model;
    public function __construct() {
        header("Access-Control-Allow-Origin: *");
        $this->model = new UserModel();
    }
    
    public function create(){
        if($this->request->getMethod() == 'post'){
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price')
            ];
            $result = $this->model->create($data);
            return $this->respondCreated($result);
        }
    }
    
    public function read(){
        $data = $this->model->read();
        return $this->respond($data);
    }
    
    public function update($id){
         if($this->request->getMethod() == 'post'){
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price')
            ];
            $result = $this->model->updateData($id,$data);
            return $this->respondCreated($result);
        }
    }
    
    public function Delete($id){
        $data = $this->model->deleteData($id);
        return $this->respondDeleted($data);
    }
    
    public function singleRead($id){
        $data = $this->model->single($id);
        return $this->respond($data);
    }
    
    public function search($query){
        $data = $this->model->search($query);
        return $this->respond($data);
    }
    
}

