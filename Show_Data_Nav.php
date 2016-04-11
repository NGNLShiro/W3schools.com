<?php
	for ($a=2;$a<8;$a++)
	{
		$sql="SELECT * FROM `w3schools.com`.`navigation` WHERE ID='$a'";
		$result = $conn -> query($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc())
			{
				?>
				<a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a>
				<?php
			}
		}
	}
?>