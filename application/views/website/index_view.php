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
              <ol id="sortable1_<?=$v['id']?>" class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded" style="margin:10px; padding-left:0">
              <input type="hidden" value="sortable1_<?=$v['id']?>" class="shortinput" >
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
							<input type="radio" name="is_enable" id="is_enable_<?=$v3['id']?>" value="Y"<?php if($v3['enable']=='Y'){?> checked <?php } ?>>Yes
							<input type="radio" name="is_enable" id="is_enable_<?=$v3['id']?>" value="N"<?php if($v3['enable']=='N'){?> checked <?php } ?>>No
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
									<input type="radio" name="is_enable" id="is_enable_<?=$v4['id']?>" value="Y"<?php if($v4['enable']=='Y'){?> checked <?php } ?>>Yes
									<input type="radio" name="is_enable" id="is_enable_<?=$v4['id']?>" value="N"<?php if($v4['enable']=='N'){?> checked <?php } ?>>No
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
												<input type="radio" name="is_enable" id="is_enable_<?=$v5['id']?>" value="Y"<?php if($v5['enable']=='Y'){?> checked <?php } ?>>Yes
												<input type="radio" name="is_enable" id="is_enable_<?=$v5['id']?>" value="N"<?php if($v5['enable']=='N'){?> checked <?php } ?>>No
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
                          		
                      
                      </script>           
                                 
                     <!-- End This script is important to toggle show/hide menu items --> 
   
                    
                    
                  </div>
                  
              </div>
              
              
            <div class="col-md-6">
              
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Tab 1</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Tab 2</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
              
              
              	 
              </div>
    		



</div>

