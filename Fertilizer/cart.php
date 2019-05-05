<?php include 'header.php';

include 'commonincludefiles.php';
global $conn;

if (!isset($_SESSION['name_1'])){
    echo("<meta http-equiv='refresh' content='1'>");
    echo "<script>window.location='login.php'</script>";
} 
?>
            <!-- / Main Header Ends -->   

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb white-clr">                        
                        <h2 class="section-title"> <strong class="clr-txt">H.R.Fertilizer </strong> <span class="light-font">Shop </span> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> Shopping Cart  </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->


            <!-- Cart Starts-->
            <section class="shop-wrap sec-space">
                <div class="container"> 
                    <!-- Shopping Cart Starts -->
                    <div class="cart-table">
                        <form class="cart-form">
                            <table class="product-table">
                                <thead class="">
                                    <tr>                                                                       
                                        <th>product detail</th>  
                                        <th></th> 
                                        <th>Product price</th> 
                                        <th>quantity</th>
                                        <th></th>                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                            $category_data=getAllcartData();
                                if (!empty($category_data)) {
                                    foreach ($category_data as $val) {
                          ?>
                                    <tr>
                                        <td class="image">
                                            <div class="white-bg">
                                                <a class="media-link" href="#">
                                                <img  alt="" style="height: 170px;width: 170px;" src="
                                          <?php echo (isset($val['product_image']) && $val['product_image'] != '') ? '../images/'. $val['product_image'] : '../images/default.gif';?>
                                           "  /> 
                                                </a> 
                                            </div>
                                        </td>
                                        <td class="description">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>                                               
                                            </div>
                                            <h6 class="fsz-12 gray-color"> Overall Rating : 5/5 </h6>
                                            <div class="divider-2"></div>
                                            <h3 class="product-title no-margin"> <a href="#">  <strong><?php echo $val['product_name'];?> </strong> </a> </h3>
                                            <h6>DRY FRUITS</h6>                                                                                                                             
                                        </td>    
                                        <td> 
                                            <div class="price fontbold-2"> 
                                                <strong class="fsz-20"><?php echo $val['product_price'];?> </strong> 
                                                (Per Kilo)</div>
                                        </td> 
                                        <td>
                                            <div class="prod-btns fontbold-2">
                                            <div class="sort-dropdown">
                                                    <div class="search-selectpicker selectpicker-wrapper">
                                                        <select onchange="changeLanguage(this.value,<?php echo $val['iCategoryID'];?>)" class="selectpicker input-price"  data-width="100%"
                                                                data-toggle="tooltip">
                                                            <option>Kilo</option>
                                                            <option>2 Kilo</option>
                                                            <option>3 Kilo</option>
                                                            <option>4 Kilo</option>
                                                            <option>5 Kilo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                           </div>
                                         </td>
                                        <td> 
                                        <?php       echo "<a class='remove fa fa-close clr-txt' href='delete_cart.php?catid_1=".$val['iCategoryID']."'  ></a>"; ?>
								
                                        </td>                                       
                                    </tr>      
                                        <?php
                                    }
                                }
                                        ?>


                                </tbody>                               
                            </table>
                            <form action="#" name="form_id" id="form_id" method="post">
<input type="hidden" id="A1" name="quan" value="quan">
<input type="hidden" id="A2" name="id" value="id">
                                         </form>
                            <div class="continue-shopping">
                                
                                <div class="right"> <strong class="fsz-20 fontbold-2">Subtotal : <span class="clr-txt"> $150.00 </span> </strong> </div>
                            </div>

                            <div class="shp-btn col-sm-12 text-center">
                                <a role="button" class="theme-btn-2 btn" href="shop.php"> <b> CONTINUE SHOPPING </b> </a>
                                <a role="button" class="theme-btn-3 btn" href="checkout.php"> <b> CHECKOUT NOW </b> </a>
                            </div>                                   


                        </form>
                    </div>                    
                    <!-- / Shopping Cart Ends -->
                </div>
            </section>
            <!-- / Cart Ends -->      

            <!-- / CONTENT AREA -->
<script>
function changeLanguage(language,id) {
    document.form_id.submit();
    document.getElementById("#form_id").submit();
 }
</script>
            <!-- FOOTER -->
         <?php include 'footer.php';?>
