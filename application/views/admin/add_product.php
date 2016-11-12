<div class="box-content">
    
    <?php if($this->session->flashdata('message')): ?>
    <?php echo $this->session->flashdata('message'); ?>
    <?php endif;?>
    <form class="form-horizontal" action="<?php echo base_url('add_product_action'); ?>" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Category Type</label>
								<div class="controls">
                                                                    <select class="cat_type" name="cat_type">
                                                                        <option value="">Select Category Type</option>
                                                                        <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                     
                                                                    </select>
								  
									
					  
								</div>
                                                                <?php echo form_error('cat_type','<div class="error">','</div>') ;?>
							  </div>
                                                            
                                                            
                                                            <div class="control-group">
								<label class="control-label" for="prependedInput">Category Name</label>
								<div class="controls">
                                                                    <select class="category_name" name="category_name">
                                                                        
                                                                    </select>
								  
									
								  
								  
								</div>
                                                                <?php echo form_error('cat_name','<div class="error">','</div>') ;?>
							  </div>
                                                            
                                                             <div class="control-group">
								<label class="control-label" for="prependedInput">Special Package</label>
								<div class="controls">
                                                                    <select  name="special_package">
                                                                        <option value="">Select package</option>
                                                                        <option value="1">General package</option>
                                                                        <option value="2">Special package</option>
                                                                        <option value="3">Select offer</option>
                                                                        <option value="4">Collection</option>
                                                                        
                                                                    </select>
								  
									
								  
								  
								</div>
                                                                <?php echo form_error('special_package','<div class="error">','</div>') ;?>
							  </div>
							  
                                                            <div class="control-group">
								<label class="control-label" for="prependedInput">Product Name</label>
								<div class="controls">
                                                                    
                                                                    <input type="text" name="product_name">
                                                                       
									
								  
								  
								</div>
                                                                <?php echo form_error('product_name','<div class="error">','</div>') ;?>
							  </div>
                                                            
                                                            <div class="control-group">
								<label class="control-label" for="prependedInput">Product Description</label>
								<div class="controls">
                                                                    
                                                                    <input type="text" name="product_description">
                                                                       
									
								  
								  
								</div>
                                                                <?php echo form_error('product_description','<div class="error">','</div>') ;?>
							  </div>
                                                            <div class="control-group">
								<label class="control-label" for="prependedInput">Product Price</label>
								<div class="controls">
                                                                    
                                                                    <input type="text" name="product_price">
                                                                       
									
								  
								  
								</div>
                                                                <?php echo form_error('product_price','<div class="error">','</div>') ;?>
							  </div>
                                                            <div class="control-group">
								<label class="control-label" for="prependedInput">Product Image</label>
								<div class="controls">
                                                                    
                                                                    <input type="file" name="userfile">
                                                                       
									
								  
								  
								</div>
                                                                
							  </div>
							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>



