<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.themezaa.com/html/leadgen/demo/hotel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 09:56:01 GMT -->
<head>
    <?php
        include "common/css.php"
    ?>
    </head>
    <body>
    <?php
        include "common/header.php"
    ?>
        <section id="home" class="no-padding slider-style4 border-none">
            <div class="owl-slider-auto owl-carousel owl-theme light-pagination xs-no-owl-buttons">
                <!-- slider item -->
                <?php if($banner){
                    foreach ($banner as  $value) {
                        // print_r($value);

                    ?>
                <div class="item owl-bg-img tz-builder-bg-image wedding-slider-bg1 cover-background one-sixth-screen xs-one-second-screen bg-img-one" id="tz-bg-10" data-img-size="(W)1920px X (H)909px" style="background: linear-gradient(rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 0.01)) repeat scroll 0% 0%, transparent url('<?= base_url().$value['image'];?>') repeat scroll 0% 0%;"></div>
                <?php }}?>
                <!-- end slider item -->
                <!-- slider item -->
                <!-- <div class="item owl-bg-img tz-builder-bg-image wedding-slider-bg3 cover-background one-sixth-screen xs-one-second-screen bg-img-three" id="tz-bg-12" data-img-size="(W)1920px X (H)909px" style="background: linear-gradient(rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 0.01)) repeat scroll 0% 0%, transparent url('<?= base_url();?>assets/images/bg-image/wedding-slider-03.jpg') repeat scroll 0% 0%;"></div> -->
                <!-- end slider item -->
                <!-- slider item -->
                <!-- <div class="item owl-bg-img tz-builder-bg-image wedding-slider-bg2 cover-background one-sixth-screen xs-one-second-screen bg-img-two" id="tz-bg-11" data-img-size="(W)1920px X (H)909px" style="background: linear-gradient(rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 0.01)) repeat scroll 0% 0%, transparent url('<?= base_url();?>assets/images/bg-image/wedding-slider-02.jpg') repeat scroll 0% 0%;"></div> -->
                <!-- end slider item -->
            </div>
        </section>
        <section class="padding-110px-tb xs-padding-60px-tb bg-white builder-bg border-none" id="content-section32">
            <div class="container">
                <div class="row equalize xs-equalize-auto equalize-display-inherit">
                    <div class="col-lg-5 col-md-6 col-sm-6 xs-12 xs-text-center xs-margin-nineteen-bottom display-table">
                        <div class="display-table-cell-vertical-middle">
                            <div class="margin-three-bottom sm-margin-five-bottom alt-font text-medium-gray text-medium tz-text">PROVIDING QUALITY SERVICES SINCE '98.</div>
                            <!-- section title -->
                            <h2 class="alt-font title-extra-large sm-title-large xs-title-large text-yellow-ochre margin-eight-bottom tz-text sm-margin-ten-bottom"><?= $content[0]['title']?></h2>
                            <!-- end section title -->
                            <div class="text-medium tz-text width-90 sm-width-100 margin-seven-bottom sm-margin-ten-bottom"><p><?= $content[0]['description']?></p></div>
                            <?php $result = $this->db->select('*')->where(array('content_id' => 1))->get('details')->row_array();?>
                            <a class="btn btn-medium propClone btn-circle bg-yellowish-gray text-white" href="<?= $result['button_url']?>"><span class="tz-text">
                            <?php  echo $result['button_title']; ?>
                            </span><i class="fa fa-angle-right icon-extra-small tz-icon-color"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-6 xs-12 xs-text-center display-table">
                        <div class="display-table-cell-vertical-middle">
                            <img alt="" src="<?= base_url();?>assets/images/application-screenshot-img-06.png" data-img-size="(W)800px X (H)785px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-110px-tb xs-padding-60px-tb blog-style1 bg-light-deep-yellow builder-bg" id="blog-section1">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-yellow-ochre font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text"><?= $content[1]['title']?></h2>
                        <div class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom  xs-margin-nineteen-bottom"><?= $content[1]['description']?></div>
                    </div>
                </div>
                <!-- end section title -->
                <div class="row">
                    <!-- blog item -->
                    <?php $result = $this->db->select('*')->where(array('content_id' => 2))->get('details')->result_array();?>
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="blog-image">
                                <a href="#subscribe-section8" class="inner-link"><img class="img100" alt="" src="<?= base_url().$result[0]['image'];?>" data-img-size="(W)800px X (H)507px"></a>
                            </div>
                            <!-- end blog image -->
                            <!-- blog details -->
                            <div class="post-details bg-white tz-background-color">
                                <div class="post-author tz-background-color bg-yellowish-gray margin-thirteen-bottom md-margin-eleven-bottom xs-margin-eight-bottom"><a href="#subscribe-section8" class="tz-text text-white blog-name inner-link">FROM $50 / PER NIGHT</a></div>
                                <a href="#subscribe-section8" class="tz-text text-dark-gray blog-post-title text-medium font-weight-600 margin-five-bottom display-inline-block md-margin-five-bottom inner-link"><?= $result[0]['sub_heading'];?></a>
                                <div class="text-medium tz-text"><?= $result[0]['sub_content'];?></div>
                            </div>
                            <!-- end blog details -->
                        </div>
                    </div>
                    <!-- end blog item -->
                    <!-- blog item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="blog-image">
                                <a href="#subscribe-section8" class="inner-link"><img class="img100" alt="" src="<?= base_url().$result[1]['image'];?>" data-img-size="800px (W) X 507px (H)"></a>
                            </div>
                            <!-- end blog image -->
                            <!-- blog details -->
                            <div class="post-details bg-white tz-background-color">
                                <div class="post-author tz-background-color bg-yellowish-gray margin-thirteen-bottom md-margin-eleven-bottom xs-margin-eight-bottom"><a href="#subscribe-section8" class="tz-text text-white blog-name inner-link">FROM $30 / PER NIGHT</a></div>
                                <a href="#subscribe-section8" class="tz-text text-dark-gray blog-post-title text-medium font-weight-600 margin-five-bottom display-inline-block md-margin-five-bottom inner-link"><?= $result[1]['sub_heading'];?></a>
                                <div class="text-medium tz-text"><?= $result[0]['sub_content'];?></div>
                            </div>
                            <!-- end blog details -->
                        </div>
                    </div>
                    <!-- end blog item -->
                    <!-- blog item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="blog-image">
                                <a href="#subscribe-section8" class="inner-link"><img class="img100" alt="" src="<?= base_url().$result[2]['image'];?>" data-img-size="(W)800px X (H)507px"></a>
                            </div>
                            <!-- end blog image -->
                            <!-- blog details -->
                            <div class="post-details bg-white tz-background-color">
                                <div class="post-author tz-background-color bg-yellowish-gray margin-thirteen-bottom md-margin-eleven-bottom xs-margin-eight-bottom"><a href="#subscribe-section8" class="tz-text text-white blog-name inner-link">FROM $25 / PER NIGHT</a></div>
                                <a href="#subscribe-section8" class="tz-text text-dark-gray blog-post-title text-medium font-weight-600 margin-five-bottom display-inline-block md-margin-five-bottom inner-link"><?= $result[2]['sub_heading'];?></a>
                                <div class="text-medium tz-text"><?= $result[2]['sub_content'];?></div>
                            </div>
                            <!-- end blog details -->
                        </div>
                    </div>
                    <!-- end blog item -->
                </div>
            </div>
        </section>
        <!-- <section class="padding-two bg-white builder-bg xs-padding-60px-tb" id="feature-section33">
            <div class="container-fluid no-padding sm-no-padding-15">
                <div class="row"> -->
                    <!-- feature box -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-eleven-bottom xs-text-center">
                        <a href="#portfolios-section8" class="inner-link"><img alt="" src="<?= base_url();?>assets/images/agency-work-09.jpg" data-img-size="(W)800px X (H)1322px"></a>
                    </div> -->
                    <!-- end feature box -->
                    <!-- feature box -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-eleven-bottom xs-text-center">
                        <a href="#portfolios-section8" class="inner-link"><img alt="" src="<?= base_url();?>assets/images/agency-work-12.jpg" data-img-size="(W)800px X (H)1322px"></a>
                    </div> -->
                    <!-- end feature box -->
                    <!-- feature box -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-eleven-bottom xs-text-center">
                        <a href="#portfolios-section8" class="inner-link"><img alt="" src="<?= base_url();?>assets/images/agency-work-15.jpg" data-img-size="(W)800px X (H)1322px"></a>
                    </div> -->
                    <!-- end feature box -->
                    <!-- feature box -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-eleven-bottom xs-text-center">
                        <a href="#portfolios-section8" class="inner-link"><img alt="" src="<?= base_url();?>assets/images/agency-work-16.jpg" data-img-size="(W)800px X (H)1322px"></a>
                    </div> -->
                    <!-- end feature box -->
                <!-- </div>
            </div>
        </section> -->
        <section class="padding-110px-tb no-padding-bottom xs-padding-top-60px bg-white builder-bg border-none" id="title-section1">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-yellow-ochre font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text"><?= $content[2]['title']?></h2>
                        <div class="text-medium-gray text-medium width-60 margin-thirteen-bottom margin-lr-auto md-width-70 sm-width-100 tz-text"><?= $content[2]['description']?></div>
                    </div>
                    <!-- end section title -->
                </div>                    
            </div>
        </section>
        <section id="tab-section7" class="padding-110px-tb no-padding-top xs-padding-60px-tb builder-bg bg-white border-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12 center-col">                            
                        <div class="tab-style8">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <!-- tab navigation -->
                                    <ul class="nav nav-tabs nav-tabs-light text-left alt-font text-small display-inherit text-center font-weight-600">
                                        <li class="active"><a href="#tab_sec1" data-toggle="tab"><span class="tz-text">SWIMMING / GYM</span></a></li>
                                        <li><a href="#tab_sec2" data-toggle="tab"><span class="tz-text">SPORTS CLUB</span></a></li>
                                        <li><a href="#tab_sec3" data-toggle="tab"><span class="tz-text">PICK-UP</span></a></li>
                                        <li><a href="#tab_sec4" data-toggle="tab"><span class="tz-text">RESTAURANT / BAR</span></a></li>
                                    </ul>
                                    <!-- tab end navigation -->
                                </div>
                            </div>                                
                            <div class="tab-content">
                                <!-- tab content -->
                                <?php $result = $this->db->select('*')->where(array('content_id' => 3))->get('details')->result_array();?>
                                <div class="tab-pane med-text fade in active" id="tab_sec1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-twelve-bottom">
                                            <img src="<?= base_url().$result[0]['image'];?>" data-img-size="(W)1232px X (H)875px" alt=""/>
                                        </div>
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1">
                                            <div class="text-extra-large text-yellowish-gray tz-text">The world class</div>
                                            <h2 class="alt-font title-large sm-title-large xs-title-large text-yellowish-gray margin-six-bottom tz-text position-relative top-minus2"><?= $result[0]['sub_heading'];?></h2>
                                            <div class="text-medium tz-text width-90 sm-width-100 margin-ten-bottom sm-margin-ten-bottom"><p><?= $result[0]['sub_content'];?></p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec2">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-twelve-bottom">
                                            <img src="<?= base_url().$result[1]['image'];?>" data-img-size="(W)1232px X (H)875px" alt=""/>
                                        </div>
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1">
                                            <div class="text-extra-large text-yellowish-gray tz-text">The world class</div>
                                            <h2 class="alt-font title-large sm-title-large xs-title-large text-yellowish-gray margin-six-bottom tz-text position-relative top-minus2"><?= $result[1]['sub_heading'];?></h2>
                                            <div class="text-medium tz-text width-90 sm-width-100 margin-ten-bottom sm-margin-ten-bottom"><p><?= $result[1]['sub_content'];?></p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-twelve-bottom">
                                            <img src="<?= base_url().$result[2]['image'];?>" data-img-size="(W)1232px X (H)875px" alt=""/>
                                        </div>
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1">
                                            <div class="text-extra-large text-yellowish-gray tz-text">The world class</div>
                                            <h2 class="alt-font title-large sm-title-large xs-title-large text-yellowish-gray margin-six-bottom tz-text position-relative top-minus2"><?= $result[2]['sub_heading'];?></h2>
                                            <div class="text-medium tz-text width-90 sm-width-100 margin-ten-bottom sm-margin-ten-bottom"><p><?= $result[2]['sub_content'];?></p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec4">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-twelve-bottom">
                                            <img src="<?= base_url().$result[3]['image'];?>" data-img-size="(W)1232px X (H)875px" alt=""/>
                                        </div>
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1">
                                            <div class="text-extra-large text-yellowish-gray tz-text">The world class</div>
                                            <h2 class="alt-font title-large sm-title-large xs-title-large text-yellowish-gray margin-six-bottom tz-text position-relative top-minus2"><?= $result[3]['sub_heading']?></h2>
                                            <div class="text-medium tz-text width-90 sm-width-100 margin-ten-bottom sm-margin-ten-bottom"><p><?= $result[3]['sub_content']?></p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                            </div>                                
                        </div>                            
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white builder-bg border-none" id="portfolios-section8">
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme owl-light-pagination white-pagination testimonial-style3">
                        <!-- portfolio item -->
                        <?php $result = $this->db->select('*')->where(array('content_id' => 7))->get('details')->result_array();
                        if($result){
                        foreach ($result as $value) {
                        
                        ?>
                        <div class="item">
                            <img src="<?= base_url().$value['image'];?>" data-img-size="(W)800px X (H)650px" id="tz-bg-31" alt=""/>
                        </div>
                        <?php }
                        }?>
                        <!-- end portfolio item -->
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-150px-tb feature-style4 bg-light-deep-yellow builder-bg xs-padding-60px-tb border-none" id="feature-section7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 four-column">
                        <!-- feature box -->
                        <?php $result = $this->db->select('*')->where(array('content_id' => 8))->get('details')->result_array();
                        if ($result) {
                            foreach ($result as $value) {
                                
                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-nine-bottom xs-margin-nineteen-bottom">
                            <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img alt="" src="<?= base_url().$value['image'];?>" data-img-size="(W)90px X (H)90px"></div>
                            <h3 class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600"><?= $value['sub_heading']?></h3>
                            <div class="text-medium tz-text"> <p><?= $value['sub_content']?></p> </div>
                        </div>
                        <!-- end feature box -->
                    <?php } }?>
                        <!-- feature box -->
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-nine-bottom xs-margin-nineteen-bottom">
                            <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img alt="" src="<?= base_url();?>assets/images/restaurant-service-icon02.png" data-img-size="(W)90px X (H)90px"></div>
                            <h3 class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">FREE BREAKFAST</h3>
                            <div class="text-medium tz-text"> <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p> </div>
                        </div> -->
                        <!-- end feature box -->
                        <!-- feature box -->
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-nine-bottom xs-margin-nineteen-bottom">
                            <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img alt="" src="<?= base_url();?>assets/images/restaurant-service-icon03.png" data-img-size="(W)90px X (H)90px"></div>
                            <h3 class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">CLEAN EVERYDAY</h3>
                            <div class="text-medium tz-text"> <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p> </div>
                        </div> -->
                        <!-- end feature box -->
                        <!-- feature box -->
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img alt="" src="<?= base_url();?>assets/images/restaurant-service-icon04.png" data-img-size="(W)90px X (H)90px"></div>
                            <h3 class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">ENJOY NIGHTLIFE</h3>
                            <div class="text-medium tz-text"> <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. </p> </div>
                        </div> -->
                        <!-- end feature box -->
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-80px-tb bg-white builder-bg border-none" id="callto-action3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 center-col">
                        <div class="row">
                            <!-- image -->
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 col-md-offset-1 col-sm-offset-2 just-married text-center">
                                <a href="#subscribe-section8" class="inner-link"><img alt="" src="<?= base_url();?>assets/images/wedding-married.png" data-img-size="(W)85px X (H)85px"></a>
                            </div>
                            <!-- end image -->
                            <div class="col-md-8 col-sm-6 col-xs-12 xs-text-center">
                                <div class="padding-fourteen no-padding-lr sm-padding-twenty-three sm-no-padding-lr xs-padding-fourteen xs-no-padding-lr title-medium font-weight-300 tz-text">
                                    We offers the perfect setting for rare moments of romance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-yellow-ochre builder-bg border-none" id="content-section19">
            <div class="container-fluid">
                <div class="row equalize">
                    <div class="col-md-6 col-sm-12 col-xs-12 display-table no-padding xs-padding-ten">
                        <div class="display-table-cell-vertical-middle padding-twenty-two md-padding-seven xs-no-padding-lr">
                            <!-- section title -->
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-nine-top xs-no-padding-lr">
                                <h2 class="alt-font title-extra-large-2 md-title-extra-large sm-title-extra-large xs-title-extra-large text-white margin-four-bottom xs-margin-fifteen-bottom tz-text"><?= $content[3]['title']?></h2>
                                <div class="text-extra-large sm-text-extra-large text-light-deep-yellow font-weight-300 width-80 md-width-100 margin-fifteen-bottom tz-text"><p><?= $content[3]['description']?></p></div>
                            </div>
                            <!-- section title -->
                            <!-- content details -->
                            <!-- <div class="two-column">
                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                    <div class="float-left width-100 margin-four-bottom">      
                                        <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-white title-large sm-title-large no-padding tz-text">01.</div>   
                                        <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Exclusive interior</h3>
                                    </div>                                             
                                    <div class="text-medium sm-text-medium float-left width-90 md-width-100 text-light-deep-yellow tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                    <div class="float-left width-100 margin-four-bottom">      
                                        <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-white title-large sm-title-large no-padding tz-text">02.</div>   
                                        <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Wellness & spa</h3>
                                    </div>                                             
                                    <div class="text-medium sm-text-medium float-left width-90 md-width-100 text-light-deep-yellow tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                    <div class="float-left width-100 margin-four-bottom">      
                                        <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-white title-large sm-title-large no-padding tz-text">03.</div>   
                                        <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Bar & restaurant</h3>
                                    </div>                                             
                                    <div class="text-medium sm-text-medium float-left width-90 md-width-100 text-light-deep-yellow tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-no-margin-bottom xs-no-padding-lr">
                                    <div class="float-left width-100 margin-four-bottom">      
                                        <div class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-white title-large sm-title-large no-padding tz-text">04.</div>   
                                        <h3 class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">Parking & security</h3>
                                    </div>                                             
                                    <div class="text-medium sm-text-medium float-left width-90 md-width-100 text-light-deep-yellow tz-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                                </div>
                            </div> -->
                            <!-- end content details -->
                        </div>
                    </div>
                    <?php $result = $this->db->select('*')->where(array('content_id' => 4))->get('details')->row_array();?>
                    <div class="col-md-6 col-sm-12 col-xs-12 tz-builder-bg-image xs-height-400-px cover-background bg-img-four" data-img-size="(W)1000px X (H)800px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('<?= base_url().$result['image'];?>"></div>
                </div>
            </div>
        </section>
        <section class="padding-110px-tb xs-padding-60px-tb bg-light-deep-yellow builder-bg border-none" id="content-section8">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-yellow-ochre font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text"><?= $content[4]['title']?></h2>
                        <div class="text-medium width-60 text-yellowish-gray margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom xs-margin-nineteen-bottom"><?= $content[4]['description']?></div>
                    </div>
                    <!-- end section title -->
                    <?php $result = $this->db->select('*')->where(array('content_id' => 5))->get('details')->result_array();?>
                    <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                        <!-- content treatments -->
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-ten-bottom sm-margin-eight-bottom xs-margin-fifteen-bottom">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                                <img src="<?= base_url().$result[0]['image'];?>" data-img-size="(W)900px X (H)490px" alt=""/>
                                <div class="treatments-details spa-treatments bg-white tz-background-color">
                                    <div class="slider-text-middle-main padding-thirty md-padding-ten sm-padding-nineteen xs-padding-eleven">
                                        <div class="slider-text-middle">
                                            <h3 class="text-medium text-dark-gray margin-six-bottom display-block alt-font tz-text font-weight-600"><?= $result[0]['sub_heading']?></h3>
                                            <div class="text-extra-medium line-height-22 tz-text"><?= $result[0]['sub_content']?></div>
                                            <a class="alt-font text-yellow-ochre margin-fifteen-top text-decoration-underline text-small propClone inner-link" href="#subscribe-section8"><span class="tz-text">PER PERSON / $2000</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content treatments -->
                        <!-- content treatments -->
                        <div class="col-md-12 col-sm-12 col-xs-12 sm-margin-eight-bottom xs-margin-fifteen-bottom">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                                <img src="<?= base_url().$result[1]['image'];?>" data-img-size="(W)900px X (H)490px" alt=""/>
                                <div class="treatments-details spa-treatments bg-white tz-background-color">
                                    <div class="slider-text-middle-main padding-thirty md-padding-ten sm-padding-nineteen xs-padding-eleven">
                                        <div class="slider-text-middle">
                                            <h3 class="text-medium text-dark-gray margin-six-bottom display-block alt-font tz-text font-weight-600"><?= $result[1]['sub_heading']?></h3>
                                            <div class="text-extra-medium line-height-22 tz-text"><?= $result[1]['sub_content']?></div>
                                            <a class="alt-font text-yellow-ochre margin-fifteen-top text-decoration-underline text-small propClone inner-link" href="#subscribe-section8"><span class="tz-text">PER PERSON / $199</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content treatments -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                        <!-- content treatments -->
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-ten-bottom sm-margin-eight-bottom xs-margin-fifteen-bottom ">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                                <img src="<?= base_url().$result[2]['image'];?>" data-img-size="(W)900px X (H)490px" alt=""/>
                                <div class="treatments-details spa-treatments bg-white tz-background-color">
                                    <div class="slider-text-middle-main padding-thirty md-padding-ten sm-padding-nineteen xs-padding-eleven">
                                        <div class="slider-text-middle">
                                            <h3 class="text-medium text-dark-gray margin-six-bottom display-block alt-font tz-text font-weight-600"><?= $result[2]['sub_heading']?></h3>
                                            <div class="text-extra-medium line-height-22 tz-text"><?= $result[2]['sub_content']?></div>
                                            <a class="alt-font text-yellow-ochre margin-fifteen-top text-decoration-underline text-small propClone inner-link" href="#subscribe-section8"><span class="tz-text">PER PERSON / $299</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content treatments -->
                        <!-- content treatments -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding overflow-hidden content-treatments position-relative">
                                <img src="<?= base_url().$result[3]['image'];?>" data-img-size="(W)900px X (H)490px" alt=""/>
                                <div class="treatments-details spa-treatments bg-white tz-background-color">
                                    <div class="slider-text-middle-main padding-thirty md-padding-ten sm-padding-nineteen xs-padding-eleven">
                                        <div class="slider-text-middle">
                                            <h3 class="text-medium text-dark-gray margin-six-bottom display-block alt-font tz-text font-weight-600"><?= $result[3]['sub_heading']?></h3>
                                            <div class="text-extra-medium line-height-22 tz-text"><?= $result[3]['sub_content']?></div>
                                            <a class="alt-font text-yellow-ochre margin-fifteen-top text-decoration-underline text-small propClone inner-link" href="#subscribe-section8"><span class="tz-text">PER PERSON / $300</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content treatments -->
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials-section6" class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb border-none">
            <div class="container position-relative">
                <div class="row">
                <?php $result = $this->db->select('*')->where(array('content_id' => 9))->get('details')->result_array();
                if ($result) {
                    foreach ($result as $value) {
                    
                ?>
                    <!-- testimonial item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center xs-margin-twenty-bottom">
                        <img class="img-round-100 margin-eleven-bottom" src="<?= base_url().$value['image'];?>" data-img-size="(W)149px X (H)149px" alt=""/>
                        <div class="tz-text width-80 center-col sm-width-100"><p class="margin-seven-bottom"><?= $value['sub_content']?></p></div>
                        <div class="text-small text-dark-gray tz-text alt-font font-weight-600"><?= $value['name']?></div>
                    </div>
                    <!-- end testimonial item -->
                    <?php } } ?>
                </div>
            </div>
        </section>
        <section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none bg-img-five" id="content-section41" data-img-size="(W)1920px X (H)650px" style="background:linear-gradient(rgba(17,17,17,0.7), rgba(40,40,40,0.6)), url('<?= base_url();?>assets/images/bg-image/hero-bg25.jpg')">
            <div class="container">
                <div class="row equalize sm-equalize-auto three-column">
                    <!-- feature box 4 -->
                    <?php $result = $this->db->select('*')->where(array('content_id' => 10))->get('details')->result_array();
                if ($result) {
                    foreach ($result as $value) {
                    
                ?>
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center sm-margin-four-bottom xs-margin-ten-bottom display-table">
                        <div class="padding-twenty-nine sm-padding-fifteen xs-padding-twenty-one bg-black-dark-rgba tz-background-color display-table-cell-vertical-middle">     
                            <span class="text-white margin-two-bottom display-block tz-text">A HOLIDAY TO REMEMBER</span>
                            <h3 class="title-medium font-weight-300 text-yellow-ochre margin-fourteen-bottom sm-margin-seven-bottom tz-text"><?= $value['sub_heading']?></h3>
                            <div class="text-medium tz-text sm-width-80 xs-width-100 sm-margin-lr-auto"><p class="no-margin-bottom"><?= $value['sub_content']?></p></div>
                        </div>
                    </div>
                    <!-- end feature box 4 -->
                    <?php } } ?>
                    <!-- feature box 4 -->
                    <!-- <div class="col-md-4 col-sm-12 col-xs-12 text-center sm-margin-four-bottom xs-margin-ten-bottom display-table">
                        <div class="padding-twenty-nine sm-padding-fifteen xs-padding-twenty-one bg-black-dark-rgba tz-background-color display-table-cell-vertical-middle">     
                            <span class="text-white margin-two-bottom display-block tz-text">A HOLIDAY TO REMEMBER</span>
                            <h3 class="title-medium font-weight-300 text-yellow-ochre margin-fourteen-bottom sm-margin-seven-bottom tz-text">Relax and Enjoy</h3>
                            <div class="text-medium tz-text sm-width-80 xs-width-100 sm-margin-lr-auto"><p class="no-margin-bottom">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text since.</p></div>
                        </div>
                    </div> -->
                    <!-- end feature box 4 -->
                    <!-- feature box 4 -->
                    <!-- <div class="col-md-4 col-sm-12 col-xs-12 text-center sm-margin-four-bottom xs-margin-ten-bottom display-table">
                        <div class="padding-twenty-nine sm-padding-fifteen xs-padding-twenty-one bg-black-dark-rgba tz-background-color display-table-cell-vertical-middle">     
                            <span class="text-white margin-two-bottom display-block tz-text">LAUNCH SPECIAL OFFER</span>
                            <h3 class="title-medium font-weight-300 text-yellow-ochre margin-fourteen-bottom sm-margin-seven-bottom tz-text">Luxury by the Sea</h3>
                            <div class="text-medium tz-text sm-width-80 xs-width-100 sm-margin-lr-auto"><p class="no-margin-bottom">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text since.</p></div>
                        </div>
                    </div> -->
                    <!-- end feature box 4 -->
                </div>
            </div>
        </section>
        <section class="padding-110px-tb bg-white builder-bg xs-padding-60px-tb border-none" id="counter-section6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <!-- timer -->
                        <div id="counter">
                            <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-margin-seventeen-bottom">
                                <div class="counter-content">                                          
                                    <span class="timer counter-number title-large sm-title-extra-large-1 alt-font text-dark-gray xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="1500" data-speed="7000"></span>
                                    <span class="text-medium sm-text-medium display-block tz-text">Honeymoon Couple </span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-margin-seventeen-bottom">
                                <div class="counter-content">                                          
                                    <span class="timer counter-number title-large sm-title-extra-large-1 alt-font text-dark-gray xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="1400" data-speed="7000"></span>
                                    <span class="text-medium sm-text-medium display-block tz-text">Opening Hours</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-margin-seventeen-bottom">
                                <div class="counter-content">                                          
                                    <span class="timer counter-number title-large sm-title-extra-large-1 alt-font text-dark-gray xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="1250" data-speed="7000"></span>
                                    <span class="text-medium sm-text-medium display-block tz-text">Satisfaction Guests</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-no-margin-bottom">
                                <div class="counter-content">                                          
                                    <span class="timer counter-number title-large sm-title-extra-large-1 alt-font text-dark-gray xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="1600" data-speed="7000"></span>
                                    <span class="text-medium sm-text-medium display-block tz-text">Will Come Back</span>
                                </div>
                            </div>
                        </div>
                        <!-- end timer -->
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-yellow-ochre builder-bg border-none" id="subscribe-section8">
            <div class="container-fluid">
                <div class="row equalize">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 tz-builder-bg-image cover-background sm-height-600-px xs-height-400-px bg-img-six" data-img-size="(W)1200px X (H)760px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('<?= base_url();?>assets/images/bg-image/hero-bg32.jpg')"></div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 display-table">
                        <div class="display-table-cell-vertical-middle padding-twenty-nine sm-padding-fifteen xs-no-padding-lr">
                            <h2 class="title-large font-weight-500 alt-font xs-title-large text-white margin-six-bottom tz-text"><span class="title-extra-large-3 display-block font-weight-600 xs-section-title-large"><?= $content[5]['title']?></span> Limited rooms available!</h2>
                            <div class="text-large sm-text-extra-large text-white width-90 xs-width-100 margin-twelve-bottom tz-text"><?= $content[5]['description']?></div>
                            <div class="display-block width-90 xs-width-100">
                                <form action="javascript:void(0)" method="post">
                                    <input type="text" name="name" id="name" data-email="required" placeholder="Your Name" class="big-input bg-light-gray alt-font border-radius-4">
                                    <input type="text" name="email" id="email" data-email="required" placeholder="Your Email" class="big-input bg-light-gray alt-font border-radius-4">
                                    <button type="submit" class="default-submit btn btn-large propClone bg-golden-yellow text-dark-gray builder-bg tz-text">CHECK AVAILABILITY</button>                                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-110px-tb bg-white builder-bg xs-padding-60px-tb border-none" id="contact-section5">
            <div class="container">
                <div class="row four-column">
                    <!-- feature box -->
                    <?php $result = $this->db->select('*')->where(array('content_id' => 11))->get('details')->result_array();?>
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-fifteen-bottom text-center sm-clear-both">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb">     
                            <i class="fa ti-location-pin text-yellow-ochre icon-large tz-icon-color margin-ten-bottom xs-margin-seven-bottom"></i>
                            <h3 class="feature-title text-dark-gray text-medium alt-font display-block margin-three-bottom xs-margin-five-bottom font-weight-600 tz-text"><?= $result[0]['sub_heading']?></h3>
                            <div class="feature-text text-medium center-col tz-text"><?= $result[0]['sub_content']?></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- feature box -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-nine-bottom xs-margin-fifteen-bottom text-center">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb">
                            <i class="fa ti-mobile text-yellow-ochre icon-large tz-icon-color margin-ten-bottom xs-margin-seven-bottom"></i>
                            <h3 class="feature-title text-dark-gray text-medium alt-font display-block margin-three-bottom xs-margin-five-bottom font-weight-600 tz-text"><?= $result[1]['sub_heading']?></h3>
                            <div class="feature-text text-medium center-col tz-text"><?= $result[1]['sub_content']?></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- feature box -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-fifteen-bottom sm-clear-both">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb">
                            <i class="fa ti-email text-yellow-ochre icon-large tz-icon-color margin-ten-bottom xs-margin-seven-bottom"></i>
                            <h3 class="feature-title text-dark-gray text-medium alt-font display-block margin-three-bottom xs-margin-five-bottom font-weight-600 tz-text"><?= $result[2]['sub_heading']?></h3>
                            <div class="feature-text text-medium center-col"><a class="tz-text" href="mailto:no-reply@domain.com"><?= $result[2]['sub_content']?></a></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- feature box -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="feature-box xs-margin-thirteen xs-no-margin-tb">
                            <i class="fa ti-time text-yellow-ochre icon-large tz-icon-color margin-ten-bottom xs-margin-seven-bottom"></i>
                            <h3 class="feature-title text-dark-gray text-medium alt-font display-block margin-three-bottom xs-margin-five-bottom font-weight-600 tz-text"><?= $result[3]['sub_heading']?></h3>
                            <div class="feature-text text-medium center-col tz-text"><?= $result[3]['sub_content']?></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                </div>
            </div>
        </section>
        <section class="bg-white builder-bg border-none" id="contact-section10">
            <div class="container-fluid">
                <div class="row">
                    <!-- map -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center location-map no-padding maps">
                        <iframe height="600" allowfullscreen="" style="border: 0; width: 100%; vertical-align: bottom; display: block; pointer-events: none;" src="<?= $result[0]['map']?>"></iframe>
                    </div>
                    <!-- end map -->
                </div>
            </div>
        </section>
        <?php
             include "common/footer.php"
         ?>
       
    </body>

<!-- Mirrored from www.themezaa.com/html/leadgen/demo/hotel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 10:21:11 GMT -->
</html>
