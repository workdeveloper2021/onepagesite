
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
            <div class="box box-default">
                <div class="box-header with-border">
                
                <h3 class="card-title">Content</h3><?php if( $details['id'] == '3' || $details['id'] == '7' ){ ?><a href="<?= base_url('details/add/').$details['id']?>" style="float:right" class="btn btn-primary">Add</a>
                <?php } ?>
                 <?php 
                if($this->session->flashdata('up_success')){?>
                    <div style="width:400px;height:50px;background:#6c9cb8;border-radius: 5px;font-size: 22px;text-align: center;float: right;position: absolute;right: 0;top: 0;"> <?= $this->session->flashdata('up_success')?></div>
                <?php }
                ?>
                    <!-- <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div> -->
                </div>
               
                <div class="container-fluid">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th>Sno.</th>
                                
                                <?php // if($details['id'] == '2'){ ?>
                                <!-- <th>Title </th> -->
                                <?php //} ?>
                                <?php //if($details['id'] == '2'){ ?>
                                <!-- <th>Description </th> -->
                                <?php// } ?>
                                <?php //if($details['id'] == '2'){ ?>
                                <!-- <th>Price</th> -->
                                <?php //} ?>
                                <?php if($details['id'] == '1' || $details['id'] == '2' || $details['id'] == '3' || $details['id'] == 4 || $details['id'] == 5 || $details['id'] == 6 || $details['id'] == 7 || $details['id'] == 8 || $details['id'] == 9 ){ ?>
                                <th>Image </th>
                                <?php } ?>
                                <?php if($details['id'] == '9'){ ?>
                                <th>Name</th>
                                <?php } ?>
                                <?php if($details['id'] == '0'){ ?>
                                <th>Designation</th>
                                <?php } ?>
                                <?php if($details['id'] == '2' || $details['id'] == 3 || $details['id'] == 5 || $details['id'] == 8 || $details['id'] == 10 || $details['id'] == 11 ){ ?>
                                <th>Sub Heading</th>
                                <?php } ?>
                                <?php if($details['id'] == '2' || $details['id'] == 3 || $details['id'] == 5 || $details['id'] == 8 || $details['id'] == 9 || $details['id'] == 10 || $details['id'] == 11){ ?>
                                <th>Sub Content</th>
                                <?php } ?>
                                <?php if($details['id'] == '1' ){ ?>
                                <th>Button Title</th>
                                <?php } ?>
                                <?php if($details['id'] == '1' ){ ?>
                                <th>Button Url</th>
                                <?php } ?>
                                <?php if( $details['id'] == 0){ ?>
                                <th>Pricing</th>
                                <?php } ?>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               if(!empty($content_data)){
                                foreach ($content_data as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $key+1; ?></td>
                                <?php if($details['id'] == '1'|| $details['id'] == '2' || $details['id'] == '3' || $details['id'] == 4 || $details['id'] == 5 || $details['id'] == 6 || $details['id'] == 7 || $details['id'] == 8 || $details['id'] == 9){ ?>
                                <td><img style="width:200px;" src="<?= base_url().$value['image'] ?>" alt="image"></td>
                                <?php } ?>
                                <!-- <td><?= strip_tags(substr($value['description'], 0,50)); ?>...</td>
                                <td><a href="<?= base_url('content/').$value['url'].$value['id']; ?>" class="btn btn-primary"><?= $value['type'] ?></a></td> -->
                                <?php if($details['id'] == '9'){ ?>
                                <td><?= $value['name']?></td>
                                <?php } ?>
                                <?php if($details['id'] == '0'){ ?>
                                <td><?= $value['designation']?></td>
                                <?php } ?>
                                <?php if($details['id'] == '2'|| $details['id'] == 3 || $details['id'] == 5 || $details['id'] == 8 || $details['id'] == 10 || $details['id'] == 11){ ?>
                                <td><?= $value['sub_heading']?></td>
                                <?php } ?>
                                <?php if($details['id'] == '2' || $details['id'] == 3 || $details['id'] == 5 || $details['id'] == 8 || $details['id'] == 9 || $details['id'] == 10 || $details['id'] == 11){ ?>
                                <td><?= $value['sub_content']?></td>
                                <?php } ?>
                                <?php if($details['id'] == '1' || $details['id'] == 0){ ?>
                                <td><?= $value['button_title']?></td>
                                <?php } ?>
                                <?php if($details['id'] == '1' || $details['id'] == 0){ ?>
                                <td><?= $value['button_url']?></td>
                                <?php } ?>
                                <?php if($details['id'] == 0){ ?>
                                <td><?= $value['pricing']?></td>
                                <?php } ?>
                                
                                <td>
                                    <a href="<?= base_url('details/edit/').$value['id']; ?>" class="btn btn-primary">Edit</a>
                                    <?php if( $details['id'] == '7'){ ?>
                                    <a href="<?= base_url('Details/delete/').$value['id']; ?>" class="btn btn-danger" onclick="alert('Sure you want to delete')">Delete</a>
                                    <?php } ?>  
                                </td>
                            </tr>
                            <?php } } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
      <!-- /.box -->
    </section>
</div>
<!-- ck editor -->
<script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
// $(document).ready(function () {
//     $('#example').DataTable();
// });
</script>
<!-- ck editor -->