<?php $this->load->view('_blocks/header') ?>

<link rel="stylesheet" type="text/css" href="assets/css/housing.css">
<link rel="stylesheet" type="text/css" href="assets/css/housePicDetail.css">
<script type="text/javascript" src="assets/js/slidepics.js"></script>


<div id="wrapper">   <!--nav scrollbar on the left-->

<!--    <div id="navscroll" class="PageScrollerNav standardNav right dark">
        <ul>
            <li><A href="#">Long Term Contract</A></li>
            <li><A href="#">Sublease</A></li>
        </ul>
    </div>-->

    <div>
        <h1>Housing</h1>
        <br />

    </div>

    <div class="section">
        <h2>Long Term Contract</h2>
        
        <div id="long_term">
        
        <?php $num=1; ?>
        <?php $id="id='imgB"; ?>
        <?php $id_dialog="id='dialog" ?>
        <?php $no="no='"; ?>    
        <?php foreach ($sections as $value) { ?>
            <table class="housing" border="2">
                <tr>
                    <td >
                        <img src="assets/images/<?= $value['house_img'] ?>" alt="House image" <?php echo $no.$num."'"; ?> class="housing_pic img-thumbnail" />

                        <!-- House Details show in dialog-->
                        <div <?php echo $id_dialog.$num."'";?>  class="dialog" title="House Details:">
                            <div id="showbox">
                                <div id="showImg">
                                    <table>
                                        <tr>
                                            <td >
                                                <img src="assets/images/<?= $value['house_img'] ?>"  class="img-thumbnail" <?php echo $id.$num."'"; ?>/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="imgList">    	
                                    <span id="prv"><a href="#"><img src="assets/images/left_arrow.gif" border="0"/></a></span>           
                                    <div id="list">
                                        <ul>
                       <?php foreach ($value['photos'] as $image) {   ?>
                              
                                                <li> <img src="assets/images/<?=$image['photo']  ?>" <?php echo $no.$num."'"; ?> />
                                                </li>  
                                                    <?php } ?>              
                                          
                                        </ul>
                                    </div>
                                    <span id="next"><a href="#"><img src="assets/images/right_arrow.gif" border="0"/></a></span>    
                                </div>
                            </div>


                            <div class="description">
                                <strong>Description:</strong><?= $value['description'] ?><br />
                                
                                <strong>Location:</strong><?= $value['location'] ?><br/>
                                <strong>Style:</strong><?= $value['style'] ?><br />
                                <strong>Parking:</strong><?= $value['parking'] ?><br/>
                                <strong>Tel:</strong><?= $value['phone'] ?><br />
                                <strong>Email:</strong><?= $value['email'] ?><br />
                                <br />
                                <h4 id="price">Price: <?= $value['price'] ?> </h4>
                                
                                <?= $value['house_map'] ?>
                            </div>

                        </div>
                    </td>

                    <td class="housing_descript" valign="top">
                        <strong>Location:</strong> <?= $value['location'] ?> <br /> 
                        <strong>Price:</strong> <?= $value['price'] ?>/month<br/><br />

                        <strong>Description:</strong>
                        <?= $value['description'] ?>
                        <br /> <br />

                    </td>
                   </table>
           <?php $num++; ?>
        <?php } ?>   
            
            </div>


        <br/><br/>
       

        <script type="text/javascript">
            $(document).ready(function() {
                $('body').pageScroller({navigation: '#navscroll'});
                $(".housing_pic").click(
                        function() {
                            $("#dialog"+$(this).attr('no')).dialog({ //找到點選.housing_pic的attribute為no的值，附加到dialog的id之後
                                
                                maxHeight: 600,
                                maxWidth: 800,
                                height: 600,
                                width: 800,
                                show: {
                                    effect: "blind",
                                    duration: 1000,
                                },
                                hide: {
                                    effect: "explode",
                                    duration: 500
                                }
                            });
                        }
                );
            });
                
//            $(document).ready(function() {
//                $(".dialog").each(
//                        function() {
//                            $(".dialog").dialog({
//                                autoOpen: false,
//                                maxHeight: 550,
//                                maxWidth: 750,
//                                height: 550,
//                                width: 750,
//                                show: {
//                                    effect: "blind",
//                                    duration: 1000,
//                                },
//                                hide: {
//                                    effect: "explode",
//                                    duration: 1000
//                                }
//                            });
//
//                            $('img.detail').click(function() {
//
//                                $(this).$(".dialog").dialog("open");
//                                return false;
//                            });
//                        });
//            });
        </script>

    </div>
</div>
    <?php $this->load->view('_blocks/footer') ?>
   
