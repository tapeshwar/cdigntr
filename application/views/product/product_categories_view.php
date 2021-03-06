
<div class="row" style="margin-left:0"> 

    <div class="col-md-12">
        <a href="javascript:void(0)" data-url="<?php echo base_url('product/create_product_category') ?>" class="btn btn-sm btn-flat btn-primary pull-right create_product_category">New Product Category</a>
    </div>
  
  
  <!-- <div class="col-md-8">
  <div class="box-header with-border" style="padding:0;">
    <div class="panel panel-default">
        <div class="panel-heading">Search</div>
        <div class="panel-body">
      <form action="<?php //echo base_url('product/index')?>" method="get">
        <div class="row">
          <div class="col-sm-4">
            <label class="control-label">Category Name:</label>
            <input type="text" value="" name="category_name" class="form-control" placeholder="Category Name">
          </div>


          <div class="col-sm-4 text-right mt30 mr0">
            <label class="control-label">&nbsp;</label>
            <button type="submit" class="btn btn-flat btn-sm btn-primary">SEARCH</button>
            <a href="<?=base_url('product/product_categories')?>" class="btn btn-flat btn-sm btn-primary">RESET</a>
          </div>
        </div>
      </form>
  </div>
  
    </div>
  </div>
  </div>
   </div> -->

    
     <div class="col-md-4 mt20" style="border:solid thin #e1e1e1; padding:5px 5px 5px 5px;">
         <div style="padding-bottom:10px">
         <button type="button" class="btn btn-sm btn-flat btn-default jtreeExpandAll">Expand All</button> 
         <button type="button" class="btn btn-sm btn-flat btn-default jtreeCollapseAll">Collapse All</button>
        </div>

        <div id="jstree">
            <ul>
            <li id="default"><a href="<?=base_url('product/product_categories/default')?>" class="jsTreeNode">Default</a>
                <ul>
                <li id="child_node_1"><a href="<?=base_url('product/product_categories/child_node_1')?>" class="jsTreeNode">Child node 1</a></li>
                <li id="child_node_2"><a href="<?=base_url('product/product_categories/child_node_2')?>" class="jsTreeNode">Child node 2</a></li>
                </ul>
            </li>
            <li id="root_node_2"><a href="<?=base_url('product/product_categories/root_node_2')?>" class="jsTreeNode">Root node 2</a>
            <ul>
                <li id="child_node_21"><a href="<?=base_url('product/product_categories/child_node_21')?>" class="jsTreeNode">Child node 21</a></li>
                <li id="child_node_22"><a href="<?=base_url('product/product_categories/child_node_22')?>" class="jsTreeNode">Child node 22</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>


    <div class="col-lg-8 mt20">
  
    <label>Category: </label>
    <input type="text" class="form-control" id="product_cat" data-url="<?=base_url('product/product_categories')?>" name="product_cat">

      <?php //echo $this->pagination->create_links(); ?>
      <table class="table table-responsive table-bordered">
        <thead>
          <tr>
            <th width="3%">#</th>
           
            <th width="20%">CATEGORY NAME</th>
            <th width="20%">CATEGORY IMAGE</th>
           
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
               
                <td><?= $product['category_name'] ?></td>
                <td>
                    <?php if(!empty($product['category_img'])){ ?>
                    <img src="<?=base_url('uploads/'.$product['category_img'])?>" height="30" ></td>
                    <?php } ?>
               
                <td>
                  <a href="javascript:void(0)" data-url="<?= base_url('product/create_product_category/' . $product['id']) ?>" class="btn btn-primary btn-sm btn-flat create_product_category"><i class="fa fa-edit" title="Edit"></i></a>
                  <a href="javascript:void(0)" data-url="<?= base_url('product/delete_product_category/'.$product['id']) ?>" class="btn btn-danger btn-sm btn-flat delete_product_category " title="Delete"><i class="fa fa-trash"></i></a>

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
