<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model{
    protected $table='category';
    protected $allowedFields =['title','description','price'];
    
    public function create($data){
        return $this->save($data);
    }
    
    public function read(){
        return $this->findAll();
    }
    
    public function updateData($id,$data){
        return $this->update($id, $data);  
    }
    
    public function deleteData($id){
        return $this->delete($id);
    }
    
    public function single($id){
        return $this->where('id',$id)->first();
    }
    
    public function search($query){
        return $this->like('title',$query)->findAll();
    }
    
}
