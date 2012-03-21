<?php
include_once('/init.php');


if(isset($_POST['name'])) {
	$name = trim($_POST['name']);
	
	if(empty($name)) {
		$error = 'you must submit a category name.';
	} else if(category_exists('name', $name)) {
		$error = 'that category already exists';
	} else if(strlen($name)>24) {
		$error = 'category names can only be up to 24 characters';
	}
	
	if (!isset($error)) {
		add_category($name);
}
}
?>

<!DOCTYPE html>

<html lang='en'>
<head>
	<meta charset = 'utf-8'>
	<meta http-equiv="X-UA-Compatible" content='IE=edge,chrome=1'>
	
	<title>My Title </title>
</head>

<body>

	<h1> Add a Category </h1>
	
	<?php
	if (isset($error)) {
		echo "<p> {$error} </p>";
		}
	?>
	<form action="" method="post">
		<div>
			<label for="name"> Name </label>
			<input type= "text" name="name" value="">
		</div>
		<div>
			<input type="submit" value="Add Category">
		</div>
	</form>
</body>
</html>
	