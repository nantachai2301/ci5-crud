<?php namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller {
       //Show 
    public function index() {
        $NameModel = new NameModel();
        $data['users'] = $NameModel->orderBy('id', 'ASC')->findAll();
        return view('namelist', $data);
    }
}