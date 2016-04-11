<?php
    for($i=1; $i<5; $i++)
    {
        $sql = "SELECT * FROM `w3schools.com`.`left_menu` WHERE ID = '$i'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
                ?>
                <li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Menu_Name"]; ?></a></li>
                <?php
			}
        }
    }
?>