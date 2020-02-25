<div class="row">
    <div class="col-md-12">
            <?php echo form_open_multipart('car_detail/add'); ?>
            <div class="col-md-6">
                <label for="type_id" class="control-label"> <span class="text-danger">*</span>  Type id</label>
                 <div class="form-group">
                  <select name="type_id" class="form-control"> 
                    <option value="">select type_id</option>
                     <?php
                          foreach($all_car_type as   $car_type)
                          {
                              $selected = ($car_type['type_id'] == $this->input->post('type_id')) ? ' selected="selected"' : ""; 
                                   echo '<option value="'.$car_type['type_id'].'" '.$selected.'>'.$car_type['type_name'].'</option>'; 
                          } 
                          ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('type_id');?></span>
                      </div>
              </div>
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
                <label for="ver_id" class="control-label"> <span class="text-danger">*</span>  Ver id</label>
                 <div class="form-group">
                  <select name="ver_id" class="form-control"> 
                    <option value="">select ver_id</option>
                     <?php
                          foreach($all_car_version as   $car_version)
                          {
                              $selected = ($car_version['ver_id'] == $this->input->post('ver_id')) ? ' selected="selected"' : ""; 
                                   echo '<option value="'.$car_version['ver_id'].'" '.$selected.'>'.$car_version['ver_name'].'</option>'; 
                          } 
                          ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('ver_id');?></span>
                      </div>
              </div>
             <div class="col-md-6">
               <label for="car_name" class="control-label"> <span class="text-danger">*</span>Car name</label>
                <div class="form-group">
                  <input type="text" name="car_name" value="<?php echo $this->input->post('car_name'); ?>" class="form-control " id="car_name" />
                   <span class="text-danger"><?php echo form_error('car_name');?></span>
               </div>
             </div>
             <div class="col-md-6">
               <label for="car_image" class="control-label"> <span class="text-danger">*</span>Car image</label>
                <div class="form-group">
                  <input type="file" name="car_image" value="<?php echo $this->input->post('car_image'); ?>" class="form-control " id="car_image" />
                   <span class="text-danger"><?php echo form_error('car_image');?></span>
               </div>
             </div>
            <div class="col-md-6">
                <label for="car_detail" class="control-label"> <span class="text-danger">*</span>Car detail</label>
                <div class="form-group">
                 <textarea name="car_detail" class="form-control  " id="car_detail"><?php echo $this->input->post('car_detail'); ?></textarea>
                  <span class="text-danger"><?php echo form_error('car_detail');?></span>
                </div>
              </div>
             <div class="col-md-6">
               <label for="car_price" class="control-label"> <span class="text-danger">*</span>Car price</label>
                <div class="form-group">
                  <input type="text" name="car_price" value="<?php echo $this->input->post('car_price'); ?>" class="form-control " id="car_price" />
                   <span class="text-danger"><?php echo form_error('car_price');?></span>
               </div>
             </div>
             <div class="col-md-6">
               <label for="created_by" class="control-label"> <span class="text-danger">*</span>Created by</label>
                <div class="form-group">
                  <input type="text" name="created_by" value="<?php echo $this->input->post('created_by'); ?>" class="form-control " id="created_by" />
                   <span class="text-danger"><?php echo form_error('created_by');?></span>
               </div>
             </div>
             <div class="col-md-6">
               <label for="update_at" class="control-label"> <span class="text-danger">*</span>Update at</label>
                <div class="form-group">
                  <input type="text" name="update_at" value="<?php echo $this->input->post('update_at'); ?>" class="has-datetimepicker form-control" data-date-format='YYYY-MM-DD HH:MM:SS' id="update_at" />
                   <span class="text-danger"><?php echo form_error('update_at');?></span>
               </div>
             </div>
             <div class="col-md-6">
               <label for="created_date" class="control-label"> <span class="text-danger">*</span>Created date</label>
                <div class="form-group">
                  <input type="text" name="created_date" value="<?php echo $this->input->post('created_date'); ?>" class="has-datetimepicker form-control" data-date-format='YYYY-MM-DD HH:MM:SS' id="created_date" />
                   <span class="text-danger"><?php echo form_error('created_date');?></span>
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
