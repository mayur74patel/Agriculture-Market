<?php include 'header.php';
?>
            
            <!-- / Main Header Ends -->   

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb">                        
                        <h2 class="section-title"> <span class="light-font">my </span> <strong class="clr-txt">account </strong> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> my account  </li>                             
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
                            <div class="panel-group chk-panel" id="accordion">
                                <div class="panel"> 
                                    <div class="accordion-heading">                              
                                        <a class="title-2" data-toggle="collapse" data-parent="#accordion" href="#accordion-1" aria-expanded="true"> <span class="light-font">01. My </span> <strong> Account </strong> </a>                              
                                    </div>
                                    <div id="accordion-1" class="panel-collapse collapse in">
                                        <div class="account-body">
                                            <ul class="acnt-list">
                                                <li>  
                                                    <i class="fa fa-arrow-circle-o-right clr-txt"></i> 
                                                    <a href="account-information.php"> Edit your account information</a>
                                                </li>
                                                <li> 
                                                     <i class="fa fa-arrow-circle-o-right clr-txt"></i>  
                                                    <a href="cng-pw.php"> Change your password</a>
                                                </li>
                                                <li>          
                                                     <i class="fa fa-arrow-circle-o-right clr-txt"></i> 
                                                    <a href="address-book.php"> Modify your address book entries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel"> 
                                    <div class="accordion-heading">                              
                                        <a class="title-2" data-toggle="collapse" data-parent="#accordion" href="#accordion-2"> <span class="light-font">02. Order and </span> <strong>  Review </strong>  </a>                              
                                    </div>
                                    <div id="accordion-2" class="panel-collapse collapse">
                                        <div class="account-body">
                                            <ul class="acnt-list">
                                                <li>
                                                     <i class="fa fa-arrow-circle-o-right clr-txt"></i> 
                                                    <a href="order-history.php"> View your order history</a>
                                                </li>
                                                <li>
                                                     <i class="fa fa-arrow-circle-o-right clr-txt"></i>  
                                                    <a href="review-rating.php"> Your reviews and ratings</a>
                                                </li>
                                                <li>
                                                     <i class="fa fa-arrow-circle-o-right clr-txt"></i> 
                                                    <a href="return.php"> View your retun requests</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel"> 
                                    <div class="accordion-heading">                              
                                        <a class="title-2" data-toggle="collapse" data-parent="#accordion" href="#accordion-3">  <span class="light-font">02. </span> <strong> Newsletter </strong> </a>                              
                                    </div>
                                    <div id="accordion-3" class="panel-collapse collapse">
                                        <div class="account-body">
                                            <ul class="acnt-list">
                                                <li>
                                                    <a href="newsletter.php"> Subscribe / unsubscribe to newsletter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="address-book.php"> Address Books</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="order-history.php"> Order History</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="review-rating.php"> Reviews and Ratings</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="return.php"> Returns Requests</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="newsletter.php"> Newsletter</a></li>
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="myaccount-leftsidebar.php"> Left Sidebar</a></li>
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
            
