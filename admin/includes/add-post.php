


<?php


if(isset($_POST['create_post'])){


$post_title = $_POST['title'];
$post_author = $_POST['post_author'];

$post_image = $_FILES['image']['name'];

$post_image_temp = $_FILES['image']['tmp_name'];


$post_tags = $_POST['post_tags'];
$post_content = $_POST['post_content'];

move_uploaded_file($post_image_temp , "../img/$post_image" );


$query = 'INSERT into posts(post_title ,post_author , post_date , post_image ,post_content , post_tags) ' ;

$query .= " value('{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}' ) ";

$creat_post = mysqli_query($connection , $query) ;

if(!$creat_post){
    die(mysqli_error($connection));
}
}


?>




<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Post title </label>
<input type="text" class="form-control" name="title" required>
</div>


<div class="form-group">
<label for="title">Post author </label>
<input type="text" class="form-control" name="post_author" required>
</div>


<div class="form-group">
<label for="author">Post Image </label>
<input type="file"  name="image" >
</div>

<div class="form-group">
<label for="post_tags">Post Tags </label>
<input type="text" class="form-control" name="post_tags" required>
</div>

<div class="form-group">
<label for="post_content">Post Content</label>
<textarea type="text" class="form-control" id='body' name="post_content" cols="30" rows="5"></textarea>
</div>

<div class="form-group">

<input class="btn btn-primary" type="submit" class="form-control" name="create_post" value="Publish Post  ">
</div>




</form>