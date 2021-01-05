<?php
$this->load->view('common/common_header.php');



$class = $this->router->fetch_class();
$method = $this->router->fetch_method();
//echo $this->router->fetch_class(); die;
?>
<div class="main-panel">
        <div class="content-wrapper">
<?php
$this->load->view($class.'/'.$method.'_view');
?>
</div>
        <!-- content-wrapper ends -->

<?php

$this->load->view('common/common_footer.php');
?>