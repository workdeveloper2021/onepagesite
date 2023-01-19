<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        
        <form action="<?= base_url('Adminpricing/update')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Pricing Page</h3>
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
                            <label for="">Main Heading :</label>
                            <input class="form-control" type="text" name="main_heading" value="<?= $pricing['main_heading']?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Main Content :</label>
                            <textarea name="main_content" id="main_content"><?= $pricing['main_content']?></textarea>
                            <script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace('main_content');
                            </script>
                        </div>
                    </div>
                    <div class="row" style="display:flex; margin-top:20px;">
                        <div class="col-lg-4" style="margin:0 10px; border:2px solid;width:30%;">
                            <h5>Heading :</h5>
                            <input type="text" name="heading_section_1" value="<?= $pricing['heading_section_1']?>" >
                            <div style="width:100px; height:100px">
                            <img src="<?= base_url().$pricing['image_section_1']?>" alt="image" style="width:100%">
                            </div>
                            <h5>Image:</h5>
                            <input type="file" name="image_section_1" >
                            <textarea style="margin-top:10px; width:100%" name="content_section_1" id=""><?= $pricing['content_section_1']?></textarea>
                            <h5>Price :</h5>
                            <input type="text" name="price_section_1" value="<?= $pricing['price_section_1']?>">
                            <h5>Button Title :</h5>
                            <input type="text" name="button_name_section_1" value="<?= $pricing['button_name_section_1']?>">
                            <h5>Button Url :</h5>
                            <input type="text" name="button_url_section_1" value="<?= $pricing['button_url_section_1']?>">
                        </div>
                        <div class="col-lg-4" style="margin:0 10px; border:2px solid;width:30%;">
                            <h5>Heading :</h5>
                            <input type="text" name="heading_section_2" value="<?= $pricing['heading_section_2']?>" >
                            <div style="width:100px; height:100px">
                            <img src="<?= base_url().$pricing['image_section_2']?>" alt="image" style="width:100%">
                            </div>
                            <h5>Image:</h5>
                            <input type="file" name="image_section_2" >
                            <textarea style="margin-top:10px; width:100%" name="content_section_2" id=""><?= $pricing['content_section_2']?></textarea>
                            <h5>Price :</h5>
                            <input type="text" name="price_section_2" value="<?= $pricing['price_section_2']?>">
                            <h5>Button Title :</h5>
                            <input type="text" name="button_name_section_2" value="<?= $pricing['button_name_section_2']?>">
                            <h5>Button Url :</h5>
                            <input type="text" name="button_url_section_2" value="<?= $pricing['button_url_section_2']?>">
                        </div>
                        <div class="col-lg-4" style="margin:0 10px; border:2px solid;width:30%;">
                            <h5>Heading :</h5>
                            <input type="text" name="heading_section_3" value="<?= $pricing['heading_section_3']?>" >
                            <div style="width:100px; height:100px">
                            <img src="<?= base_url().$pricing['image_section_3']?>" alt="image" style="width:100%">
                            </div>
                            <h5>Image:</h5>
                            <input type="file" name="image_section_3" >
                            <textarea style="margin-top:10px; width:100%" name="content_section_3" id=""><?= $pricing['content_section_3']?></textarea>
                            <h5>Price :</h5>
                            <input type="text" name="price_section_3" value="<?= $pricing['price_section_3']?>">
                            <h5>Button Title :</h5>
                            <input type="text" name="button_name_section_3" value="<?= $pricing['button_name_section_3']?>">
                            <h5>Button Url :</h5>
                            <input type="text" name="button_url_section_3" value="<?= $pricing['button_url_section_3']?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $pricing['id']?>">
                    <div class="text-xs-right " style="margin-top:10px;">
                        <button type="submit" class="btn btn-info">Update</button>
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
CKEDITOR.replace('content');
</script>
<!-- ck editor -->