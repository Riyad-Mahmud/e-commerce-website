<div class="box-content">
    
    <a href="<?php echo base_url('product_list/add_product') ;?>" class="btn btn-primary">Add Product</a>
    <br>
    <br>
    <?php if($this->session->flashdata('message')): ?>
    <?php echo $this->session->flashdata('message'); ?>
    <?php endif;?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Product Category</th>
                <th>Product Image</th>
                <th>Action</th>
            </tr>
                
        </thead>
        
        <tbody>
            
                <?php foreach ($results as $value) {?>
            <tr>

 
                <td><?php echo $value->product_name;?></td>
                <td><?php echo $value->cat_type==1?'Men':'Women';?></td>
                <td><?php echo $value->cat_name;?></td>
                <td><img src="<?php echo base_url('products').'/'.$value->product_image;?>"></td>
                <td>
                    <a href=""><i class="halflings-icon edit"></i></a>
                    <a href=""><i class="halflings-icon trash"></i></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
					</div>



