<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends \CodeIgniter\Controller {
    public $model;
    
    public function __construct() {
        helper('form');
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
            if($result){
                echo "ok";
            }else{
                echo "not ok";
            }
        }
        return view('create');
    }
    
    public function read(){
        $data['blogs'] = $this->model->read();
        return view('read',$data);
    }
    
    public function Update($id){
        $data = [];
         if($this->request->getMethod() == 'post'){
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price')
            ];
            $result = $this->model->updateData($id,$data);
            if($result){
                echo "ok";
            }else{
                echo "not ok";
            }
        }
        $data['id'] = $id;
        $data['blog'] = $this->model->single($id);
        return view('update',$data);
    }
    
    public function Delete($id){
        $this->model->deleteData($id);
        return redirect()->to('/read');
    }
    
    public function singleRead($id){
        $data['blog'] = $this->model->single($id);
        return view('single',$data);
    }
    
    public function search(){
        $data = [];
       if($this->request->getMethod() == 'post'){
           $query = $this->request->getVar('search');
           $data['blogs'] = $this->model->search($query);
           return view('search',$data);
       }
        return view('search',$data);
    }
    
}
