<?php

include '../connect.php';

session_start();

if (isset($_SESSION['admin'])) {
   $admin = $_SESSION['admin'];
}

?>
<header class="headermenu position-fixed w-100" style="top: 0; z-index: 999; background: #ae3956;">
    <div class="d-flex flex-nowrap  align-items-center column-gap-4">
        <div class="d-flex" style="min-width: 250px !important; cursor: pointer;">
            <img src="../upload/sidebarlogo.png" width="225" class="mx-auto">
        </div>
        <div id="menuIcon" >
       		<i class="fa-solid fa-bars fs-4 text-white" role="button"></i>
        </div>
        <div class="d-flex w-100">
            <h4 class="title_logo text-white m-auto fw-bold">BAYAN NG STA. CRUZ, LALAWIGAN NG MARINDUQUE</h4>
        </div>
        <div class="profileImg d-flex ms-auto me-3 my-auto">
            <span class="profileBtn ms-auto" data-bs-toggle="dropdown" role="button">
                <i class="fa-solid fa-gear rounded-circle fs-5 border border-2 p-1 text-white"></i>
            </span>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" role="button">Hello, <?php echo $admin?> <b></b></a></li>
                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</header>

<ul class="menu side-bar shadow navbar-nav d-flex flex-column row-gap-2 pt-3 px-2">
    <li class="nav-item">
        <a href="home.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-house m-auto"></i></span>
        	<span>Home</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="Residence-Information.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-user-group  m-auto"></i></span>
        	<span>Residence information</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="Assistance-Category.php" class="nav-link px-2">
            <span class="icon-span"><i class="fa-solid fa-boxes-stacked m-auto"></i></span>
            <span>Assistance Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="Barangay-Mapping.php" class="nav-link px-2">
            <span class="icon-span"><i class="fa-solid fa-map-location-dot m-auto"></i></span>
            <span>Barangay Mapping</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="Add-Resident.php" class="nav-link px-2">
	        <span class="icon-span"><i class="fa-solid fa-user-large m-auto"></i></span>
	        <span>Add Resident</span>
    	</a>
    </li>
    <li class="nav-item">
        <a href="Edit-Data-Residence.php?edit=info" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-pen m-auto"></i></span>
        	<span>Edit/Data Residence</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="Documents-and-Request.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-file m-auto"></i></span>
        	<span>Documents and Request</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="organizations.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-sitemap m-auto"></i></span>
        	<span>Organizations</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="Logs.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-right-to-bracket m-auto"></i></span>
        	<span>Logs</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="Data-Analytics.php" class="nav-link px-2">
        	<span class="icon-span"><i class="fa-solid fa-magnifying-glass-chart m-auto"></i></span>
        	<span>Data Analytics</span>
        </a>
    </li>

</ul>
