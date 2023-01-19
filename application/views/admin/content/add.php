<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        <form action="<?= base_url('details/save')?>" method="post" enctype="multipart/form-data">
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
                    <?php if($details['id']==1 || $details['id'] == 3 || $details['id'] == 4 || $details['id'] == 6 || $details['id'] == 7){ ?>
                        <div class="col-lg-12">
                            <label for="">Image:</label>
                            <input class="form-control" type="file" name="image" value="" REQUIRED/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12">
                            <label for="">Name :</label>
                            <input class="form-control" type="text" name="name" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12">
                            <label for="">Designation :</label>
                            <input class="form-control" type="text" name="designation" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12">
                            <label for="">Facebook url :</label>
                            <input class="form-control" type="url" name="fb_url" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12">
                            <label for="">Twitter url :</label>
                            <input class="form-control" type="url" name="twitter_url" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12"> 
                            <label for="">Github url :</label>
                            <input class="form-control" type="url" name="git_url" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==3){ ?>
                        <div class="col-lg-12">
                            <label for="">Dribble url :</label>
                            <input class="form-control" type="url" name="dribbble_url" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==4){ ?>
                        <div class="col-lg-12">
                            <label for="">Sub Heading</label>
                            <input class="form-control" type="text" name="sub_heading" value=""/>
                        </div>
                    <?php }?>
                    <?php if($details['id']==4){ ?>
                        <div class="col-lg-12">
                            <label for="">Sub Content</label>
                            <input class="form-control" type="text" name="sub_content" value=""/>
                        </div>
                    <?php }?>
                    
                    </div>
                    <div class="text-xs-right " style="margin-top:10px;">
                        <input type="hidden" name="content_id" value="<?= $details['id'] ?>">
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