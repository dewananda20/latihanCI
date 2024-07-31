<?php
    class Ckasir extends CI_Controller
    {
    function tampilankasir() {
    $data ['konten']=$this->load->view('tampilankasir','',TRUE);
    $this ->load->view('tampilanawal',$data);
  }
  function hitung()
  {
$hasil=$_POST;

    $data['konten']=$this->load->view ('hasilhitung', $hasil, TRUE); 
    $this->load->view ('tampilanawal', $data);
  }
}
?>
