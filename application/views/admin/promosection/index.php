<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        <form action="<?= base_url('Adminhome/pr_update')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Promo Section</h3>
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
                            <h4 for="">Heading :</h4>
                            <input class="form-control" type="text" name="heading" value="<?= $promo_section['heading']?>">
                        </div>
                        <div class="col-lg-12">
                            <h4 for="">content :</h4>
                            <input class="form-control" type="text" name="content" value="<?= $promo_section['content']?>">
                        </div>
                    </div>

                    
                    <div class="row">
                        <h4>Promo Section</h4>
                        <div class="col-lg-4">
                            <h5>Icon :</h5>
                            <div style="padding:20px; border:1px solid; margin-bottom:10px; width:70px" ><i class="<?= $promo_section['icon_promo_1']?>"></i> </div>
                            <input class="form-control" value="<?= $promo_section['icon_promo_1']?>" type="text" name="icon_promo_1" placeholder="Paste icon class">
                            <a href="https://fontawesome.com/icons" target="_blank" class="btn btn-primary " style="color:#000  ; margin-top:10px ;  text-decoration:none"  >Choose icon</a>
                        </div>
                        <div class="col-lg-4">
                            <h5>Icon :</h5>
                            <div style="padding:20px; border:1px solid; margin-bottom:10px; width:70px" ><i class="<?= $promo_section['icon_promo_2']?>"></i></div>
                            <input class="form-control" value="<?= $promo_section['icon_promo_2']?>" type="text" name="icon_promo_2" placeholder="Paste icon class">
                        </div>
                        <div class="col-lg-4">
                            <h5>Icon :</h5>
                            <div style="padding:20px; border:1px solid; margin-bottom:10px; width:70px" ><i class="<?= $promo_section['icon_promo_3']?>"></i></div>
                            <input class="form-control" value="<?= $promo_section['icon_promo_3']?>" type="text" name="icon_promo_3" placeholder="Paste icon class">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h5>Heading :</h5>
                            <input class="form-control" type="text" name="heading_promo_1" value="<?= $promo_section['heading_promo_1']?>">
                        </div>
                        <div class="col-lg-4">
                            <h5>Heading :</h5>
                            <input class="form-control" type="text" name="heading_promo_2" value="<?= $promo_section['heading_promo_2']?>">
                        </div>
                        <div class="col-lg-4">
                            <h5>Heading :</h5>
                            <input class="form-control" type="text" name="heading_promo_3" value="<?= $promo_section['heading_promo_3']?>">
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-4">
                            <h5>Content :</h5>
                            <input class="form-control" type="text" name="content_promo_1" value="<?= $promo_section['content_promo_1']?>">
                        </div>
                        <div class="col-lg-4">
                            <h5>Content :</h5>
                            <input class="form-control" type="text" name="content_promo_2" value="<?= $promo_section['content_promo_2']?>">
                        </div>
                        <div class="col-lg-4">
                            <h5>Content :</h5>
                            <input class="form-control" type="text" name="content_promo_3" value="<?= $promo_section['content_promo_3']?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $promo_section['id']?>">
                    <div class="text-xs-right " style="margin-top:20px">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </form>
      <!-- /.box -->
    </section>
</div>
