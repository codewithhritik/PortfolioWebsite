<?php
//Defining Post variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//Ensure all fields are filled
if(empty($name) || empty($email) || empty($message)){
    echo('Please fill all the Details');
}else{
    //Send Email and print sender confirmation
    mail("hritikbagane@gmail.com", "Portfolio Message", $message, "From: $name <$email>");

    echo "<script type='text/javascript'> alert('Message Successfully Sent!'); 
            window.history.log(-1);
    </script>";
}
?>

