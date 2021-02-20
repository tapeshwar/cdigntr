<div class="row">

    <div class="col-md-12" style="margin-bottom: 10px;">
        <a href="<?= base_url('website/pages') ?>" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-building"></i> <span> View Page List</span></a>
    </div>


    <form id="create_new_page_form" action="<?=base_url('website/create_page')?>" method="post" enctype="multipart/form-data">    
        
              <div class="col-lg-12">
               
                 <div class="form-group col-md-8">
                    <label for="title">Title</label>
                    <input class="form-control" id="title" name="title" type="text" placeholder="Title" data-msg-required="Title is required" required>
                  </div>
                  
                  <div class="form-group col-md-8">
                    <label for="heading">Heading</label>
                    <input class="form-control" id="heading" name="heading" type="text" placeholder="Heading" data-msg-required="Heading is required" required>
                  </div>
                
                  
                  <div class="form-group col-md-12">
                    <label for="password">Content</label>
                    <textarea class="form-control" name="content" id="ck_editor1" ></textarea>
                  </div>
                    
                  
                  <div class="form-group col-md-4">
                  <label for="enable">Enable</label>
                  <select class="form-control" name="enable" id="enable" style="width:30%">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
				</div>

                <div class="form-group col-sm-12">
                    <button class="btn btn-success btn-flat create_new_page_btn" type="submit" name="create_page">Create Page</button>
                </div>
              </div>
              
         </form>



</div>