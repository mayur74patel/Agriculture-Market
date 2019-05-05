
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user-default.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    }
                    ?>   
                </p>               
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>            
            <li class="active">
                <a href="dashboard.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>                       
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_admin.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="admin_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Driver</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_driver.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="driver_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Feedback</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="feedback_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                </ul>
            </li>
			
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Rental Vehicle</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_rental_vehicle.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="rental_vehicle_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Category Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_category_product.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="category_product_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_product.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="product_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Rental Request</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
					
                        <a href="request_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Order Request</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
					
                        <a href="order_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Rental Vehicle Dealer</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="add_rental_vehicle_dealer.php"><i class="fa fa-circle-o"></i> Add</a>
                    </li>
                    <li class="active">
                        <a href="rental_vehicle_dealer_list.php"><i class="fa fa-circle-o"></i> List</a>
                    </li>                    
                </ul>
            </li>
			
            
                   </ul>
    </section>
    <!-- /.sidebar -->
</aside>