<?php
#https://linkedin.com/pulse/what-main-user-roles-warehouse-management-system-erhan-musaoglu
# https://www.logiwa.com/
# https://www.linkedin.com/today/author/erhanmusaoglu?trk=author-info__article-link Rack usefulness
    
# https://www.logiwa.com/warehouse-management-system-features
# FrontEnd, BackEndDeveloper, Database Designer, System Analyst, Project Management

include('modules/Users.php');

/*
    Testing for authentication
*/

// class Tests extends Auth {
//     public function test_login(){

//     }
// }

// $a = new Tests('', '');

?>

<form method="post" action="">

   <input name="phone" id="exampleInputEmail1" type="text" placeholder="Enter phone number" class="form-control">            
    <input name="password" id="exampleInputPassword1" type="password" placeholder="Password" class="form-control">
    <span class="fa fa-lock form-control-feedback text-muted"></span>            
    <input type="submit" class="btn btn-block btn-primary" value="Login" name="login">

</form>

<?php

// $us = new Driver('tailors', 'phone', 'followup');

//     if(isset($_POST['login'])){

//         $phone = $_POST['phone'];
//         $pass = $_POST['password'];

//        // $login = 
//        $login = $us->login($_POST['phone'], $_POST['password']);
//        if($login){
//         echo"sxxx";
//        }else{
//            echo"err";
//        }
//     }else{

//     }

function Dan(){
    $previ = array("Dollar", "Dan", "Naira", "Euro");
    
    if(!in_array( __FUNCTION__, $previ)){
        echo"You have no previlege";
    }else{
        echo"You can execute";
    }
}

Dan();

?>
