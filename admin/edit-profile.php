<?php include 'includes/header.php'?> 











    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php'?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Profile
                        </h1>





                    </div>
                </div>
                <!-- /.row -->


                <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
<label for="author">Post Image </label><br>
<img width='100'  src="" alt="">
<br>
<br>

<input type="file"  name="image">
</div>


<div class="form-group">
<label for="title">FirstName </label>
<input type="text" class="form-control" value="" name="user_firstname">
</div>



<div class="form-group">
<label for="author">Lastname </label>
<input type="text" class="form-control" value="" name="user_lastname">
</div>

<div class="form-group">
<label for="author">Username </label>
<input type="text" class="form-control" value="" name="user_name">
</div>



<div class="form-group">
<label for="user_email">Email</label>
<input type="email" class="form-control" value="" name="user_email">
</div>

<div class="form-group">
<label for="post_content">Password</label>
<input type="password" class="form-control" name="user_password" required>
</div>

<div class="form-group">

<input class="btn btn-primary" type="submit" class="form-control" name="edit_user" value="Update Profile">
</div>




</form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>