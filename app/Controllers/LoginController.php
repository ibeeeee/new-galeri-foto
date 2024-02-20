<?php
namespace App\Controllers;

class LoginController extends BaseController{

	private $userModel;
	private $session;

	public function __construct(){
		$this->userModel = new \App\Models\User();
		$this->session = \Config\Services::session();
	}
	public function login(){
		return view("login");
	}
	public function proses_login(){
		$username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $user = $this->userModel
        ->where("username",$username)
        ->first();

        if($user){
        	if(password_verify($password, $user->password)){
        		$session_data = ([
        			"user_id" => $user->user_id,
        			"user_nama" => $user->nama,
        		]);
        		session()->set($session_data);
        		return redirect()->to(base_url('/'));

        }else{
        	$this->session->setFlashdata("pesan","kosong");
        	return redirect()->to(base_url("login"));
        }
    	}else{
    		$this->session->setFlashdata("pesan","salah");
        	return redirect()->to(base_url("login"));	
    	}
	}

}
?>