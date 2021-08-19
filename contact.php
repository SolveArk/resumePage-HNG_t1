<?php
require_once("model/db/connect.php");
?>
<?php
if(isset($_POST['send_btn'])){

    if(!empty($_POST['name']) || !empty($_POST['mail']) || 
        !empty($_POST['msg'])){

            $uname      =   $_POST['name'];
            $mail       =   $_POST['mail'];
            $msg        =   $_POST['msg'];

            $sql1= "INSERT INTO user(`names`, `email`, `message`) 
                    VALUES('$uname', '$mail', '$msg')";
            $queres= $conn->query($sql1);

            if($queres){
                echo "Successfully Sent!";
                header('Location:index.php');
            }else{
                echo "Error sending";
            }

    }else{

        echo "Fields cannot be empty";

    }
}

?>