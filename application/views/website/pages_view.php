
<div class="row" style="margin-left:0"> 

    <div class="col-md-12">
        <a href="<?php echo base_url('website/create_page') ?>" class="btn btn-sm btn-flat btn-primary pull-right">New Page</a>
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

    
  


    <div class="col-lg-12 mt20">
    <?= $this->paginator->dispaly_page_record_ipp() ?>
    <?php //echo $this->pagination->create_links(); ?>
      <table class="table table-responsive table-bordered">
        <thead>
          <tr>
            <th width="3%">#</th>
           
            <th width="20%">PAGE NAME</th>
            <th width="20%">PAGE HEADING</th>
            <th width="20%">PAGE STATUS</th>
            <th width="17%">ACTIONS</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $i = 1;
          if (!empty($page_data)) {
            foreach ($page_data as $page) {
          ?>
              <tr>
                <td><?= $i+$pages?></td>
               
                <td><?= $page['title'] ?></td>
                <td>
                <?= $page['heading'] ?>
                </td>
                <td> <?= $page['enable'] ?></td>
               
                <td>
                  <a href="<?= base_url('website/create_page/' . $page['id']) ?>" class="btn btn-primary btn-sm btn-flat create_product_category"><i class="fa fa-edit" title="Edit"></i></a>
                  <a href="javascript:void(0)" data-url="<?= base_url('product/delete_page/'.$page['id']) ?>" class="btn btn-danger btn-sm btn-flat delete_page " title="Delete"><i class="fa fa-trash"></i></a>

                </td>
              </tr>
          <?php $i++;
            }
          } else{?>
              <tr><td colspan="6">No Result Found..</td></tr>
          <?php } ?>

        </tbody>
      </table>
      <?php //echo $this->pagination->create_links() ?>
      <div class="box-footer clearfix">
    <?= $this->paginator->display_jump_menu_pages() ?>
</div>

    </div>

</div>

