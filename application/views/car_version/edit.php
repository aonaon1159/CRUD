<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Car Version Edit</h3>
            <?php echo form_open('car_version/edit/'.$car_version['ver_id']); ?>
            <div class="box-body">
              <div class="row clearfix">
<div class="col-md-6">
            <label for="brand_id" class="control-label">  <span class="text-danger">*</span>  Brand id</label>
            <div class="form-group">
              <select name="brand_id" class="form-control">
                <option value="">select brand_id</option>
                <?php  
 
                          foreach($all_car_brand as   $car_brand)
                          { 
                              $selected = ($car_brand['brand_id'] == $car_version['brand_id']) ? ' selected="selected"' : "";
                            
                              echo '<option value="'.$car_brand['brand_id'].'" '.$selected.'>'.$car_brand['brand_name'].'</option>'; 
                          } 
                          ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('brand_id');?></span>
                      </div>
                    </div>
           <div class="col-md-6">
               <label for="ver_name" class="control-label">  <span class="text-danger">*</span>Ver name</label>
                <div class="form-group">
                  <input type="text" name="ver_name" value="<?php echo ($this->input->post('ver_name') ? $this->input->post('ver_name') : $car_version['ver_name']); ?>" class="form-control" id="ver_name" />
                    <span class="text-danger"><?php echo form_error('ver_name');?></span>
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
