<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "Super.php";
class Tkategori extends Super{

    protected $alter;

    public function __construct(){
        parent::__construct();
        $this->data['menu_id'] = 15;
        $this->generateTitle();
        $this->alter = new Altercrud();
        $this->alter->setTable('t_kategori_user');
        $this->alter->detail_skip = array(1);
        $this->alter->tambah_skip = array('id');
        $this->alter->table_skip = array('id');
        $this->alter->detail_skip = array('id');
        $this->data['output'] = $this->alter->generate();

    }

    public function index(){
        $this->load->view($this->data['user_view'],$this->data);
    }
}