<!DOCTYPE html>
<html lang="en">
<head>
<body>
	<?php
	if($_REQUEST['gender']=="Male"){
	   $imge=$_FILES['fileimge']['type'];
	   echo $imge;
        $name_ = $_REQUEST['name'];
        echo "name :$name_ <br/>" ;
        $birth_ = $_REQUEST['birth'];
        echo "birth :$birth_<br/>";
        $mail_ = $_REQUEST['mail'];
        echo "e-mail :$mail_<br/>";
        $gender_ = $_REQUEST['gender'];
        echo "gender :$gender_<br/>";
        $city_ = $_REQUEST['city'];
        echo "city :$city_<br/>";
    }
    else{

        $name_ = $_REQUEST['name'];
        echo "name :$name_ <br/>" ;
        $birth_ = $_REQUEST['birth'];
        echo "birth :$birth_<br/>";
        $mail_ = $_REQUEST['mail'];
        echo "e-mail :$mail_<br/>";
        $gender_ = $_REQUEST['gender'];
        echo "gender :$gender_<br/>";
        $city_ = $_REQUEST['city'];
        echo "city :$city_<br/>";
        $imge=$_FILES['fileimge']['type'];
	   echo $imge;
    }
	?>
</body>
</head>
</html>