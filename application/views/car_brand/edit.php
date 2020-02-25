<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Car Brand Edit</h3>
            <?php echo form_open('car_brand/edit/'.$car_brand['brand_id']); ?>
            <div class="box-body">
              <div class="row clearfix">
           <div class="col-md-6">
               <label for="brand_name" class="control-label">  <span class="text-danger">*</span>Brand name</label>
                <div class="form-group">
                  <input type="text" name="brand_name" value="<?php echo ($this->input->post('brand_name') ? $this->input->post('brand_name') : $car_brand['brand_name']); ?>" class="form-control" id="brand_name" />
                    <span class="text-danger"><?php echo form_error('brand_name');?></span>
               </div>
             </div> 
                     </div>
      </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Save
              </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
