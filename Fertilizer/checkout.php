<?php 
include 'header.php';
include 'commonincludefiles.php';
global $conn;

if (!isset($_SESSION['name_1'])){
    echo("<meta http-equiv='refresh' content='1'>");
    echo "<script>window.location='login.php'</script>";
} 
if(isset($_POST['confirm'])){
    
    $msg=confirmorder($_SESSION['name_id']);
}
?>
            <!-- / Main Header Ends -->

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb white-clr">                        
                        <h2 class="section-title"> <strong class="clr-txt">H.R. Tukadia </strong> <span class="light-font">Shop </span> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> Checkout  </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->


            <!-- Checkout Starts-->
            <section class="checkout-wrap sec-space">
                <div class="container">                     
                    <div class="panel-group chk-panel" id="accordion">
                        <div class="panel">
                            <div class="chk-heading">                              
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="light-font">01. checkout </span> <strong>method </strong> 
                                </a>                              
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="chk-body pt-15 block-inline">
                                    <div class="col-md-6">
                                        <label>Toal is <?php $total=gettotal();echo $total;?></label>
                                          
                                    </div>

                                    <div class="shp-btn col-sm-12 text-center">
                            <form action="#" method="POST">
                                   <button class="theme-btn-3 btn" name="confirm"> <b> Confirm NOW </b> </button>
                          </form>
                            </div>                                       
                                </div>
                            </div>
                        </div>
                          
                    </div>                    
                </div>
            </section>
            <!-- / Checkout Ends -->      

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <?php include 'footer.php';?>
