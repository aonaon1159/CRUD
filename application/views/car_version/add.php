<div class="row">
    <div class="col-md-12">
            <?php echo form_open('car_version/add'); ?>
            <div class="col-md-6">
                <label for="brand_id" class="control-label"> <span class="text-danger">*</span>  Brand id</label>
                 <div class="form-group">
                  <select name="brand_id" class="form-control"> 
                    <option value="">select brand_id</option>
                     <?php
                          foreach($all_car_brand as   $car_brand)
                          {
                              $selected = ($car_brand['brand_id'] == $this->input->post('brand_id')) ? ' selected="selected"' : ""; 
                                   echo '<option value="'.$car_brand['brand_id'].'" '.$selected.'>'.$car_brand['brand_name'].'</option>'; 
                          } 
                          ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('brand_id');?></span>
                      </div>
              </div>
             <div class="col-md-6">
               <label for="ver_name" class="control-label"> <span class="text-danger">*</span>Ver name</label>
                <div class="form-group">
                  <input type="text" name="ver_name" value="<?php echo $this->input->post('ver_name'); ?>" class="form-control " id="ver_name" />
                   <span class="text-danger"><?php echo form_error('ver_name');?></span>
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
