<form method="post" class="catForm">
	<input type="text" name="catmain" placeholder="" required>
	<input type="submit" name="catmit">
</form>

<form method="post" class="catSubForm">
	<input type="text" name="subcat" placeholder="" required>
	<select name="maincat">
		<option value="0">select</option>
		<?php

			$select = "SELECT * FROM categories";
			$sres = mysqli_query($conn, $select);

			if (mysqli_num_rows($sres) > 0) {
				while ($row = mysqli_fetch_assoc($sres)) {
					?>
						<option value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
					<?php
				}
			}

		?>
	</select>
	<input type="submit" name="subcatmit">
</form>

<?php

	if (isset($_POST['catmit'])) {
		
		$name = $_POST['catmain'];

		$select = "SELECT * FROM categories WHERE name = '$name'";
		$sres = mysqli_query($conn, $select);

		if (mysqli_num_rows($sres) > 0) {
			echo "<script> alert('found something'); </script>";
		}else{
			$insert = "INSERT INTO categories (name) VALUES ('$name')";
			$ires = mysqli_query($conn, $insert);

			if (!$ires) {
				echo "<script> alert('not submitted'); </script>";
			}else{
				echo "<script> alert('submitted'); </script>";
			}

		}

	}

	if (isset($_POST['subcatmit'])) {
		
		$name = $_POST['subcat'];
		$main = $_POST['maincat'];

		if ($main != '0') {
			$select = "SELECT * FROM sub_categories WHERE name = '$name' AND main_category = '$main' ";
			$sres = mysqli_query($conn, $select);
			if (mysqli_num_rows($sres) == 0) {
				
				$insert = "INSERT INTO sub_categories (name, main_category) VALUES ('$name', '$main')";
				$ires = mysqli_query($conn, $insert);
				if (!$ires) {
					echo "<script> alert('not submitted'); </script>";
				}else{
					echo "<script> alert('submitted'); </script>";
				}

			}else{
				echo "<script> alert('something found'); </script>";
			}
		}else{
			echo "<script> alert('select main category'); </script>";
		}

	}

?>