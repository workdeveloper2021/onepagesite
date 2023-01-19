<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Home page Banner</h3><a href="<?= base_url('adminhome/add')?>" class="btn btn-primary" style="float:right;"> Add </a>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <?php 
                if($this->session->flashdata('up_success')){?>
                    <div style="width:400px;height:50px;background:#6c9cb8;border-radius: 5px;font-size: 22px;text-align: center;float: right;position: absolute;right: 0;top: 0;"> <?= $this->session->flashdata('up_success')?></div>
                <?php }
                ?>
                <div class="container-fluid">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>image </th>
                                <!-- <th>Description</th>
                                <th>Add Details</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               if(!empty($banner)){
                                $i=1;
                                foreach ($banner as  $value) {
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>
                                    <div style="width:200px">
                                        <img src="<?= base_url().$value['image']?>" alt="image" style="width:100%">
                                    </div>
                                </td>
                                <td><a href="<?= base_url('adminhome/edit/').$value['id']?>" class="btn btn-primary">Edit</a> 
                                <a href="<?= base_url('adminhome/delete/').$value['id']?>" class="btn btn-danger" onclick="return confirm('Do you want to delete!')">Delete</a> </td>
                            </tr>
                            <?php $i++; }
                         } ?>
                            
                        </tbody>
                    </table>
                </div>
                
                <!-- /.box-body -->
            </div>
        
      <!-- /.box -->
    </section>
</div>