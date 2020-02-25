<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="<?php echo site_url('car_detail/index'); ?>">
                <div class="card card-stats">                  
                    <div class="card-header" data-background-color="orange">
                        <i class=" fa fa-info-circle"></i>
                    </div>
                    <?php $query = $this->db->query('SELECT * FROM car_detail');?>
                    <div class="card-content">
                        <p class="category">จำนวนรถทั้งหมด</p>
                        <h3 class="title"><?=$query->num_rows();?> คัน</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            ดูข้อมูลรถ
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class=" fa fa-car"></i>
                    </div>
                    <?php $query1 = $this->db->query('SELECT * FROM car_detail WHERE type_id = "1"');?>
                    <div class="card-content">
                        <p class="category">รถเก๋ง</p>
                        <h3 class="title"><?=$query1->num_rows();?> คัน</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="red">
                        <i class=" fa fa-truck"></i>
                    </div>
                    <?php $query2 = $this->db->query('SELECT * FROM car_detail WHERE type_id = "2"');?>
                    <div class="card-content">
                        <p class="category">รถกระบะ</p>
                        <h3 class="title"><?=$query2->num_rows();?> คัน</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="">
                        <i class=" fa fa-subway"></i>
                    </div>
                    <?php $query3 = $this->db->query('SELECT * FROM car_detail WHERE type_id = "4"');?>
                    <div class="card-content">
                        <p class="category">รถตู้</p>
                        <h3 class="title"><?=$query3->num_rows();?> คัน</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class=" fa fa-bus"></i>
                    </div>
                    <?php $query4 = $this->db->query('SELECT * FROM car_detail WHERE type_id = "3"');?>
                    <div class="card-content">
                        <p class="category">รถ MPV/SUV</p>
                        <h3 class="title"><?=$query4->num_rows();?> คัน</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="purple">
                        <i class=" fa fa-train"></i>
                    </div>
                    <?php $query5 = $this->db->query('SELECT * FROM car_detail WHERE type_id = "5"');?>
                    <div class="card-content">
                        <p class="category">รถอื่นๆ</p>
                        <h3 class="title"><?=$query5->num_rows();?> คัน </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>