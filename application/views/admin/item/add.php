<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        <form action="<?= base_url('item/save')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Add Image</h3>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Image:</label>
                            <input class="form-control" type="text" name="image" value="" required />
                        </div>
                        <div class="col-lg-6">
                            <label for="">Vido:</label>
                            <input class="form-control" type="text" name="video" value="" required />
                            <input type="hidden" name="categoryId" value="<?= $_GET['id'] ?>">
                        </div>
                    </div>
                    <div class="text-xs-right " style="margin-top:10px;">
                       
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div><br>
                    </div>
                   
                </div>
                
                <!-- /.box-body -->
            </div>
        </form>
      <!-- /.box -->
    </section>
</div>
<!-- ck editor -->
<script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script>
CKEDITOR.replace('description');
</script>
<!-- ck editor -->