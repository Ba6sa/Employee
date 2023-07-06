<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmpModel; 


class EmpController extends BaseController
{
    public function index()
    {
        $fetchEmp= new EmpModel();
        $data['operations'] = $fetchEmp->findAll();

        return view('operations/list', $data);
    }

    public function createEmp()
    {   
        $data['EmpID'] ='2023_';
        return view('operations/create', $data);
    }

    public function storeEmp()
    {
        $insertEmp = new EmpModel();

        if($img = $this->request->getFile('EmpPf')){
            if($img->isValid() && ! $img->hasMoved()){
                $imageName = $img->getName();
                $img->move('uploads/', $imageName);
            }
        }

        $data = array (
            'emp_id' =>$this->request->getPost('EmpId'),
            'emp_name' =>$this->request->getPost('EmpName'),
            'emp_age' =>$this->request->getPost('EmpAge'),
            'emp_add' =>$this->request->getPost('EmpAdd'),
            'emp_dob' =>$this->request->getPost('EmpDob'),
            'emp_gen' =>$this->request->getPost('EmpGen'),
            'emp_natl' =>$this->request->getPost('EmpNatl'),
            'emp_ctc' =>$this->request->getPost('EmpCtc'),
            'emp_email' =>$this->request->getPost('EmpEmail'),
            'emp_pf' => $imageName,
        );

        $insertEmp->insert($data);
        return redirect()->to('/operations')->with('success','Employee Added successfully!');
       // Store
    }
    
    public function updatedlist()
    {   
        $fetchEmp= new EmpModel();
        $data['change'] = $fetchEmp->findAll();
        return view ('operations/updatedlist', $data);
    }
    
    
    public function editEmp($id)
    {
        $fetchEmp = new EmpModel();
        $data['emp'] = $fetchEmp->where('id', $id)->first();
        return view ('operations/update', $data );
    }
   
     
    public function updateEmp($id)
    {
        $updateEmp = new EmpModel();
        $db = db_connect();

        if($img = $this->request->getFile('EmpPf')){
            if($img->isValid() && ! $img->hasMoved()){
                $imageName = $img->getName();
                $img->move('uploads/', $imageName);
            }
        }

        if(!empty($_FILES['EmpPf']['name'])) {
            $db->query("UPDATE emp_list SET emp_pf ='$imageName' WHERE id ='$id'");
        }

        $data = array (
            'emp_id' =>$this->request->getPost('EmpId'),
            'emp_name' =>$this->request->getPost('EmpName'),
            'emp_age' =>$this->request->getPost('EmpAge'),
            'emp_add' =>$this->request->getPost('EmpAdd'),
            'emp_dob' =>$this->request->getPost('EmpDob'),
            'emp_gen' =>$this->request->getPost('EmpGen'),
            'emp_natl' =>$this->request->getPost('EmpNatl'),
            'emp_ctc' =>$this->request->getPost('EmpCtc'),
            'emp_email' =>$this->request->getPost('EmpEmail'),
        );
        $updateEmp->update($id, $data);
        return redirect()->to('/operations/updatedlist')->with('success','Employee Updated successfully!');
       // Update
    }
    
    public function delList()
    {   
        $fetchEmp= new EmpModel();
        $data['remove'] = $fetchEmp->findAll();
        return view ('operations/removelist', $data);
    }
    

    public function deleteEmp($id)
    {
        $deleteEmp = new EmpModel();
        $deleteEmp->delete($id);
        return redirect()->to('/operations/removelist')->with('success', 'Employee Deleted Successfully');
       // Delete
    }

}
