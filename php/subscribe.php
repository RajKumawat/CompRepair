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
    
    $email = $_POST["email"];
    $msg = "".$email." subscribed to comprepair.in";
    $usrmsg = "Thanks for subscribing to comprepair.in";
    
    

    $sql = "SELECT email from SUBSCRIBER where email = '$email'";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        header('Location: ../emailalready.html');
    }
    else
    {
        $sql = "INSERT into SUBSCRIBER values('$email')";

        $result = $conn->query($sql);

        if($result)
        {
            mail($email,"CompRepair.in\n[NO REPLY]",$usrmsg,"You will get the latest solution notification.");
            $mail = mail("carecomprepair@gmail.com","Subscriber",$msg, "Subscriber Increased");
            if($mail)
            {
                header('Location: ../subscribeok.html');
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
    }

    $conn->close();
?>