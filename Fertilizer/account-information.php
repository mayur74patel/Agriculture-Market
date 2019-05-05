
<?php

include 'header.php';
include 'commonincludefiles.php';
global $conn;
  if (isset($_SESSION['name_1'])){
    echo("<meta http-equiv='refresh' content='1'>");
    echo "<script>window.location='login.php'</script>";
} 
if (isset($_POST['signup']) && $_POST['signup']='signup') {
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $checkcategory=checkusers($fname,$password,$email);
    
    if ($checkcategory=="user_is_same") {
        $check_msg= "Some Error in Textfield,please enter different username.";
        echo "<script type='text/javascript'>alert('$check_msg');</script>";
    }
    else if($checkcategory=="password_is_same")
    {
        $check_msg= "Some Error in Textfield,please enter different password.";
        echo "<script type='text/javascript'>alert('$check_msg');</script>";
    }
    else if($checkcategory=="email_is_same")
    {
        $check_msg= "Some Error in Textfield,please enter different Email. ";
        echo "<script type='text/javascript'>alert('$check_msg');</script>";
    }
     else {
        $addcategory = addusers($name,$email,$password,$city,$phone);

        if ($addcategory > 0 && $addcategory != '') {
            $check_msg= "Successfully added";
            echo "<script type='text/javascript'>alert('$check_msg');</script>";
        } else {
            $check_msg= "Please re-enter the username and password";
            echo "<script type='text/javascript'>alert('$check_msg');</script>";
        }
    }
    
}


?><!-- / Main Header Ends -->

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg">                
                <div class="theme-container container ">                       
                    <div class="site-breadcumb">                        
                        <h2 class="section-title"> <span class="light-font">my </span> <strong class="clr-txt">account </strong> </h2>
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> Change Your Details  </li>                             
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
                            <div class="account-wrap cart-box">
                            <form class="gray-control" method="post" >
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label> * First Name </label>
                                <input type="text" name="fname" class="form-control" required="">                                               
                            </div>
                              <div class="form-group col-sm-6">
                                <label> * Email </label>
                                <input type="text" name="email" class="form-control" required="">
                            </div>                                        
                             <div class="form-group col-sm-6">
                                <label> Phone Number </label>
                                <input type="text" name="phone" class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> * City Name </label>
                                <input type="text" name="city" class="form-control" required="">
                            </div>                                        
                             <div class="form-group col-sm-6">
                                <label> Password </label>
                                <input type="text" name="password" class="form-control" required="">
                            </div>
                            <div class="pt-15 col-sm-12">
                                <button type="submit" name="signup" value="signup" class="theme-btn btn-black"> <b> Update </b> </button>                                            
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
                                      <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="cng-pw.php"> Change Password</a></li>
                                   </ul>
                            </div>
                        </aside>   
                    </div>
                </div>
            </section>
            <!-- / My Account Ends -->        

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <?php include 'footer.php';?>
