<?php
if (isset($data)) {
    ?>
    <div class="box-content">

        <?php if ($this->session->flashdata('message')): ?>
            <?php echo $this->session->flashdata('message'); ?>
        <?php endif; ?>
        <h3>Update Category</h3>
        <form class="form-horizontal" action="<?php echo base_url('update_category/?id=' . $data[0]->id); ?>" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="prependedInput">Category Type</label>
                    <div class="controls">
                        <select class="" name="cat_type">
                            <option value="">Select Category Type</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>

                        </select>




                    </div>
                    <?php echo form_error('cat_type', '<div class="error">', '</div>'); ?>
                </div>


                <div class="control-group">
                    <label class="control-label" for="prependedInput">Category Name</label>
                    <div class="controls">

                        <input type="text" name="cat_name"  value="<?php echo $data[0]->cat_name; ?>">




                    </div>
                    <?php echo form_error('cat_name1', '<div class="error">', '</div>'); ?>
                </div>



                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>


    <?php
}
else {
    ?>
    <div class="box-content">

        <?php if ($this->session->flashdata('message')): ?>
            <?php echo $this->session->flashdata('message'); ?>
        <?php endif; ?>
        <form class="form-horizontal" action="<?php echo base_url('add_category_action'); ?>" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="prependedInput">Category Type</label>
                    <div class="controls">
                        <select class="" name="cat_type">
                            <option value="">Select Category Type</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>

                        </select>




                    </div>
                    <?php echo form_error('cat_type', '<div class="error">', '</div>'); ?>
                </div>


                <div class="control-group">
                    <label class="control-label" for="prependedInput">Category Name</label>
                    <div class="controls">
                        <input type="text"name="cat_name" class="">




                    </div>
                    <?php echo form_error('cat_name', '<div class="error">', '</div>'); ?>
                </div>



                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>


    <?php
}
?>



