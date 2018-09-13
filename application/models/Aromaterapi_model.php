 	<?php
class Aromaterapi_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

function data($number,$offset){
	$output='';
	$batik = $this->db->get('produk',$number,$offset)->result_array();
	$i=0; 
	foreach ($batik as $u ) {
		$src = base_url()."assets/img/uploads/".$u['gambar'];
		$nm = $u['nama'];
		$hr = $u['harga'];
		$ktgr = $u['id_kategori'];
		$des = $u['deskripsi'];
		$output .='
		<a href="#" class="modal-pro" data-toggle="modal" data-target="#myModal'; $output .=$i; $output .='">
			<div class="gallery_product col-sm-4 col-xs-12 filter cat'; $output .=$ktgr; $output .='">
				<div class="fancybox" rel="ligthbox">
					<img class="img-responsive" alt="" src="'; $output .= $src; $output .='" />
					<div class="img-info">
						<h3>'; $output .= $nm; $output.='</h3>
						<h4>'; $output .= $hr; $output.='</h4>
						<p>'; $output .= $des; $output.='</p>
					</div>
				</div>
			</div>
		</a>';
		
		$i++;
	}
	$output .='
		<br><br><br>
	';
	$i=0;
	foreach ($batik as $slide) {
		$src = base_url()."assets/img/uploads/".$slide['gambar'];
		$nm = $slide['nama'];
		$des = $slide['deskripsi'];
		$output .='
            <div id="myModal'; $output .=$i; $output .='" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">'; $output .= $nm; $output.='</h4>
						</div>
							<img class="col-md-12" src="'; $output .= $src; $output .='">
						<div class="modal-footer" style="text-align: center;">
						<p>'; $output .= $des; $output.='</p>
						</div>
					</div>
				</div>
			</div>
	    ';
	    $i++;
	}
	$output .='
		<br><br><br>
		<div id="ninja-slider" style="display:none">
            <div class="slider-inner">
                <ul>
	';
	foreach ($batik as $slide) {
		$src = base_url()."assets/img/uploads/".$slide['gambar'];
		$nm = $slide['nama'];
		$des = $slide['deskripsi'];
		$output .='
              <li>
                  <a class="ns-img" href="'; $output .= $src; $output .='"></a>
                  <div class="caption">
                      <h3>'; $output .= $nm; $output.='</h3>
                      <p>'; $output .= $des; $output.='</p>
                  </div>
              </li>
	    ';
	}
	$output .='
				</ul>
		    <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
		</div>
	';
	return $output;
}
  public function get_aromaterapi($table){
  	$query=$this->db->get($table);
  	return $query->result_array();
  }

	public function get_testimoni(){
  	$query=$this->db->get('testimoni');
  	return $query->result_array();
  }

	 public function get_counter(){
	 	$query=$this->db->get('data');
	 	return $query->result_array();
	 }

	 // public function batik_paginate($number, $offset) {
	 // 	return $this->db->get('produk',$number, $offset)->result_array();
	 // }

	 public function jum_aroma() {
	 	return $this->db->get('produk')->num_rows();
	 }
	 	public function get_frontend(){
     	$query=$this->db->get('kontak');
     	return $query->result_array();
   	}

   	public function insert($data)
   	{
    	$this->db->insert('produk', $data);
   	}
		public function insert1($data)
   	{
    	$this->db->insert('testimoni', $data);
   	}

   	public function counter() {
   		$dnow = date('Y-m-d');
   		$cek = $this->db->get_where('data',array('date'=>$dnow))->num_rows();
   		if ($cek > 0) {
   			$this->db->set('counter','counter+1', FALSE)->where('date',$dnow)->update('data');
   		} else {
   			$this->db->insert('data', array('date'=>$dnow, 'counter'=>1));
   		}
	 }

	 public function get_batik_id($id,$table){
	  $query=$this->db->get_where($table, array('id'=>$id));
	  return $query->row_array();
	 }
	 public function get_testi_id($id){
	  $query=$this->db->get_where('testimoni', array('id'=>$id));
	  return $query->row_array();
	 }


	 public function update_batik($id, $data,$table){
	 	 $this->load->helper('url');

	 	 $this->db->where('id',$id);
	 	 return $this->db->update($table, $data);

	 	}

		public function testimoni($id,$data){
			$this->load->helper('url');
			// $this->upload->do_upload('foto');
			// $gambar = $this->upload->data();
			// $data = array(
			// 		'gambar'		=> $gambar['file_name']
			// );

			$this->db->where('id',$id);
			return $this->db->update('testimoni', $data);

		 }

	   public function set_aromaterapi(){
	     $this->load->helper('url');

	     $data=array(
	       'nama'=> $this->input->post('nama'),
	       'email'=> $this->input->post('email'),
	       'subject'=> $this->input->post('subject'),
	       'pesan'=> $this->input->post('pesan')
	     );
	     return $this->db->insert('kontak', $data);

	   }




	 	public function delete_data($id,$table){
	 	 return $this->db->delete($table,array('id'=>$id));
	 	}



 	function cek_login($table,$where){
 			return $this->db->get_where($table,$where);
 	}







}
