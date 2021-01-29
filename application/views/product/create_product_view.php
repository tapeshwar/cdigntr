<div class="row">

  <div class="col-md-12" style="margin-bottom: 10px;">
    <a href="<?= base_url('product/index') ?>" class="btn btn-sm btn-flat btn-primary pull-right">Product List</a>
  </div>


    <div class="col-md-4">

      <form id="create_product_form" action="<?= base_url('product/create_product') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">


        <div class="form-group">
          <label class="col-md-12 control-label" for="product_id">PRODUCT ID</label>
          <div class="col-md-12">
            <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="product_name">PRODUCT NAME</label>
          <div class="col-md-12">
            <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label" for="product_description">PRODUCT DESCRIPTION</label>
          <div class="col-md-12">
            <textarea class="form-control" id="product_description" name="description"></textarea>
          </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-12 control-label" for="product_categorie">PRODUCT CATEGORY</label>
          <div class="col-md-12">
            <select id="product_categorie" name="category" class="form-control">
              <option value="">SELECT</option>
              <option value="1">Food</option>
            </select>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
          <div class="col-md-12">
            <input id="available_quantity" name="quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

          </div>
        </div>



        <div class="form-group">
          <label class="col-md-12 control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>
          <div class="col-md-12">
            <input id="percentage_discount" name="discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
       



    </div>





    <div class="col-md-4">

    <div class="form-group">
          <label class="col-md-12 control-label" for="stock_alert">STOCK ALERT</label>
          <div class="col-md-12">
            <input id="stock_alert" name="stock" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">

          </div>
        </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-12 control-label" for="online_date">ONLINE DATE</label>
        <div class="col-md-12">
          <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" required="" type="text">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-12 control-label" for="author">AUTHOR</label>
        <div class="col-md-12">
          <input id="author" name="author" placeholder="AUTHOR" class="form-control input-md" required="" type="text">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-12 control-label" for="enable_display">ENABLE DISPLAY</label>
        <div class="col-md-12">
          <input id="enable_display" name="enable" placeholder="ENABLE DISPLAY" class="form-control input-md" required="" type="text">

        </div>
      </div>



      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-12 control-label" for="approuved_by">APPROUVED BY</label>
        <div class="col-md-12">
          <input id="approuved_by" name="approved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-12 control-label" for="comment">COMMENTS</label>
        <div class="col-md-12">
          <textarea id="comment" name="comments" placeholder="COMMENT" class="form-control input-md" required="" type="text"></textarea>

        </div>
      </div>



    </div>





    <div class="col-md-4">
      <!-- File Button -->
      <div class="form-group">
        <label class="col-md-12 control-label" for="filebutton">IMAGE: </label>
        <div class="col-md-12">
          <input id="filebutton" name="product_img" class="form-control view_photo" type="file">
        </div>
      </div>

    </div>



    <div class="col-md-12">
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary btn-sm product_create_btn">Submit</button>
      </div>

    </div>

    </form>
 
</div>