
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
                <!-- <h3 class="card-title">Item</h3> -->
                 <?php 
                if($this->session->flashdata('up_success')){?>
                    <div style="width:400px;height:50px;background:#6c9cb8;border-radius: 5px;font-size: 22px;text-align: center;float: right;position: absolute;right: 0;top: 0;"> <?= $this->session->flashdata('up_success')?></div>
                <?php }
                ?>
                 <h3 class="card-title">Items</h3><a href="<?= base_url('item/add?id=').$_GET['id'];?>" class="btn btn-primary" style="float:right;"> Add </a>
                    <!-- <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div> -->
                </div>
               
                <div class="container-fluid">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Thumbnail </th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               if(!empty($item)){
                                foreach ($item as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $key+1; ?></td>
                                <td><img src="<?= $value->thumbnail ?>" style="width: 50px; height: 50px;"> </td>
                                <td><video width="220" height="140" controls>
                                              <source src="<?= $value->url; ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                            </video> </td>
                                <td>
                                    <a href="<?= base_url('item/edit?id=').$value->id.'&image='.$value->thumbnail.'&video='.$value->url.'&categoryId='.$value->categoryId; ?>" class="btn btn-primary">Edit</a> 
                                    <a href="<?= base_url('item/').'delete?id='.$value->id.'&categoryId='.$value->categoryId; ?>" class="btn btn-danger">delete</a>

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
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<!-- ck editor -->