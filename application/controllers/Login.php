<?php
/**
 * 登录页判断登录用户
 * User: Administrator
 * Date: 2017/1/16 0016
 * Time: 17:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

}