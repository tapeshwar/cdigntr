<div class="modal fade" id="myModalHorizontal" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header modal-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?= $heading ?>
            </div>
            <div class="modal-body">
                <form id="product_category_form" action="<?= base_url('product/create_product_category') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <label class="control-label">Product Category:</label>
                            <input type="text" value="" name="category_name" class="form-control" placeholder="Product Category" required data-msg-required="Product category is required">
                        </div>

                        <div class="col-sm-6">
                            <label class="control-label">Category Image:</label>
                            <input type="file" value="" name="category_img" class="form-control view_photo" placeholder="Category Image">
                        </div>

                    </div>


                    <div class="col-md-12 mt20">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-md btn-flat category_create_btn">Submit</button>
                        </div>
                    </div>
         
                </div>
                </form>

            </div>
        </div>
    </div>
</div>