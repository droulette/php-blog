<?php
#include ('/header.php');
#include ('/footer.php');
#include ('/sidebar.php'); 
include ('/init.php'); 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf=8" />
<title>my blog</title>
<link rel="stylesheet" href="./style.css" type="text/css" />
</head>
	<body>
		<div id="container">
		<div id="header">
			<h1><font size="50"> Blog Template</font></h1>
			
			<nav id="navigation">
				<a href="/index.php">Home</a></br>
				<a href="/about.php">About</a></br>
				<a href="/consulting.php">Consulting</a></br>
				<a href="/contact.php">Contact</a>
			</nav>
		</div>
		<div id="middle">
			<div id="posts">
				<p>hi carl sagen</p>
				<?php
					foreach(get_posts() as $posts){
				?>
				<h2><a href="index.php?id=<?php echo $posts['id']; ?>"><?php echo $posts['title'];?></a></h2></br>
				<?php echo $posts['contents'];?></br>
				<?php
				}
				?>
			</div>
				
			<div id="sidebar">
				<h2>neil tyson degrese</h2>
			
				<p><img src="ntd.jpg" alt="neil" height="100" width="100" />this is my bio. im an astropsyschist. be my friend</p>
				
				<h3>subscribe</p>
			
				<a href="www.twitter.com"><p><img src="blogimg.png" alt="neil" height="15" width="15" />twitter biatch</p></a>
				<a href="/test_blog/index.php"><p><img src="blogimg.png" alt="neil" height="15" width="15" />my blog... oh you here already</p></a>
			
				<h3>Categories</p>
				<?php
					foreach(get_categories() as $category){
				?>
				<p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a> - 
				<a href="delete_category.php?id=<?php echo $category['id'];?>">delete</a></p> 
				<?php
				}
				?>

			</div>
		</div>
		</div>
	</body>
</html>
