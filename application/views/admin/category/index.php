
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
                <h3 class="card-title">Category</h3>
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
                                <th>Name </th>
                                <th>Content Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               if(!empty($category)){
                                foreach ($category as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $key+1; ?></td>
                                <td><?= $value->category ?></td>
                                <td><?= $value->contentType; ?></td>
                                <td>
                                    <a href="<?= base_url('content/edit/').$value->id; ?>" class="btn btn-primary">Edit</a> 
                                    <a href="<?= base_url('item?id=').$value->id; ?>" class="btn btn-primary">Items List</a>

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