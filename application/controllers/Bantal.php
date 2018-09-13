<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantal extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('aromaterapi_model');
      $this->load->helper(['url_helper','captcha','form']);

  }


	public function index() {
    $config_captcha = array(
      'img_path'  => './captcha/',
      'img_url'  => base_url().'captcha/',
      'img_width'  => '350',
      'img_height' => 60,
      'border' => 0, 
      'font_size' => 40,
      'expiration' => 7200
    );
    $cap = create_captcha($config_captcha);
    $data['img'] = $cap['image'];
    $this->session->set_userdata('mycaptcha', $cap['word']);

    $this->aromaterapi_model->counter();
    $data['about']=$this->aromaterapi_model->get_aromaterapi('about');
    $data['kualitas']=$this->aromaterapi_model->get_aromaterapi('kualitas');
    $data['harga']=$this->aromaterapi_model->get_aromaterapi('garansi');
    $data['desain']=$this->aromaterapi_model->get_aromaterapi('ongkir');
    $data['ktgr'] = $this->aromaterapi_model->get_aromaterapi('kategori');
    $data['testimoni']=$this->aromaterapi_model->get_testimoni();
    $this->load->view('frontend/ibantal',$data);
	}

  public function pagination($start=0) {
    $this->load->library('pagination');
    $jumlah_data = $this->aromaterapi_model->jum_aroma();
    $config['base_url'] = base_url()."pagination";
    $config['per_page'] = 8;
    $config['total_rows'] = $jumlah_data;

    $config['first_link'] = ' << ';
    $config['last_link'] = ' >> ';
    $config['next_link'] = ' > ';
    $config['prev_link'] = ' < ';
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    $this->pagination->initialize($config);

    $output = array(
     'pagination_link'  => $this->pagination->create_links(),
     'data_produk'   => $this->aromaterapi_model->data($config["per_page"], $start)
    );
    echo json_encode($output);
  }

  public function create(){

    $this->load->helper('form');
    $this->load->library('form_validation');


    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('subject','subject','required');
    $this->form_validation->set_rules('text','text','required');


    if ($this->form_validation->run()=== FALSE) {
      $this->load->view('frontend/ibantal');
    }else {
        $site_key = '6LfbrFsUAAAAAGPzDoAIvGtHocBli24SUm1dvgXG'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6LfbrFsUAAAAAEmLNghLKERdXLr2dGhgxtkhTQl7'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
  if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);

            if($data['success'])
            {
               $this->aromaterapi_model->set_aromaterapi();
      redirect('ibantal');
            }
            else
            {
                $success = false;
            }
        }
        else
        {
            $success = false;
        }

      // $dat = array('upload_data' => $this->upload->data());


    }



    }
     





}
