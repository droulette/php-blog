<?php
include_once('./init.php');

if(isset($_POST['title'], $_POST['contents'], $_POST['category'])) {
	$errors=array();
	
	$title=trim($_POST['title']);
	$contents =trim($_POST['contents']);
	
	if(empty($title)){
		$errors[]="no title";
	}
	else if(strlen($title)>255){
		$errors[]='too long';
	}
	if(empty($contents)){
		$errors[]="no contents";
	}
	if(!category_exists('id', $_POST['category'])) {
		$errors[]='no category';
	}
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset = 'utf-8'>
	<meta http-equiv="X-UA-Compatible" content='IE=edge,chrome=1'>
	<style>
	label {display:block;}
	</style>
	
	<title> Add a Post </title>
</head>

<body>

	<h1> Add a Post</h1>
	
	<?php
	if(isset($errors) && !empty($errors)){
		echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';
	}
	?>
	
	<form action="" method="post">
	<div>
		<label for="title"> Title </label>
		<input type="text" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title'];?>">
	</div>
	<div>
		<label for="contents"> Contents</label>
		<textarea name="contents" rows="15" cols="50"><?php if (isset($_POST['contents'])) echo $_POST['contents'];?></textarea>
	</div>
	<div>
		<label for="category"> Category</label>
		<select name="category">
		<?php
		foreach(get_categories() as $cateogry){
		?>
		<option value="<?php echo $cateogry["id"];?>"><?php echo $cateogry['name'];?></option>
		<?php
		}
		?>
		
		</select>
	</div>
	<div>
		<input type="submit" value="add post">
	</div>
	</form>
</body>
</html>
		