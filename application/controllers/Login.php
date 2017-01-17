<?php
/**
 * 登录页判断登录用户
 * User: Administrator
 * Date: 2017/1/16 0016
 * Time: 17:34
 */
//放止用户直接通过路径来访问控制器，如果这样的话会显示找不到（封装）
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('index');
    }

}