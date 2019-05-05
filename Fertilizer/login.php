
<?php 
include 'header.php';
include 'commonincludefiles.php';
global $conn;
if (isset($_POST['login']) && $_POST['login']='login') {
    $name=$_POST['email'];
    $password=$_POST['password'];
    $checkcategory=userlogin($name,$password);
    
    if ($checkcategory) {
        $log_msg= "SuccessFull Login";
        echo "<script type='text/javascript'>alert('$log_msg');
        window.location = 'login.php';</script>";
       // $_SESSION['name'] = $_POST['username'];
    } else {
        
        
        $log_msg= "Please Enter Valid Username and Password ";
        echo "<script type='text/javascript'>alert('$log_msg');</script>";
    }
    
}
if (isset($_POST['signout']) && $_POST['signout']='signout') {
    session_destroy();
    session_unset();     // unset $_SESSION variable for the run-time 
    echo("<meta http-equiv='refresh' content='1'>");
    echo "<script>window.location='index.php'</script>";
} 
?>

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
                    <form class="gray-control" method="post">
                  <?php  if (!isset($_SESSION['name_1'])) {
                                      ?>   
                        <div class="row">
                              <div class="form-group col-sm-6">
                                <label> * Email </label>
                                <input type="text" name="email" class="form-control" required="">
                            </div>                                        
                             <div class="form-group col-sm-6">
                                <label> Phone Number </label>
                                <input type="text" name="phone" class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Password </label>
                                <input type="text" name="password" class="form-control" required="">
                            </div>
                            <div class="pt-15 col-sm-12">
                                <button type="submit" name="login" value="login" class="theme-btn btn-black"> <b> Update </b> </button>                                            
                            </div>
                        </div>

                  <?php }
                  else{
          echo'          <div class="pt-15 col-sm-12">
                    <button type="submit" name="signout" value="signout" class="theme-btn btn-black"> <b> Logout </b> </button>                                            
                </div>';
          
                  }?>
                    </form>
                </div>
            </aside>                        
            
            <!-- Sidebar Starts --> 
            <aside class="col-md-3 col-sm-4">
                <div class="widget-wrap">
                    <h2 class="widget-title"> <span class="light-font">My</span> <strong>Account</strong> </h2>
                    <div class="divider-full-1"></div>
                    <ul class="cate-widget">
                       <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i>  <a href="account-information.php"> Sign Up</a></li>
                         <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="cng-pw.php"> Change Password</a></li>
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
