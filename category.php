<h2 style=" color: white;padding-right: 15px;padding-bottom: 8px;margin-top: 20px;background-color: darkslategray;">Categories</h2>
<ul style="padding-top: 5px; padding-right: 5px;padding-bottom: 5px;padding-left: 5px;background-color:antiquewhite;">
	<?php
		$query="select * from category ";
		$res=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($res))
		{
			echo '<li><a href="cat_result.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
		}
				
		mysqli_close($conn);
		?>
</ul> 