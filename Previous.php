<?php
		$a = $i - 1;
		$sql = "SELECT * FROM `w3schools.com`.`left_menu` WHERE `ID` = '$a'";
		$result = $conn -> query ($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc ())
			{
				?>
				<a class ="pre" href="<?php echo $row["Link"]; ?>">«Previous</a>
				<?php
			}
		}

?>
