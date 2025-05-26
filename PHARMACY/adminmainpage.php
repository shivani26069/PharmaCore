<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>
Admin Dashboard
</title>
</head>
<body>
	//Add it to all pages
	<div class="topnav">
    	<span class="menu-icon" onclick="toggleSidenav()">&#9776;</span>
    	<span class="brand">PharmaCore</span>
		 
    
    	<a href="logout.php" class="logout">Logout</a>
  	</div>


	<div class="sidenav" id="sidenav" >
	
			<a href="adminmainpage.php">Dashboard</a>
			<button class="dropdown-btn">Inventory
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="inventory-add.php">Add New Medicine</a>
				<a href="inventory-view.php">Manage Inventory</a>
			</div>
			<button class="dropdown-btn">Suppliers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="supplier-add.php">Add New Supplier</a>
				<a href="supplier-view.php">Manage Suppliers</a>
			</div>
			<button class="dropdown-btn">Stock Purchase
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="purchase-add.php">Add New Purchase</a>
				<a href="purchase-view.php">Manage Purchases</a>
			</div>
			<button class="dropdown-btn">Employees
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="employee-add.php">Add New Employee</a>
				<a href="employee-view.php">Manage Employees</a>
			</div>
			<button class="dropdown-btn">Customers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="customer-add.php">Add New Customer</a>
				<a href="customer-view.php">Manage Customers</a>
			</div>
			<a href="sales-view.php">View Sales Invoice Details</a>
			<a href="salesitems-view.php">View Sold Products Details</a>
			<a href="pos1.php">Add New Sale</a>
			<button class="dropdown-btn">Reports
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="stockreport.php">Medicines - Low Stock</a>
				<a href="expiryreport.php">Medicines - Soon to Expire</a>
				<a href="salesreport.php">Transactions Reports</a>
			</div>
	</div>

	
	
	<div class="main-content">
    <div class="dashboard-header">
  <video autoplay muted loop playsinline class="dashboard-video">
    <source src="vid.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="dashboard-overlay-text">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Manage inventory, employees, sales, reports, and more in one place.</p>
  </div>
</div>


    <div class="dashboard-icons">
	
	<a href="pos1.php" title="Add New Sale">
	<img src="carticon1.png"  alt="Add New Sale">
	</a>
	
	<a href="inventory-view.php" title="View Inventory">
	<img src="inventory.png"  alt="Inventory">
	</a>
	
	<a href="employee-view.php" title="View Employees">
	<img src="emp.png"  alt="Employees List">
	</a>
	
	<a href="salesreport.php" title="View Transactions">
	<img src="moneyicon.png"  alt="Transactions List">
	</a>
	
	<a href="stockreport.php" title="Low Stock Alert">
	<img src="alert.png"  alt="Low Stock Report">
	</a>
	 </div>
  </div>
	

	
</body>

<script>
	function toggleSidenav() {
  const sidenav = document.querySelector('.sidenav');
  const mainContent = document.querySelector('.main-content');
  const dashboardHeader = document.querySelector('.dashboard-header');
   const dashboardIcons = document.querySelector('.dashboard-icons');

  sidenav.style.display = (sidenav.style.display === 'block') ? 'none' : 'block';

  if (sidenav.style.display === 'block') {
    mainContent.style.marginLeft = '110px';
    dashboardHeader.style.marginLeft = '110px';
	dashboardIcons.style.marginLeft = '220px';
  } else {
    mainContent.style.marginLeft = '0';
    dashboardHeader.style.marginLeft = '0';
	dashboardIcons.style.marginLeft = '0';
  }
}


	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}
</script>

</html>