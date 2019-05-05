
            <!-- Main Header Start -->
<?php
include 'header.php';

include 'commonincludefiles.php';
global $conn;

?>

            <!-- / Main Header Ends -->

            <!-- Main Slider Start -->
            <section class="main-slide">
                <div id="naturix-slider" class="owl-carousel nav-1">
                    <div class="item">
                        <img alt=".." src="assets/img/slider/slide-1.jpg">
                        <div class="tbl-wrp slide-1">
                            <div class="text-middle">
                                <div class="tbl-cell">
                                    <div class="slide-caption container text-center">
                                        <div class="slide-title">
                                            <img src="assets/img/icons/slide-txt-1.png" alt="">
                                            <span>100% Guarantee</span>
                                        </div>
                                        <div class="slide-title2 pb-50">
                                            <h2 class="section-title"> <strong>Pure </strong> <span class="light-font">Fertilizer </span> <strong>healthy </strong> </h2>
                                            <h4 class="sub-title" style="font-size: 23px;"> ખાતર, બીજ, અને ઘણું વધારે
                                            તમારા
 ઘર સુધિ </h4>
                                        </div>
                                        <div class="slide">
                                            <a href="#" class="slide-btn"> Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img alt=".." src="assets/img/slider/slide-1.jpg">
                        <div class="tbl-wrp slide-1">
                            <div class="text-middle">
                                <div class="tbl-cell">
                                    <div class="slide-caption container text-center">
                                        <div class="slide-title">
                                            <img src="assets/img/icons/slide-txt-1.png" alt="">
                                            <span>100% Guarantee</span>
                                        </div>
                                        <div class="slide-title2 pb-50">
                                            <h2 class="section-title"> <span class="light-font">Live </span> <strong>organic </strong> <span class="light-font">for live </span> <strong>healthy </strong> </h2>
                                            <h4 class="sub-title" style="font-size: 23px;"> ખાતર, બીજ, અને ઘણું વધારે તમારા ઘર સુધિ </h4>
                                        </div>
                                        <div class="slide">
                                            <a href="#" class="slide-btn"> Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Main Slider Ends -->

            <!-- Organic All Starts-->
            <section class="organic-all sec-space-bottom">
                <div class="pattern">
                    <img alt="" src="assets/img/icons/white-pattern.png" />
                </div>
                <div class="section-icon">
                    <img alt="" src="assets/img/icons/icon-1.png" />
                </div>
                <div class="container">
                    <div class="organic-wrap">
                        <img class="logo-img" alt="" src="assets/img/logo/logo-1.png" />
                        <div class="tabs-box">
                            <ul class="theme-tabs">
                            <?php
                            $category_data=getAllcategoryData();
                                if (!empty($category_data)) {
                                    $cnt=1;
                                    foreach ($category_data as $val) {
                                        if($cnt<5)
                                            echo ' <li class=""><a href="#product-tab-'.$cnt.'" data-toggle="tab"> <span class="light-font"> <strong>'.$val['name']. '</strong> </a></li>
                                            ';
                                            $cnt++;
                                        }
                                    }
                                    ?>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="tab-content organic-content row">
                            <div id="product-tab-1" class="tab-pane fade active in">
                                <div class="product-slider-1 dots-1">
                                    <?php
                                    $ct=1;
                                     $category_data=getAllproductData($ct);
                                if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-media">
                                            <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;' />  <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                                <div class="prod-icons">
                                                    <a href="#" class="fa fa-heart"></a>
                                             <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
										</div>
                                            </div>
                                            <div class="product-caption">
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font">  </span>  <strong><?php echo $val['product_name'];?></strong></a>
                                                </h3>
                                                <div class="price">
                                                    <strong class="clr-txt"><?php echo $val['product_price'];?> </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php 
                                    }
                                }?>
                                
                                </div>
                            </div>
                            <div id="product-tab-2" class="tab-pane fade">
                                <div class="product-slider-1 dots-1">

                                <?php
                                 $ct=2;
                                  
                                     $category_data=getAllproductData($ct);
                                if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-media">
                                            <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                            "style='height: 100%;'/>    <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                                <div class="prod-icons">
                                                    <a href="#" id="td_id" class="fa fa-heart"></a>
                                                    <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									  </div>
                                            </div>
                                            <div class="product-caption">
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font">  </span>  <strong><?php echo $val['product_name'];?></strong></a>
                                                </h3>
                                                <div class="price">
                                                    <strong class="clr-txt"><?php echo $val['product_price'];?> </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php 
                                    }
                                }?>
                                
                                </div>
                            </div>

                            <div id="product-tab-3" class="tab-pane fade">
                                <div class="product-slider-1 dots-1">

                                <?php
                                $ct=3;
                                     $category_data=getAllproductData($ct);
                                if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-media">
                                            <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                            " style='height: 100%;'/>    <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                                <div class="prod-icons">
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									            </div>
                                            </div>
                                            <div class="product-caption">
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font">  </span>  <strong><?php echo $val['product_name'];?></strong></a>
                                                </h3>
                                                <div class="price">
                                                    <strong class="clr-txt"><?php echo $val['product_price'];?> </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php 
                                    }
                                }?>
                                
                                </div>
                            </div>
                            <div id="product-tab-4" class="tab-pane fade">
                                <div class="product-slider-1 dots-1">

                                <?php
                                $ct=4;
                                     $category_data=getAllproductData($ct);
                                if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-media">
                                            <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;'/>     <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                                <div class="prod-icons">
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									            </div>
                                            </div>
                                            <div class="product-caption">
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font">  </span>  <strong><?php echo $val['product_name'];?></strong></a>
                                                </h3>
                                                <div class="price">
                                                    <strong class="clr-txt"><?php echo $val['product_price'];?> </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php 
                                    }
                                }
                                ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Organic All Ends -->

            <!-- Organic Farmfood Starts-->
            <section class="organic-farm sec-space-top light-bg">

                <img alt="" src="assets/img/extra/sec-img-1.png" class="left-bg-img" />
                <img alt="" src="assets/img/extra/sec-img-2.png" class="center-bg-img" />

                <div class="container rel-div">
                    <div class="title-wrap">
                        <h2 class="section-title"> <span class="light-font">we are </span> <strong>H.R. Fertilizer PVT. LTD. <img src="assets/img/icons/logo-icon.png" alt="" /> </strong> </h2>
                        <h4 class="sub-title"> <span>   એચ.આર. ફર્ટિલાઇઝર વિષે જાનવા જેવુ
</span> </h4>
                        <p>વર્ષ 2016 માં સમાવિષ્ટ એક પ્લેટફોર્મ છે, જ્યાં વેચનાર તેમના કૃષિ ઇનપુટ ઉત્પાદનોને પ્રોત્સાહન આપવા અને વેચવા માટે જાહેરાત કરી શકે છે, આમ અમે કૃષિ ઇનપુટ ઉત્પાદનો માટે વેચનાર અને ખરીદદારો વચ્ચેના પુલ તરીકે કાર્ય કરીએ છીએ. ખેતીમાં બીજ, ખાતરો, જંતુનાશકો, પ્લાન્ટ વૃદ્ધિ નિયમનકારો, સિંચાઈ અને ખેતી સાધનો અને સાધનોની જરૂર પડે તે માટે જાણીતા છે. અમે ભારતભરમાં ફ્રી હોમ ડિલિવરી સાથે ગેરંટેડ બજારની શ્રેષ્ઠ કિંમત અને 24x7 ગ્રાહક સપોર્ટ પ્રદાન કરીએ છીએ. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="assets/img/extra/feature-1.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font"></span> <strong> 
ભારતની સૌથી મોટી ઑનલાઇન કૃષિ દુકાન</strong> </h3>
                               
                               <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="assets/img/extra/feature-2.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font"> 100%</span> <strong>  ગેરંટેડ બજારની શ્રેષ્ઠ કિંમત</strong> </h3>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="assets/img/extra/feature-3.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font"> </span> <strong> ગ્રાહક કેન્દ્રિત નીતિઓ.</strong> </h3>
                                 <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="assets/img/extra/feature-4.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font">100% </span> <strong>સરળ વળતર / રિફંડ નીતિ</strong> </h3>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="rel-div feature-img">
                        <img src="assets/img/extra/feature.png" alt="" />
                    </div>
                </div>
            </section>
            <!-- / Organic Farmfood Ends -->

            <!-- Our Products Starts-->
            <!-- / Our Products Ends -->

            <!-- Naturix Goods Starts-->
            <section class="naturix-goods sec-space-bottom">
                <div class="container">
                    <div class="title-wrap">
                        <h4 class="sub-title"> BEST FROM OUR SHOP </h4>
                        <h2 class="section-title">
                         <span class="round-shape">  <span class="light-font">H.R. </span> <strong> Fertilizer <img src="assets/img/icons/logo-icon.png" alt="" /></strong> </span> </h2>
                    </div>

                    <div class="tabs-box text-center">
                        <ul class="theme-tabs small">
                        <?php
                      
                            $category_data=getAllcategoryData();
                                if (!empty($category_data)) {
                                    $cnt=1;
                                    foreach ($category_data as $val) {
                                        if($cnt<7)
                                            echo ' <li class=""><a href="#naturix-tab-'.$cnt.'" data-toggle="tab">  <strong>'.$val['name'].' </strong> </a></li>
                                            ';
                                            $cnt++;
                                        }
                                    }
                                    ?>
                            
                            
                        </ul>
                    </div>

                    <div class="tab-content organic-content row">
                        <div id="naturix-tab-1" class="tab-pane fade active in">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                                  $ct=1;
                                  $category_data=getAllproductData($ct);
                            if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;'/>       <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									   </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                                
                            </div>
                        </div>
                        <div id="naturix-tab-2" class="tab-pane fade">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                               $ct=2;
                               $category_data=getAllproductData($ct);
                           if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;'/>      <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									        </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                            
                            </div>
                        </div>
                        <div id="naturix-tab-3" class="tab-pane fade">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                              $ct=3;
                              $category_data=getAllproductData($ct);
                           if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                             "style='height: 100%;' />      <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									        </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                            
                            </div>
                        </div>
                        <div id="naturix-tab-4" class="tab-pane fade">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                            $ct=4;
                                     $category_data=getAllproductData($ct);
                                if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;'/>  <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									        </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                            
                            </div>
                        </div>
                        <div id="naturix-tab-5" class="tab-pane fade">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                                     $category_data=getAllproductData();
                                if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           "  style='height: 100%;'/>     <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									        </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                            
                            </div>
                        </div>
                        <div id="naturix-tab-6" class="tab-pane fade">
                            <div class="naturix-slider-1 dots-1">
                            <?php
                                     $category_data=getAllproductData();
                                if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                            ?>
                                   
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-media">
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                             "  style='height: 100%;'/>        <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									        </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#">   <strong><?php echo $val['product_name'];?></strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <?php
                                    }
                                     }
                                ?>
                            
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / Naturix Goods Ends -->

            <!-- Deals Starts-->
            <section class="deals sec-space light-bg">
                <img alt="" src="assets/img/extra/sec-img-3.png" class="right-bg-img" />
                <img alt="" src="assets/img/extra/sec-img-4.png" class="left-bg-img" />

                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <h4 class="sub-title">  DEAL OF THE DAY </h4>
                            <h2 class="section-title"> <span class="light-font">
ટોમેટોઝ બીજ </span> <strong>50% </strong> <span class="light-font">off</span> </h2>
                        </div>
                        <div class="col-sm-2 text-center no-padding">
                            <img alt="" src="assets/img/extra/deal.png" />
                        </div>
                        <div class="col-sm-5">
                            <p>ટોમેટોઝ લાંબા ગાળાના, ઉષ્મા-પ્રેમાળ છોડ છે જે હિમને સહન કરશે નહીં, તેથી વસંતઋતુમાં હવામાન ગરમ થાય તે પછી તેને બગીચામાં સ્થાનાંતરિત (યુવાન છોડ) તરીકે સેટ કરવું શ્રેષ્ઠ છે. તમે ટમેટા ટ્રાન્સપ્લાન્ટ ખરીદી શકો છો, પરંતુ તમારા પોતાના છોડને અંદરથી શરૂ કરવા વિશે ખાસ કરીને લાભદાયી કંઈક છે. ઉપરાંત, તમારા પોતાના ટ્રાન્સપ્લાન્ટ્સને વધારીને તમે સેંકડો ટમેટા જાતોમાંથી પસંદ કરી શકો છો જે બીજ તરીકે ઉપલબ્ધ છે પરંતુ ભાગ્યે જ ટ્રાન્સપ્લાન્ટ તરીકે વેચાય છે.</p>
                        </div>
                    </div>
                    <div class="deal-count">
                        <div class="countdown-wrapper">
                            <div id="defaultCountdown" class="countdown"></div>
                        </div>
                    </div>
                    <div class="deal-slider dots-2">
                    <?php
                                    $category_data=getAllproduct_Data();
                                if (!empty($category_data)) {
                                    $cnt_te=0;
                                    foreach ($category_data as $val) {
                                        if($cnt_te<4){
                                            $cnt_te++;
                            ?>
                        
                        <div class="item">
                            <div class="deal-item">
                                <div class="deal-icons">
                                    <a href="#" class="fa fa-heart"></a>
                                    <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                </div>
                                <div class="deal-content">
                                    <div class="text-right">
                                        <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    </div>
                                    <div class="deal-text">
                                        <h2 class="fsz-30 pb-15"> <a href="#">  <strong><?php echo $val['product_name'];?> </strong> </a> </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                        <div class="price pt-15">
                                            <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> 
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                                        <?php
                                   }
                                    }
                                }
                               ?>

                    </div>
                </div>
            </section>
            <!-- / Deals Ends -->

            <!-- Random Products Starts-->
            <section class=" sec-space-bottom">
                <div class="pattern">
                    <img alt="" src="assets/img/icons/white-pattern.png">
                </div>
                <div class="section-icon">
                    <img alt="" src="assets/img/icons/icon-1.png">
                    <div class="pt-15 icon">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <span class="light-font"> a taste of </span> <strong>real food</strong>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                </div>
                     <!-- Banner -->
                   
                </div>
            </section>
            <!-- Random Products Ends -->

            <!-- Subscribe Newsletter Starts-->
            <!-- FOOTER -->
            <?php include 'footer.php';?>
