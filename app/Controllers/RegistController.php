<?php
namespace App\Controllers;

class RegistController extends BaseController{

	private $userModel;
	private $session;

	public function __construct(){
		$this->userModel = new \App\Models\User();
		$this->session = \Config\Services::session();
	}
	public function register(){
		return view("register");
	}
	public function proses_register(){
        $username   = $this->request->getPost("username");
        $password   = $this->request->getPost("password");
        $nama       = $this->request->getPost("nama");
        $email      = $this->request->getPost("email");
        $no_telp    = $this->request->getPost("no_telp");
        $alamat     = $this->request->getPost("alamat");

        $usernameExist = $this->userModel
        ->where("username",$username)->first();

        if($usernameExist){
            $this->session->setFlashdata("pesan","Usename sudah digunakan");
            return redirect()->to(base_url('register'));
        }
        
        if(strlen($password) < 5){
            $this->session->setFlashdata("pesan","Password minimum 5 karakter");
            return redirect()->to(base_url('register'));
        }

        $this->userModel->insert([
            "username"  => $username,
            "password"  => password_hash($password, PASSWORD_BCRYPT),
            "nama"      => $nama,
            "email"     => $email,
            "no_telp"   => $no_telp,
            "alamat"    => $alamat,
        ]);

        return redirect()->to(base_url('login'));

    }

}
?>