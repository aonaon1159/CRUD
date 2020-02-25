<div class="row">
    <div class="col-md-12">
            <?php echo form_open('car_brand/add'); ?>
             <div class="col-md-6">
               <label for="brand_name" class="control-label"> <span class="text-danger">*</span>Brand name</label>
                <div class="form-group">
                  <input type="text" name="brand_name" value="<?php echo $this->input->post('brand_name'); ?>" class="form-control " id="brand_name" />
                   <span class="text-danger"><?php echo form_error('brand_name');?></span>
               </div>
             </div>
             <div class="col-md-6">
               <label for=" " class="control-label"> </label>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">  
                   <i class="fa fa-check"></i> Save 
                        </button> 
               </div>
             </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
