<div class="row">

    <div class="col-md-12" style="margin-bottom: 10px;">
        <a href="<?= base_url('product/index') ?>" class="btn btn-sm btn-flat btn-primary pull-right">Product List</a>
    </div>


    <div class="col-md-12">

        <form id="create_product_form" action="<?= base_url('product/create_product') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">


            <div class="col-sm-4">
                <label class="control-label">Product Code:</label>
                <input type="text" value="" name="product_id" class="form-control" placeholder="Product Code" required>
            </div>


            <div class="col-sm-4">
                <label class="control-label">Product Name:</label>
                <input type="text" value="" name="name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="col-sm-4">
                <label class="control-label">Product Category:</label>
                <input type="text" value="" name="category" class="form-control" placeholder="Product Category" required>
            </div>

            <!-- Select Basic -->
            <div class="col-sm-4">
                <label class="control-label">Quantity:</label>
                <input type="text" value="" name="quantity" class="form-control" placeholder="Quantity" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Product Description:</label>
                <input type="text" value="" name="description" class="form-control" placeholder="Product Description" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Discount:</label>
                <input type="text" value="" name="discount" class="form-control" placeholder="Discount" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Stock:</label>
                <input type="text" value="" name="stock" class="form-control" placeholder="Stock" required>
            </div>
            <div class="col-sm-4">
                <label class="control-label">Online Date:</label>
                <input type="text" value="" name="online_date" class="form-control" placeholder="Online Date" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Enable:</label>
                <input type="text" value="" name="enable" class="form-control" placeholder="Enable" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Author:</label>
                <input type="text" value="" name="author" class="form-control" placeholder="Author" required>
            </div>
            <div class="col-sm-4">
                <label class="control-label">Approved By:</label>
                <input type="text" value="" name="approved_by" class="form-control" placeholder="Approved By" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Comments:</label>
                <input type="text" value="" name="comments" class="form-control" placeholder="Comments" required>
            </div>

            <div class="col-sm-4">
                <label class="control-label">Product Image:</label>
                <input type="file" value="" name="product_img" class="form-control" placeholder="Product Image">
            </div>

    </div>


    <div class="col-md-12 mt20">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-sm btn-flat product_create_btn">Submit</button>
        </div>
    </div>
    </form>



</div>