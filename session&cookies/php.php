
<?php

session_start();

// setcookie("test" , 'live-coding' , time() + (86400 * 30) ) ; 

// if(isset($_POST['submit'])){


    $_SESSION['liveCoding'] = $_POST['name'] ;

// }
// echo $_SESSION['liveCoding'];
session_unset();
// ?>









<form action="" method='post'>

<input type="text" name="name" id="">

<input type="submit" name='submit' >

</form>