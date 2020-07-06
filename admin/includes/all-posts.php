

<form action="" method="post">

<table class='table table-hover'>


<thead>
    <tr>
        
        <th>Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Date</th>
        <th>Image</th>
        <th>Tags</th>
        
        
    </tr>
</thead>
<tbody>

<?php

$query = "select * from posts order by post_id desc";
$result = mysqli_query($connection , $query);


while($row = mysqli_fetch_assoc($result)){


    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];

    
    echo"<th>$post_id</th>";
echo"<th>$post_author</th>";
echo"<th>$post_title</th>";
echo"<th>$post_date</th>";
echo "<th><img width='60px' src='../img/$post_image' ></th>";
echo "<th>$post_tags</th>";


echo "<th><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></th>";
echo "<th><a href='posts.php?delete={$post_id}'>Delete</a></th>";

echo '</tr>';

}

if(isset($_GET['delete'])){


    $post_id = $_GET['delete'];

    $query = "delete from posts where post_id = {$post_id}";
    $result = mysqli_query($connection , $query);
    header('location: posts.php');




}

?>



 </tbody>
</table>
</form>