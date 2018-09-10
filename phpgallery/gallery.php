<?php 
$_SESSION['username'] = "Admin";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<a href="index.html" class="header-brand">FERNANDO</a>
		<nav>
			<ul>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="portfolio.html">About</a></li>
				<li><a href="portfolio.html">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="gallery-links">
			<div class="wrapper">
				<h2>Gallery</h2>

				<div class="gallery-container">
					<a href="">
						<div></div>
						<h3>This is a TITLE</h3>
						<p>this is a paragraph</p>
					</a>
					<a href="">
						<div></div>
						<h3>This is a TITLE</h3>
						<p>this is a paragraph</p>
					</a>
					<a href="">
						<div></div>
						<h3>This is a TITLE</h3>
						<p>this is a paragraph</p>
					</a>
					<a href="">
						<div></div>
						<h3>This is a TITLE</h3>
						<p>this is a paragraph</p>
					</a>
					<a href="">
						<div></div>
						<h3>This is a TITLE</h3>
						<p>this is a paragraph</p>
					</a>
				</div>
				
					<section>
					<div class="gallery-upload">
						<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
							<input type="text" name="filename" placeholder="File Name">
							<input type="text" name="filetitle" placeholder="Image Title">
							<input type="text" name="filedesc" placeholder="Image Description">
							<input type="file" name="file">
							<button type="submit" name="submit">UPLOAD</button>
						</form>
						</div>
					</section>';
				}
					
				 ?>			
			</div>
		</section>
	</main>

	<footer>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
		</ul>
		<ul>
			<li><p>latest cases</p></li>
			<li><a href="">MAILING SHAOLIN - WEB DEVELOPENT</a></li>
		</ul>
	</footer>
</body>
</html>