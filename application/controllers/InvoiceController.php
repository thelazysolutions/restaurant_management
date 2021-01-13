<?php
defined('BASEPATH') or exit('No direct script access allowed');
class InvoiceController extends CI_Controller{
    function index()
    {
     $this->load->view('invoice');  
    }
}
?>
