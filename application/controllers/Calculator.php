<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Calculator extends CI_Controller
{

    /**
     * Index Page for this controller.
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->helper('url');
        $this->lang->load('ratiocalculator');

        $css = base_url('assets/css/');
        $js = base_url('assets/js/');

        $data['css'] = array(
            $css . "bootstrap.min.css",
            $css . "w3.css",
            $css . "gh-fork-ribbon.min.css",
        );
        $data['js'] = array(
            $js . "jquery.min.js",
            $js . "bootstrap.min.js",
            $js . "ratiocalculator.js"
        );
        $data['lang'] = array(
            'appname' => $this->lang->line('rc_appname'),
            'description' => $this->lang->line('rc_description'),
            'github_fork' => $this->lang->line('rc_github_fork'),
            'welcome' => sprintf($this->lang->line('rc_welcome'), $this->lang->line('rc_appname')),
            'basevalue' => $this->lang->line('rc_basevalue'),
            'othervalue' => $this->lang->line('rc_othervalue'),
            'wantedvalue' => $this->lang->line('rc_wantedvalue'),
            'answer' => $this->lang->line('rc_answer'),
        );


        $this->load->view('calculator', $data);
    }
}
