<?php include 'header.php';?>
            <!-- / Main Header Ends -->   

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb">                        
                        <h2 class="section-title"> <span class="light-font">my </span> <strong class="clr-txt">account </strong> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> Change Your Password  </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->

            <!-- My Account Starts-->
            <section class="account-page ptb-50">
                <div class="container"> 
                    <div class="row">  
                        <aside class="col-md-9 col-sm-8 ptb-15">
                            <div class="account-wrap">
                                <form class="">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label> * Password </label>
                                            <input type="password" class="form-control" required="">                                               
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label> * Password Confirm </label>
                                            <input type="password" class="form-control" required="">                                               
                                        </div>                                         
                                        <div class="pt-15 col-sm-12">                                               
                                            <button type="submit" class="theme-btn btn-black"> <b> Update </b> </button>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>                        
                        
                        <!-- Sidebar Starts --> 
                        <aside class="col-md-3 col-sm-4">
                            <div class="widget-wrap">
                                <h2 class="widget-title"> <span class="light-font">My</span> <strong>Account</strong> </h2>
                                <div class="divider-full-1"></div>
                                <ul class="cate-widget">
                                   <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i>  <a href="account-information.php"> Account Information </a></li>
                                    <li class="active"> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="my-account.php"> My Account</a></li>                                        
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="cng-pw.php"> Change Password</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="order-history.php"> Order History</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="review-rating.php"> Reviews and Ratings</a></li>
                                </ul>
                            </div>
                        </aside>   
                        <!-- Sidebar Ends --> 

                    </div>
                </div>
            </section>
            <!-- / My Account Ends -->        

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
          <?php include 'footer.php';?>
