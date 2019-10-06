<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>

				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to
							<?php
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>

								<br>

								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>

							</div>
							<table border="0" align="center">
<tr>
	<td>
<marquee direction='left' scrollamount='5' onMouseOver="this.scrollAmount='0'"  onMouseOut="this.scrollAmount='5'" width='250'>
<img src="a1.jpg" width="200" height="250">
<img src="a2.jpg" width="200" height="250">
<img src="a3.jpg" width="200" height="250">
<img src="a4.png" width="200" height="250">
<img src="a5.jpg" width="200" height="250">
<img src="a6.jpg" width="200" height="250">
</marquee></td>
    <td><marquee direction='up' scrollamount='5' onMouseOver="this.scrollAmount='0'"  onMouseOut="this.scrollAmount='5'" width='250'>
<img src="c1.jpg" width="200" height="250"><br />
<img src="c2.jpg" width="200" height="250"><br />
<img src="c3.jpg" width="200" height="250"><br />
<img src="c4.jpeg" width="200" height="250"><br />
<img src="c5.jpg" width="200" height="250"><br />
<img src="c6.jpg" width="200" height="250"><br />
</marquee>
</td>
</tr>
<tr>
	<td><marquee direction='down' scrollamount='5' onMouseOver="this.scrollAmount='0'"  onMouseOut="this.scrollAmount='5'" width='250'>
<img src="h1.jpeg" width="200" height="250">
<img src="h2.jpg" width="200" height="250">
<img src="h3.jpg" width="200" height="250">
<img src="h4.jpg" width="200" height="250">
<img src="h5.jpg" width="200" height="250">
<img src="h6.jpg" width="200" height="250">
</marquee>
</td>
    <td><marquee direction='right' scrollamount='5' onMouseOver="this.scrollAmount='0'"  onMouseOut="this.scrollAmount='5'" width='250'>
<img src="n1.jpg" width="200" height="250">
<img src="n2.jpg" width="200" height="250">
<img src="n3.jpg" width="200" height="250">
<img src="n4.jpg" width="200" height="250">
<img src="n5.jpg" width="200" height="250">
<img src="n6.jpg" width="200" height="250">
</marquee>
</td>
</tr>

</table>


						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
