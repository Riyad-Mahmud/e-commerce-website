<div class="box-content">
    
    <a href="<?php echo base_url('add_category') ;?>" class="btn btn-primary">Add Category</a>
    <br>
    <br>
    <?php if($this->session->flashdata('message')): ?>
    <?php echo $this->session->flashdata('message'); ?>
    <?php endif;?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                
                <th>Category Type</th>
                <th>Category Category</th>
                <th>Action</th>
            </tr>
                
        </thead>
        
        <tbody>
            
               <?php foreach ($result as $value) {?>
                <tr>
                    
                    
                <td><?php echo $value->cat_type;?></td>
                <td><?php echo $value->cat_name;?></td>
                <td>
                    <a href="<?php echo base_url('edit/?id='.$value->id);?>"><i class="halflings-icon edit"></i></a>
                    <a href=""><i class="halflings-icon trash"></i></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
    <?php echo $this->pagination->create_links();?>
					</div>





