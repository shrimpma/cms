<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller{


    function __construct(){
        parent::__construct();
    }
    //主页面
    public function main(){
        $this->load->view('test/main');

    }
    //列表页面 html
    public function index(){
        $this->load->view('test/index');
    }

    //anjularjs 页面
    public function js(){
        $this->load->view('test/js');
    }

    //修改页面
    public function edit(){
        $this->load->view('test/edit');
    }

}