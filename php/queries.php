<?php

    $serverName = "localhost";
    $userName = "comprepair";
    $password = "Dominos69#";
    $dbname = "COMPREPAIRDB";

    $conn = new mysqli($serverName, $userName, $password, $dbname);
    if($conn->connect_error)
    {
        header('Location: ../error.html');
        die("Server Connection Failed. Try later. :" .$conn->connect_error);        
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone  = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $admsg = " Name = ".$name."\n Email = ".$email."\n Phone = ".$phone."\n Subject = ".$subject."\n Message = ".$message;
    $msg = wordwrap($admsg,70);
    $usrmsg = "Your query submitted to comprepair.in succesfully.";
    $mail;

    $sql = "INSERT into QUERIES values('$name', '$email', '$phone', '$subject', '$message')";

    $result = $conn->query($sql);

    if($result)
    {    
        $mail = mail("carecomprepair@gmail.com","Query ",$admsg,"New query recieved");  
        if($mail)
        {  
            mail($email,"CompRepair.in \n[NO REPLY]",$usrmsg,"We will get back to you with the solution soon.");
            header('Location: ../querysubmitok.html');
        }  
        else
        {
            header('Location: ../error.html');
        }  
    }
    else
    {
        header('Location: ../error.html');
    }




    $conn->close();
?>