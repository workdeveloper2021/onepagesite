<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        
        <form action="<?= base_url('adminhome/update')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Slider Image</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Image :</label>
                            <img src="<?= base_url().$banner['image'];?>" alt="image"/>
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control" type="file" name="image" value="" required/>
                        </div>
                        <div class=" text-xs-right " style="margin-top:10px;">
                            <input type="hidden" name="id" value="<?= $banner['id']?>">
                            <button type="submit" class="btn btn-info" style="margin-top:10px">Update</button>
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