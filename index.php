<?php
include "includes/header.php"
?>
    <!-- Navigation -->
  <?php
include "includes/navigation.php"
?>


<?php  

$query = "select * from posts";

$result = mysqli_query($connection , $query);


while($row = mysqli_fetch_assoc($result)){


  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_date = $row['post_date'];
  $post_image = $row['post_image'];
  $post_content = $row['post_content'];






?>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
    
  <h1 class="page-header">
        Home Page
       
      </h1>



    
 
      <!-- First Blog Post -->
      <h2>
      <?php echo $post_title ?>
      </h2>
      <p class="lead">by <?php echo $post_author ?></p>
      <p>
        <span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?>
      </p>
      <hr />

      
      <img
        class="img-responsive"
        src="img/<?php echo $post_image ?>"
        alt=""
      /></a>
      <hr />
      <p>
      <?php echo $post_content ?>
      
      </p>
      <a class="btn btn-primary" href=""
        >Read More <span class="glyphicon glyphicon-chevron-right"></span
      ></a>
      <hr />

<?php } ?>


<div class='pager'>




</div>
    
    
      <!-- Second Blog Post -->
    
      <!-- Pager -->
    
    </div>
    <!-- Blog Sidebar Widgets Column -->
  
    <?php
include "includes/sidebar.php"
?>
      </div>
      <!-- /.row -->

      <hr />
<?php
include "includes/footer.php"
?>