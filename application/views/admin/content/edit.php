<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        
        <form action="<?= base_url('details/update')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Content</h3>
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
                        <div class="col-lg-12">
                        <?php if($details['id'] == 0){ ?>
                            <label for="">Title:</label>
                            <input class="form-control" type="text" name="title" value="<?php echo $pricing['title']?>">
                        </div>
                        <?php }?>
                        <?php if($details['id'] == 0){ ?>
                        <div class="col-lg-12">
                            <label for="">Main Content :</label>
                            <textarea name="description" id="description"><?php echo $pricing['description']?></textarea>
                            <script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace('main_content');
                            </script>
                            <input type="hidden" name="id" value="<?php echo $pricing['id']?>">
                        </div>
                        <?php }?>
                        <?php if($details['content_id'] == 9){ ?>
                        <div class="col-lg-12">
                            <label for="">Name :</label>
                            <input class="form-control" type="text" name="name" value="<?= $details['name']?>"/>
                        </div>
                        <?php }?>
                        <?php if($details['content_id'] == 1 || $details['content_id'] == 2 || $details['content_id'] == 3 || $details['content_id'] == 4 || $details['content_id'] == 5 || $details['content_id'] == 6 || $details['content_id'] == 7 || $details['content_id'] == 8 || $details['content_id'] == 9){ ?>
                        <div class="col-lg-12">
                            <label for="">Image :</label>
                            <input class="form-control" type="file" name="image" value="" required/>
                        </div>
                        <?php }?>
                    <?php if($details['content_id']==0){ ?>
                        <div class="col-lg-12">
                            <label for="">Designation :</label>
                            <input class="form-control" type="text" name="designation" value="<?= $details['designation']?>"/>
                        </div>
                    <?php }?>
                    <?php if($details['content_id']==2 || $details['content_id'] == 3 || $details['content_id'] == 5 || $details['content_id'] == 8 || $details['content_id'] == 10 || $details['content_id'] == 11){ ?>
                        <div class="col-lg-12">
                            <label for="">Sub Heading</label>
                            <input class="form-control" type="text" name="sub_heading" value="<?= $details['sub_heading']?>"/>
                        </div>
                    <?php }?>
                    <?php if($details['content_id']==2 || $details['content_id'] == 3 || $details['content_id'] == 5 || $details['content_id'] == 8 || $details['content_id'] == 9 || $details['content_id'] == 10 || $details['content_id'] == 11){ ?>
                        <div class="col-lg-12">
                            <label for="">Sub content</label>
                            <input class="form-control" type="text" name="sub_content" value="<?= $details['sub_content']?>"/>
                        </div>
                    <?php }?>
                    <?php if($details['content_id']==1 ){ ?>
                        <div class="col-lg-12">
                            <label for="">Button Title</label>
                            <input class="form-control" type="text" name="button_title" value="<?= $details['button_title']?>"/>
                        </div>
                    <?php }?>
                    <?php if($details['content_id']==1 ){ ?>
                        <div class="col-lg-12">
                            <label for="">Button Url</label>
                            <input class="form-control" type="url" name="button_url" value="<?= $details['button_url']?>"/>
                        </div>
                    <?php }?>
                    <?php if($details['content_id'] == 11){ ?>
                        <div class="col-lg-12">
                            <label for="">Paste Map Url</label>
                            <input class="form-control" type="text" name="map" value=""/>
                        </div>
                        <div class="col-lg-12">
                            <label for="">MAP URL:</label>
                            <div ><?= $details['map']?></div>

                        </div>
                    <?php }?>
                    </div>
                     
                    <div class="text-xs-right " style="margin-top:10px;">
                        <input type="hidden" name="id" value="<?php echo $details['id']?>">
                        <input type="hidden" name="content_id" value="<?php echo $details['content_id']?>">
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