<div class="product-main">
	
	<div class="product-form">
		
		<form method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td colspan="2"> <input type="text" name="prdname" placeholder="product name"> </td>
				</tr>
				<tr>
					<td>
						<select name="prdcatmain" id="maincat" onchange="reload()">
							<option value="0">select</option>
							<?php 
								$select = "SELECT * FROM categories";
								$sres = mysqli_query($conn, $select);
								if (mysqli_num_rows($sres) > 0) {
									while ($row = mysqli_fetch_assoc($sres)) {
										?>
											<option value="<?php echo $row['id'];?>">
												<?php echo $row['name'];?>
											</option>
										<?php
									}
								}
							?>
						</select>
					</td>
					<td>
						<select name="prdsubcat">
							<option value="0">select</option>
							<?php
								
								$select = "SELECT * FROM sub_categories";
								$sres = mysqli_query($conn, $select);
								if (mysqli_num_rows($sres) > 0) {
									while ($row = mysqli_fetch_assoc($sres)) {
										?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
										<?php
									}
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td> <input type="text" name="prdcatno" placeholder="cataloge #"> </td>
					<td> <input type="text" name="prdsize" placeholder="size"> </td>
				</tr>
					<td> <input type="file" name="prdimg"> </td>
					<td>
						<input type="submit" name="btnprdmit" value="add" style="background: orange;">
					</td>
				</tr>
			</table>
		</form>

	</div>

</div>

	<?php 

		if (isset($_POST['btnprdmit'])) {

			$upload = 'uploads/products/';

			$name = $_POST['prdname'];
			$mc = $_POST['prdcatmain'];
			$sc = $_POST['prdsubcat'];
			$file_name = $_FILES['prdimg']['name'];
			$file_size = $_FILES['prdimg']['size'];
			$file_temp = $_FILES['prdimg']['tmp_name'];
			$file_type = $_FILES['prdimg']['type'];
			
			
			if (move_uploaded_file($file_temp,$upload.$file_name)) {
				echo "done";
			}else{
				echo "error";
			}

			echo "name is ".$name.", main category is ".$mc.", sub category is ".$sc.".";

		}

	?>

<script type="text/javascript">
	
	// function reload(){

	// 	var val = document.getElementById('maincat').value;
	// 	// console.log(val);
	// 	self.location='index.php?page=products&cid=' + val ;
	// }

</script>