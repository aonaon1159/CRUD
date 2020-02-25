<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Car Type Edit</h3>
            <?php echo form_open('car_type/edit/'.$car_type['type_id']); ?>
            <div class="box-body">
              <div class="row clearfix">
           <div class="col-md-6">
               <label for="type_name" class="control-label">  <span class="text-danger">*</span>Type name</label>
                <div class="form-group">
                  <input type="text" name="type_name" value="<?php echo ($this->input->post('type_name') ? $this->input->post('type_name') : $car_type['type_name']); ?>" class="form-control" id="type_name" />
                    <span class="text-danger"><?php echo form_error('type_name');?></span>
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
