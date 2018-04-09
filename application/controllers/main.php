<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('homePeople');
    }
    public function performingArts(){
        $this->load->view('performingArts');
    }
    public function literaryArts(){
        $this->load->view('literaryArts');
    }
    public function fineArts(){
        $this->load->view('fineArts');
    }
    public function lanGaming(){
        $this->load->view('lanGaming');
    }
    public function athletics(){
        $this->load->view('athletics');
    }
    public function photography(){
        $this->load->view('photography');
    }
    public function funevents(){
        $this->load->view('funevents');
    }
    public function registrationPeople(){ 
        $this->load->view('registrationPeople');
    }
    public function photos(){
        $this->load->view('photos');
    }
    public function videos(){
        $this->load->view('videos');
    }
    public function studentCouncil(){
        $this->load->view('studentCouncil');
    }
    public function sponsors(){
        $this->load->view('sponsors');
    }
    public function about(){
        $this->load->view('about');
    }
    public function adminHome(){
        $this->load->view('adminHome');
    }
    public function adminLogin(){
        $this->load->view('adminLogin');
    }
    public function checkLogin(){
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->checklogin($data);
        if($success){
            $this->load->view('adminHome');
        }
        else{
            echo '<script>alert("login Error! Invalid Username or Password");'
                            . 'window.location.href="'.  base_url().'Main/adminLogin"</script>';
        }
    }

}
?>