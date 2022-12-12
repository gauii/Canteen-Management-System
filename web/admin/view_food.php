<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1em;
		color: #26947e;


	}
	tr:hover{
		background-color: black;
		color: white;
	

	}
	th{
		color: black;
		font-size: 1em;
	}
	.del{
		color: black;
		text-decoration: none;
	}
	.del:hover{
		color: red;
		text-decoration: none;
		text-shadow: 1px 2px 1px #FFFFFF;
	}

    table tr{
        width:10px;
    }


</style>
<div class="content">
	<table border=1 width="30%" cellspacing="0" cellpadding="0" style="width:0% box-shadow: 4px 3px 9px 1px; font-family: times new roman; background-color:">

		<tr>
			<th>CATAGORY</th>
			<th>TITLE</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>REMOVE</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from items");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['cat']; ?></td>
					<td><?php echo $r['title']; ?></td>
					<td><?php echo $r['description']; ?></td>
					<td><?php echo $r['price']; ?></td>
					<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
					<td><a href="delfood.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>


	</table>	


</div>
<!-- footer Section Starts Here -->
<section class="footer" >
        <div class="container text-center">
            <br/>
            <p> Developed by Aryan Kotru and Gauravi Kamat</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->