<?php
$this->load->view('common/common_header.php');



$class = $this->router->fetch_class();
$method = $this->router->fetch_method();
//echo $this->router->fetch_class(); die;

$this->load->view($class.'/'.$method.'_view');




$this->load->view('common/common_footer.php');
?>