<?php



function username_exist($username){

    global $connection ;


    $query = "SELECT user_name from users where user_name = '{$username}'";

    $result = mysqli_query($connection , $query );

    if(!$result ){

        die(mysqli_error($connection));

    }

    if(mysqli_num_rows($result)){

        return true ;

    }else{

        return false ;

    }



}

function email_exist($email){

    global $connection ;


    $query = "SELECT user_name from users where user_email = '{$email}'";

    $result = mysqli_query($connection , $query );

    if(!$result ){

        die(mysqli_error($connection));

    }

    if(mysqli_num_rows($result)){

        return true ;

    }else{

        return false ;

    }



}