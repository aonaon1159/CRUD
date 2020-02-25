 <!-- DataTables -->
 <link rel="stylesheet" href="<?php echo base_url('resources/plugins/datatables.net-bs');  ?>/css/dataTables.bootstrap.min.css">
<!-- DataTables -->
<script src="<?php echo base_url('resources/plugins/datatables.net');  ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('resources/plugins/datatables.net-bs');  ?>/js/dataTables.bootstrap.min.js"></script>
 <script>
                  $(function () {
                    $('#example1').DataTable()
                    $('#example2').DataTable({
                      'paging'      : true,
                      'lengthChange': false,
                      'searching'   : false,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  </script>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Car_detail  Listing</h3>
              <div class="box-tools">
                <a href="<?php echo site_url('car_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
   <?php echo $this->session->flashdata('alert_msg');?>
            <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-striped">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Type id</th>
                    <th>Brand id</th>
                    <th>Ver id</th>
                    <th>Car name</th>
                    <th>Car image</th>
                    <th>Car detail</th>
                    <th>Car price</th>
                    <th>Created by</th>
                    <th>Update at</th>
                    <th>Created date</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=$noof_page+1; 
           if(isset($car_detail) && $car_detail!=null)
           {
           foreach($car_detail as $c){ ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $c['type_name']; ?></td>
                    <td><?php echo $c['brand_name']; ?></td>
                    <td><?php echo $c['ver_name']; ?></td>
                    <td><?php echo $c['car_name']; ?></td>
                    <td><img width="100" height="100" src="<?php echo base_url('resource/car_image/').$c['car_image']; ?>"></td>                    <td><?php echo $c['car_detail']; ?></td>
                    <td><?php echo number_format($c['car_price']); ?></td>
                    <td><?php echo $c['created_by']; ?></td>
                    <td><?php echo $c['update_at']; ?></td>
                    <td><?php echo $c['created_date']; ?></td>
                     <td><a href="<?php echo site_url('car_detail/edit/'.$c['car_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                         <a
                            onclick="return confirm('Are you sure You want to delete?')"
                             href="<?php echo site_url('car_detail/remove/'.$c['car_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                     </td>
                    </tr>
                     <?php }
                    
                           }else{
                                  echo 'No data found';
                             }

          ?>
                    </tbody>
                </table>
                <div class="pull-right">
                      <?php echo $this->pagination->create_links(); ?> 
                </div>
            </div>

        </div>
    </div>

</div>

