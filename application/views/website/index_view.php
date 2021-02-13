
<div class="row" style="margin-left:0"> 


              <div class="col-lg-6">
              
                  <div id="accordion">
                  
                   <?php 
					  //$menu2 = setLink2('');
					  if($menu2!=''){
					  foreach($menu2 as $k=>$v){
					?>
                    <div class="card">
                    <div class="card-header" id="heading-<?=$v['id']?>">
                        <h5 class="mb-0">
                          <a class="collapsed" role="button" data-toggle="collapse" href="#<?=$v['name']?><?=$v['id']?>" aria-expanded="false" aria-controls="<?=$v['name']?><?=$v['id']?>">
                            <?=$v['name']?>
                          </a>
                        </h5>
                      </div>
                      <div id="<?=$v['name']?><?=$v['id']?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?=$v['id']?>">
                        <div class="card-body">
                          
                          <?php if(is_array($v['set_sub_menu'])){?>
              <ol id="sortable1_<?=$v['id']?>" class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded" style="margin-left:0">
	 		<?php 
			  foreach($v['set_sub_menu'] as $k1=>$v1){?>
		
	        <li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_<?=$v1['id']?>">
            <div class="menuDiv">
            <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
            <span></span>
            </span>
            <span title="Click to show/hide item editor" data-id="<?=$v1['id']?>" class="expandEditor ui-icon ui-icon-pencil">
            <span></span>
            </span>
            <span>
            <span class="itemTitle ui-icon-triangle-1-n ui-icon-triangle-1-s"><?=$v1['name']?></span>
            <span title="Click to delete item." data-id="<?=$v1['id']?>" onClick="javascript:delete_menu(<?=$v1['id']?>)" class="deleteMenu ui-icon ui-icon-closethick">
            <span></span>
            </span>
            </span>
		    <div id="menuEdit<?=$v1['id']?>" class="menuEdit" style="display: none">
		    <form method="post">
			<span class="Span2"><strong>Title:</strong></span>
			<span class="Span10">
				<input type="text" name="title" placeholder="Menu Title" id="title_<?=$v1['id']?>" value="<?=$v1['title']?>">
			</span>
			<br clear="all">
			<span class="Span2"><strong>Name:</strong></span>
			<span class="Span10">
				<input type="text" name="name" placeholder="Menu Name" id="menu_<?=$v1['id']?>" value="<?=$v1['name']?>">
			</span>
			<br clear="all">
			<span class="Span2"><strong>Custom Link:</strong></span>
			<span class="Span8">
				<input type="text" name="custom_link" id="custom_link1_<?=$v1['id']?>" value="<?=$v1['custom_link']?>" class="span7 custom_link" placeholder="Custom Link" />
				<a href="javascript:opendialog1(<?=$v1['id']?>)">
					<i class="icon icon-search" title="Select" style="font-size: 20px"></i>
				</a>
			</span>
			
			<br clear="all">
			<span class="Span2"><strong>Enable:</strong></span>
			<span class="Span10">
				<input type="radio" name="is_enable" id="is_enable_<?=$v1['id']?>" value="Y"<?php if($v1['enable']=='Y'){?> checked <?php } ?>>Yes
				<input type="radio" name="is_enable" id="is_enable_<?=$v1['id']?>" value="N"<?php if($v1['enable']=='N'){?> checked <?php } ?>>No
			</span>
			<br clear="all">
		    <input type="button" class="btn btn-primary btn-mini" value="Update" onclick="edit_menu_name(<?=$v1['id']?>)">
		    </form>  
	        </div>
	        </div>
	   
	   	    <?php if(is_array($v1['sub_menu'])){ ?>
		   	<ol>
		   	<?php foreach($v1['sub_menu'] as $k2=>$v2){?>
			<li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_<?=$v2['id']?>">
			   <div class="menuDiv">
			   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
			   <span></span>
			   </span>
			   <span title="Click to show/hide item editor" data-id="<?=$v2['id']?>" class="expandEditor ui-icon ui-icon-pencil ui-icon-triangle-1-n ui-icon-triangle-1-s">
			   <span></span>
			   </span>
			   <span>
			   <span data-id="4" class="itemTitle ui-icon-triangle-1-n ui-icon-triangle-1-s"><?=$v2['name']?></span>
			   <span title="Click to delete item." data-id="<?=$v2['id']?>" onClick="javascript:delete_menu(<?=$v2['id']?>)" class="deleteMenu ui-icon ui-icon-closethick">
			   <span></span>
			   </span>
			   </span>
			   <div id="menuEdit<?=$v2['id']?>" class="menuEdit" style="display: none">
			   <form method="post">
					<span class="Span2"><strong>Title:</strong></span>
					<span class="Span10">
						<input type="text" name="title" placeholder="Menu Title" id="title_<?=$v2['id']?>" value="<?=$v2['title']?>">
					</span>
					<br clear="all">
					<span class="Span2"><strong>Name:</strong></span>
					<span class="Span10">
						<input type="text" name="name" placeholder="Menu Name" id="menu_<?=$v2['id']?>" value="<?=$v2['name']?>">
					</span>
					<br clear="all">
					<span class="Span2"><strong>Custom Link:</strong></span>
					<span class="Span8">
						<input type="text" name="custom_link" id="custom_link1_<?=$v2['id']?>" value="<?=$v2['custom_link']?>" class="span7 custom_link" placeholder="Custom Link" />
						<a href="javascript:opendialog1(<?=$v2['id']?>)">
							<i class="icon icon-search" title="Select" style="font-size: 20px"></i>
						</a>
					</span>
					
					<br clear="all">
					<span class="Span2"><strong>Enable:</strong></span>
					<span class="Span10">
						<input type="radio" name="is_enable" id="is_enable_<?=$v2['id']?>" value="Y"<?php if($v2['enable']=="Y"){?> checked <?php } ?>>Yes
						<input type="radio" name="is_enable" id="is_enable_<?=$v2['id']?>" value="N"<?php if($v2['enable']=="N"){?> checked <?php } ?>>No
					</span>
					<br clear="all">
				<input type="button" class="btn btn-primary btn-mini" value="Update" onclick="edit_menu_name(<?=$v2['id']?>)">
				</form>  
			   </div>
			   </div>
			    <?php if(is_array($v2['sub_menu'])){ ?>
			   		<ol>
			   		<?php foreach($v2['sub_menu'] as $k3=>$v3){?>
				   	<li class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_<?=$v3['id']?>">
				   	   <div class="menuDiv">
					   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
					   <span></span>
					   </span>
					   <span title="Click to show/hide item editor" data-id="<?=$v3['id']?>" class="expandEditor ui-icon ui-icon-pencil">
					   <span></span>
					   </span>
					   <span>
					   <span data-id="<?=$v3['id']?>" class="itemTitle"><?=$v3['name']?></span>
					   <span title="Click to delete item." data-id="<?=$v3['id']?>" onClick="javascript:delete_menu(<?=$v3['id']?>)" class="deleteMenu ui-icon ui-icon-closethick">
					   <span></span>
					   </span>
					   </span>
					   <div id="menuEdit<?=$v3['id']?>" class="menuEdit" style="display: none">
					   <form method="post">
						<span class="Span2"><strong>Title:</strong></span>
						<span class="Span10">
							<input type="text" name="title" placeholder="Menu Title" id="title_<?=$v3['id']?>" value="<?=$v3['title']?>">
						</span>
						<br clear="all">
						<span class="Span2"><strong>Name:</strong></span>
						<span class="Span10">
							<input type="text" name="name" placeholder="Menu Name" id="menu_<?=$v3['id']?>" value="<?=$v3['name']?>">
						</span>
						<br clear="all">
						<span class="Span2"><strong>Custom Link:</strong></span>
						<span class="Span8">
							<input type="text" name="custom_link" id="custom_link1_<?=$v3['id']?>" value="<?=$v3['custom_link']?>" class="span7 custom_link" placeholder="Custom Link" />
					       <a href="javascript:opendialog1(<?=$v3['id']?>)">
						     <i class="icon icon-search" title="Select" style="font-size: 20px"></i>
							</a>
						</span>
						
						<br clear="all">
						<span class="Span2"><strong>Enable:</strong></span>
						<span class="Span10">
							<input type="radio" name="is_enable" id="is_enable_<?=$v3['id']?>" value="Y"<?php if($v3['enable']==Y){?> checked <?php } ?>>Yes
							<input type="radio" name="is_enable" id="is_enable_<?=$v3['id']?>" value="N"<?php if($v3['enable']==N){?> checked <?php } ?>>No
						</span>
						<br clear="all">
						<input type="button" class="btn btn-primary btn-mini" value="Update" onclick="edit_menu_name(<?=$v3['id']?>)">
						</form>  
					   </div>
				   	   </div>
				   	 	<?php if(is_array($v3['sub_menu'])){ ?>
						   <ol>
						   <?php foreach($v3['sub_menu'] as $k4=>$v4){?>
						   <li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_<?=$v4['id']?>">
							   <div class="menuDiv">
							   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
							   <span></span>
							   </span>
							   <span title="Click to show/hide item editor" data-id="<?=$v4['id']?>" class="expandEditor ui-icon ui-icon-pencil">
							   <span></span>
							   </span>

							   <span>
							   <span data-id="<?=$v4['id']?>" class="itemTitle"><?=$v4['name']?></span>
							   <span title="Click to delete item." data-id="<?=$v4['id']?>" onClick="javascript:delete_menu(<?=$v4['id']?>)" class="deleteMenu ui-icon ui-icon-closethick">
							   <span></span>
							   </span>
							   </span>
							   <div id="menuEdit<?=$v4['id']?>" class="menuEdit" style="display: none">
								<form method="post">
								<span class="Span2"><strong>Title:</strong></span>
								<span class="Span10">
								<input type="text" name="title" placeholder="Menu Title" id="title_<?=$v4['id']?>" value="<?=$v4['title']?>">
								</span>
								<br clear="all">
								<span class="Span2"><strong>Name:</strong></span>
								<span class="Span10">
									<input type="text" name="name" placeholder="Menu Name" id="menu_<?=$v4['id']?>" value="<?=$v4['name']?>">
								</span>
								<br clear="all">
								<span class="Span2"><strong>Custom Link:</strong></span>
								<span class="Span8">
									<input type="text" name="custom_link" id="custom_link1_<?=$v4['id']?>" value="<?=$v4['custom_link']?>" class="span7 custom_link" placeholder="Custom Link" />
								<a href="javascript:opendialog4(<?=$v4['id']?>)">
									<i class="icon icon-search" title="Select" style="font-size: 20px"></i>
								</a>
								</span>
								
								<br clear="all">
								<span class="Span2"><strong>Enable:</strong></span>
								<span class="Span10">
									<input type="radio" name="is_enable" id="is_enable_<?=$v4['id']?>" value="Y"<?php if($v4['enable']==Y){?> checked <?php } ?>>Yes
									<input type="radio" name="is_enable" id="is_enable_<?=$v4['id']?>" value="N"<?php if($v4['enable']==N){?> checked <?php } ?>>No
								</span>
								<br clear="all">
								<input type="button" class="btn btn-primary btn-mini" value="Update" onclick="edit_menu_name(<?=$v4['id']?>)">
								</form> 
							    </div>
								</div>
								<?php if(is_array($v4['sub_menu'])){ ?>
									<ol>
									<?php foreach($v4['sub_menu'] as $k5=>$v5){?>
									<li style="display: list-item;" class="mjs-nestedSortable-leaf" id="menuItem_<?=$v5['id']?>">
									   <div class="menuDiv">
									   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
									   <span></span>
									   </span>
									   <span title="Click to show/hide item editor" data-id="<?=$v5['id']?>" class="expandEditor ui-icon ui-icon-pencil">
									   <span></span>
									   </span>
									   <span>
									   <span data-id="<?=$v5['id']?>" class="itemTitle"><?=$v5['name']?></span>
									   <span title="Click to delete item." data-id="<?=$v5['id']?>" onClick="javascript:delete_menu(<?=$v5['id']?>)" class="deleteMenu ui-icon ui-icon-closethick">
									   <span></span>
									   </span>
									   </span>
										<div id="menuEdit<?=$v5['id']?>" class="menuEdit" style="display: none">
										<form method="post">
											<span class="Span2"><strong>Title:</strong></span>
											<span class="Span10">
												<input type="text" name="title" placeholder="Menu Title" id="title_<?=$v5['id']?>" value="<?=$v5['title']?>">
											</span>
											<br clear="all">
											<span class="Span2"><strong>Name:</strong></span>
											<span class="Span10">
												<input type="text" name="name" placeholder="Menu Name" id="menu_<?=$v5['id']?>" value="<?=$v5['name']?>">
											</span>
											<br clear="all">
											<span class="Span2"><strong>Custom Link:</strong></span>
											<span class="Span8">
												<input type="text" name="custom_link" id="custom_link1_<?=$v5['id']?>" value="<?=$v5['custom_link']?>" class="span7 custom_link" placeholder="Custom Link" />
												<a href="javascript:opendialog1(<?=$v5['id']?>)">
													<i class="icon icon-search" title="Select" style="font-size: 20px"></i>
												</a>
											</span>
											<span class="Span2" style="cursor:pointer"><i class="icon icon-search"></i></span>
											<br clear="all">
											<span class="Span2"><strong>Enable:</strong></span>
											<span class="Span10">
												<input type="radio" name="is_enable" id="is_enable_<?=$v5['id']?>" value="Y"<?php if($v5['enable']==Y){?> checked <?php } ?>>Yes
												<input type="radio" name="is_enable" id="is_enable_<?=$v5['id']?>" value="N"<?php if($v5['enable']==N){?> checked <?php } ?>>No
											</span>
											<br clear="all">
											<input type="button" class="btn btn-primary btn-mini" value="Update" onclick="edit_menu_name(<?=$v5['id']?>)">
										</form>
										</div>
										</div>
									</li>
									<?php } ?>
									</ol>
  								 <?php } ?>
   								</li>
   								<?php } ?>
	   							</ol>
	   							<?php } ?>
	   							
		   					</li>
		   					<?php } ?>
			   				</ol>
			   				<?php } ?>
			   				
			   			</li>
			   			<?php } ?>
			   			</ol>
			   			<?php } ?>
			   			
		   			</li>
		   		<?php } ?>
		   		<br/>
              <div id="result_<?=$v['id']?>"></div>
              <button type="submit" name="toArray" id="toArray1_<?=$v['id']?>" class="btn btn-success">Update Order</button>	
              <button type="button" name="delete_menu_set" id="delete_menu_set" class="btn btn-danger" onClick="delete_set(<?=$v['id']?>)">Delete</button>	
                
                <script>
                            
                $().ready(function(){
                var ns = $("#sortable1_<?=$v['id']?>").nestedSortable({
                    forcePlaceholderSize: true,
                    handle: 'div',
                    helper:	'clone',
                    items: 'li',
                    opacity: .6,
                    placeholder: 'placeholder',
                    revert: 250,
                    tabSize: 25,
                    tolerance: 'pointer',
                    toleranceElement: '> div',
                    maxLevels: 5,
                    isTree: true,
                    expandOnHover: 700,
                    startCollapsed: false
                });
                    
                $('#toArray1_<?=$v['id']?>').click(function(e){		
                $('#result').html('');
                list = $('#sortable1_<?=$v['id']?>').nestedSortable('toArray', {startDepthCount: 0});
                //var list = JSON.stringify(list);
                $.ajax({
                    type: "POST",
                    url : "ajax.php",
                    /*data: {'data':encodeURI(list)}*/
                    data: {'data':list}
                }).done(function(data){
                    $('#result_<?=$v['id']?>').html(data);

                    });
                });
                    

            });			
 
            </script>
                
                
                
                
	   			</ol>
             
             	<?php } else{ ?>
				  <p>!! No menus. Add menu on this menu set</p>
             	<?php } ?>
                          
                        </div>
                      </div>
                    
                    </div>
                    
                    <?php } }else{?>
                    	<div class="card">
                    	<div class="card-header" id="heading-2">
                        <h5 class="mb-0">
                          <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            You have not a menu set. Create and add menus to them.
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                        <div class="card-body">
                          You have no menus! First create a menu set and add menus to that menu set.
                        </div>
                      </div>
                    
                    </div>
                    
                    <?php } ?>
                    
                       <!-- This script is important to toggle show/hide menu items--> 
					  <script>
                          $().ready(function(){
                              
                              $('.expandEditor').attr('title','Click to show/hide item editor');
                              $('.disclose').attr('title','Click to show/hide children');
                              $('.deleteMenu').attr('title', 'Click to delete item.');
                          
                              $('.disclose').on('click', function() {
                                  $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
                                  $(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
                              });
                              
                              $('.expandEditor, .itemTitle').click(function(){
                                  var id = $(this).attr('data-id');
                                  $('#menuEdit'+id).toggle();
                                  $(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
                              });
                              
                          });			
                      
                      </script>           
                                 
                     <!-- End This script is important to toggle show/hide menu items --> 
   
                    
                    
                  </div>
                  
              </div>
              
              
            <div class="col-md-6" style="border:solid thin #E4DEDE">
              
            <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1"> Create Menu Set</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2"> Add Menu</a></li>
            </ul>
           
          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="tab1">
            <form action="controller/menu_controller.php" method="post">
            <div class="form-group">
               <input class="form-control" id="menu_set_name" name="menu_set_name" type="text" required placeholder="Menu set name" style="width:80%">
              </div>
            
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit" name="create_menu_set">Create </button>
            </div>
            </form>
            </div>
            
            <div class="tab-pane fade" id="tab2">
            
            <form action="controller/menu_controller.php" method="post">
              <div class="form-group">
                    
                    <select class="form-control" name="menu_set_id" id="menu_set_id" required style="width:80%">
                      <option value="">Select Menu Set</option>
					  	<?php 
							$menu_set = get_list_with_session('menu_set');
							foreach($menu_set as $k=>$v){ 
						?>
						  <option value="<?=$v['id']?>"><?=$v['name']?></option>
						 <?php } ?>
                      </select>
              </div>
            
             <div class="form-group">      
                    <input class="form-control" id="menu_title" name="menu_title" type="text" placeholder="Menu Title" style="width:80%">
              </div>
               <div class="form-group"> 
                    <input class="form-control" id="menu_heading" name="menu_heading" type="text" required placeholder="Menu Heading" style="width:80%">
              </div>
              
               <div class="form-group"> 
                    
                    <input type="text" name="custom_link" id="custom_link1" class="form-control custom_link" placeholder="Custom Link" style="width:80%" />
						<a href="javascript:opendialog()">
						<i class="icon icon-search" title="Select" style="font-size: 25px"></i>
						</a>
              </div>
              
              <div class="tile-footer">
              <button class="btn btn-primary" type="submit" name="create_menu">Add </button>
            </div>
            
            </form>
            
            </div>
            
            </div>
              
              
              	 
              </div>
    		



</div>

