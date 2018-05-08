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