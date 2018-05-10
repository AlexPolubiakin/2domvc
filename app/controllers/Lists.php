<?php
class Lists extends Controller {
    
    public function __construct(){
        
    }
    public function index(){
        $data = [
        ];
        $this->view('lists/index', $data);
    }
    public function add(){
        
        $data = [
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'list_name' => trim($_POST['list_name']),
                'list_desc' => trim($_POST['list_desc']),
                'author' => $_SESSION['user_id'],
                'list_name_err' => '',
                'list_desc_err' => ''
            ];
        }
        $this->view('lists/add', $data);
    }
    public function edit(){
        $data = [
        ];
        $this->view('lists/edit', $data);
    }
    public function show(){
        $data = [
        ];
        $this->view('lists/show', $data);
    }
}