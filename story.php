<?php require 'header.php'; ?>
<?php
//$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
///$parts = Explode('/', $url);
//$id = $parts[count($parts) - 1];
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$results = mysqli_query($con, "SELECT * FROM tekst WHERE id='$id'");
while ($row = mysqli_fetch_array($results)) {
	$title = $row['title'];
	$description = $row['rte'];
	$image = $row['slika_large'];
	$date = $row['date'];
	$kategorija = $row['type'];
	$youtube = $row['youtube'];
	echo '<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
			<li class="active">' . $title . '</li>
		</ol>
	</div>
</div>
<!-- breadcrumb end -->
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
	<div class="container">
		<div class="row">
			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-8">
				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title">' . $title . '</h1>
				<!-- page-title end -->
				<!-- blogpost start -->
				<!-- ================ -->
				<article class="blogpost full">
					<header>
						<div class="post-info">
							<span class="post-date">
								<i class="icon-calendar"></i>
								<span class="month">' . $time . '</span>
							</span>
							<span class="submitted"><i class="icon-user-1"></i> by <a href="#">Administrator</a></span>
						</div>
					</header>';
					require 'gelerija.php';
					echo '<div class="blogpost-content">';
					echo '<p>' . $description . '</p>';
					$id = $_GET['id'];
					$sql = mysqli_query($con, "SELECT * FROM tekst WHERE id='$id'");
					if (mysqli_connect_errno($con)) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					while ($row = mysqli_fetch_array($sql)) {
						echo '<div class="clearfix">';
						if (isset($row['youtube']) && $row['youtube'] != NULL) {
							echo '<p class="col-md-12 col-lg-12 col-xs-12 col-sm-12"style="text-align: center;" class="white float-left"><iframe width="auto" height="auto" src="//www.youtube.com/embed/' . $row['youtube'] . '" frameborder="0" allowfullscreen></iframe></p> ';
						}    
					}
					echo '</div>';

echo'
				<div class="link pull-right">
							<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
								
								
									<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=' . $title . '&url=http://nostalgijatravel.mk/story/' . $id . '/"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="https://plus.google.com/share?url=http://nostalgijatravel.mk/story/' . $id . '/"><i class="fa fa-google-plus"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://nostalgijatravel.mk/story/' . $id . '/" /><i class="fa fa-facebook"></i></a></li>
								
							</ul>
						</div>
					
				</article>
			</div>';
			$query = mysqli_query($con, "UPDATE tekst SET views=views+1 WHERE id='$id'");
			mysqli_fetch_array($query);
		}
		?>
		<div class="col-md-4">
			<?php require 'desno.php'; ?>
		</div>
		<!-- main end -->
	</div>
</div>
</section>
<?php
require 'socijal.php';
require 'footer.php'; ?>