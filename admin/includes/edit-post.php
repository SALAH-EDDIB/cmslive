


<?php


if(isset($_GET['p_id'])){

    $post_id = $_GET['p_id'];

    $query = "select * from posts where post_id=$post_id ";
$result = mysqli_query($connection , $query);

while($row = mysqli_fetch_assoc($result)){


$post_title = $row['post_title'];
$post_author = $row['post_author'];

$post_date = $row['post_date'];
$post_image = $row['post_image'];

$post_tags = $row['post_tags'];

$post_content = $row['post_content'];

}


}

if(isset($_POST['update_post'])){


    $post_title = $_POST['title'];
$post_author = $_POST['post_author'];

$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];


$post_tags = $_POST['post_tags'];
$post_content = $_POST['post_content'];

move_uploaded_file($post_image_temp ,"../img/$post_image" );


$query = "UPDATE posts set " ;
$query .= "post_title = '{$post_title}', ";
$query .= "post_author = '{$post_author}', ";

$query .= "post_image = '{$post_image}', ";
$query .= "post_content = '{$post_content}', ";
$query .= "post_tags = '{$post_tags}' ";

$query .= " where post_id = {$post_id} ";

$update_post = mysqli_query($connection , $query );

if(!$update_post){
    die(mysqli_error($connection));
}

header('location: posts.php');

}


?>




<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Post title </label>
<input type="text" class="form-control" name="title" value='<?php echo $post_title?>' required>
</div>

<div class="form-group">
<label for="title">Post author </label>
<input type="text" class="form-control" name="post_author" value='<?php echo $post_author?>' required>
</div>



<div class="form-group">
<label for="author">Post Image </label>
<img width='100'  src="../img/<?php echo $post_image?>" alt="">
<input type="file"  name="image" >
</div>

<div class="form-group">
<label for="post_tags">Post Tags </label>
<input type="text" class="form-control" name="post_tags" value='<?php echo $post_tags?>'  required>
</div>

<div class="form-group">
<label for="post_content">Post Content</label>
<textarea type="text" class="form-control" id='body' name="post_content" cols="30" rows="5">
<?php echo $post_content?>
</textarea>
</div>

<div class="form-group">

<input class="btn btn-primary" type="submit" class="form-control" name="update_post" value="Update Post  ">
</div>




</form>