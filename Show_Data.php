<?php
	
    for($i=1; $i<25; $i++)
    {
        $sql = "SELECT * FROM `w3schools.com`.`left_menu` WHERE ID = '$i'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
                switch ($x)
				{
					case 1:
						if($row['Attributes'] == 1)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
					case 2:
						if($row['Attributes'] == 2)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
					case 3:
						if($row['Attributes'] == 3)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
					case 4:
						if($row['Attributes'] == 4)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
					case 5:
						if($row['Attributes'] == 5)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
					case 6:
						if($row['Attributes'] == 6)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
							<?php
						}
						break;
				}
			}
        }
    }
?>