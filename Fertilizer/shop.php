<?php include 'header.php';
include 'commonincludefiles.php';
global $conn;

?>
            
            <!-- / Main Header Ends -->

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb white-clr">                        
                        <h2 class="section-title"> <strong class="clr-txt">H.R. Fertilizer</strong> <span class="light-font"> Shop </span> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> SHOP  </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->


            <!-- Shop Starts-->
            <section class="shop-wrap sec-space-bottom">
                <div class="pattern"> 
                    <img alt="" src="assets/img/icons/white-pattern.png">
                </div>

                <div class="container rel-div">
                    <div class="row sort-bar">
                        <div class="icon"> <img alt="" src="assets/img/logo/logo-2.png" /> </div>
                        <div class="col-lg-6">
                            <div class="sort-dropdown left">
                                <span>CATEGORY</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                <form id="myForm" action="#" method="post">
    <select class="selectpicker input-price"   id="select_category"
                                       name="category"     data-toggle="tooltip">
                                        <?php
                                        $temp = array();
                                        $select_query = "SELECT *FROM category_product ORDER BY id DESC";
                                        $select_res = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($select_res) > 0) {
                                            $i = 0;
                                            while ($row = mysqli_fetch_array($select_res)) {
                                          
                                                              echo "<option onclick='myFunction_jd123()' value=". $row['id'] .">". $row['category_name'] ."</option>";
                                        
                                            }
                                        }
                                        ?>
                                    </select>
                                    </form>
                                    <script>
function myFunction_jd123() {
    alert("test is here");
  document.getElementById("myForm").submit();
}
</script>
                              
                                </div>
                            </div>
                            
                        </div>
                        
                    </div> 

                    <div class="divider-full-1"></div>

                    <div class="result-bar block-inline">
                        <h4 class="result-txt">search result <b> 125 </b> </h4>
                        <ul class="view-tabs">
                            <li class="active">
                                <a href="#grid-view" data-toggle="tab">                                                    
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="#list-view" data-toggle="tab">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content shop-content">
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row"> 
                                
                            <?php
                            if(isset($_POST['category']) && $_POST['category'] != ""){
                                echo "test is here";exit;
                                $category_data=getAllproductData($_POST['category']);
                            }else{
                                     $category_data=getAllproduct_Data();
                             } if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                                <div class="col-lg-3 col-md-4 col-sm-6"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                        <img class="prod-img" alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " style='height: 100%;'/>    <img class="shape" alt="" src="assets/img/icons/shap-small.png" />  
                                            <div class="prod-icons"> 
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

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a> 
                                    <a href="#" class="fa fa-long-arrow-right right"></a> 
                                </div>
                            </div>                            

                            <div class="pagination-wrap">
                                <ul class="pagintn">                                  
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>                                    
                                </ul>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row"> 
                            <?php
                                     $category_data=getAllproduct_Data();
                                if (!empty($category_data)) {
                                    $cnt=0;
                                    foreach ($category_data as $val) {
                            ?>
                          

                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <?php       echo "<a class='fa fa-shopping-basket' href='add_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
									    </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font"></span> <strong><?php echo $val['product_name'];?> </strong> </a> </h2>
                                                <p><?php echo $val['product_details'];?></p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt"><?php echo $val['product_price'];?> </strong> 
                                                </div>
                                            </div>
                                            <div class="img">  <img  alt="" src="
                                           <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           " />   </div>
                                        </div>
                                    </div>
                                </div>


                                <?php 
                                    }
                                }?>

                               
                            </div>

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a> 
                                    <a href="#" class="fa fa-long-arrow-right right"></a> 
                                </div>
                            </div>                            

                            <div class="pagination-wrap">
                                <ul class="pagintn">                                  
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Shop Ends -->      

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
           <?php include 'footer.php';?>
            
