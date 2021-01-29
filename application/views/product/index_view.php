
  <div class="row"> 

  <div class="col-md-12" style="margin-bottom: 10px;">
    <a href="<?= base_url('product/create_product') ?>" class="btn btn-sm btn-flat btn-primary pull-right">Add Product</a>
  </div>
  
  <div class="col-md-12">
  <div class="box-header with-border" style="padding:0;">
    <div class="panel panel-default">
        <div class="panel-heading">Search</div>
        <div class="panel-body">
      <form action="<?php //echo base_url('product/index')?>" method="get">
        <div class="row">
          <div class="col-sm-4">
            <label class="control-label">Name:</label>
            <input type="text" value="" name="name" class="form-control" placeholder="Name">
          </div>


          <div class="col-sm-4 text-right mt30 mr0">
            <label class="control-label">&nbsp;</label>
            <button type="submit" class="btn btn-flat btn-sm btn-primary">SEARCH</button>
            <a href="<?=base_url('product/index')?>" class="btn btn-flat btn-sm btn-primary">RESET</a>
          </div>
        </div>
      </form>
  </div>
  
    </div>
  </div>
  </div>
   </div>

     <div class="row"> 
    <div class="col-lg-12 mt20">
  
      <?php //echo $this->pagination->create_links(); ?>
      <table class="table table-responsive table-bordered">
        <thead>
          <tr>
            <th width="3%">#</th>
            <th width="20%">PRODUCT ID</th>
            <th width="20%">NAME</th>
            <th width="20%">DESCRIPTION</th>
            <th width="20%">CATEGORY</th>
            <th width="17%">ACTIONS</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $i = 1;
          if (!empty($product_data)) {
            foreach ($product_data as $product) {
          ?>
              <tr>
                <td><?= $i + $page ?></td>
                <td><?= $product['product_id'] ?></td>
                <td><?= $product['name'] ?>fafasdf dfsadf dsas sdfsd dfasda afdadad </td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['category'] ?></td>
                <td>
                  <a href="<?= base_url('product/create_product/' . $product['id']) ?>" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-pencil" title="Edit"></i></a>
                  <a href="javascript:void()" data-url="<?= base_url('product/edit_product') ?>" class="btn btn-danger btn-xs btn-flat" title="Delete"><i class="fa fa-trash"></i></a>

                </td>
              </tr>
          <?php $i++;
            }
          } else{?>
              <tr><td colspan="6">No Result Found..</td></tr>
          <?php } ?>

        </tbody>
      </table>
      <?php echo $this->pagination->create_links() ?>
    

  </div>
     </div>


  <!-- <ul class="pagination">
		<li class="page-item disabled"><span class="page-link">Previous</span></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><span class="page-link">2</span></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	</ul> -->
