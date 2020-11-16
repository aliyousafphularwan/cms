<div class="dashboard-main">
	
	<div class="dashboard-topbar">
		
		<h2> <a href="index.php"><?php echo $_SESSION["admin"];?>'s CMS</a> </h2>

		<form method="post">
			<input type="text" name="search" id="search" placeholder="search somthing...">
			<input type="submit" name="srchmit" value="&quest;">
		</form>

		<ul>
			<li><a href="#"> <i>&COPY;</i> </a></li>
			<li><a href="#"> <i>&REG;</i> </a></li>
			<li><a href="#"> <i>&REG;</i> </a></li>
		</ul>

	</div>

	<div class="dashboard-body">
		
		<div class="dashboard-links">
			<ul>
				<li><a href="index.php?page=content"> <i> &raquo;</i> Content </a></li>
				<li><a href="index.php?page=categories"> <i> &raquo;</i> Categories </a></li>
				<li><a href="index.php?page=products"> <i> &raquo;</i> Products </a></li>
				<li><a href="index.php?page=featured"> <i> &raquo;</i> Featured </a></li>
				<li><a href="index.php?page=orders"> <i> &raquo;</i> Orders </a></li>
				<li><a href="index.php?page=messages"> <i> &raquo;</i> Messages </a></li>
				<li><a href="index.php?page=logout"> <i> &raquo;</i> Logout </a></li>
			</ul>
		</div>

		<div class="dashboard-loader">
			
			<?php
				
				if (!isset($_GET['page'])) {
					include 'incs/home.php';
				}else{
					$page = $_GET['page'];
					include "incs/$page.php";
				}

			?>

		</div>

	</div>

</div>