
<?php
if(empty($_POST["height"])||empty($_POST["weight"])){
    echo "please type in all information";    
}
else{
echo "height= ".$_POST["height"]."</br>";
echo "weight= ".$_POST["weight"]."</br>";
echo "BMI :". $_POST["weight"] /$_POST["height"]/$_POST["height"]."<br/>";
}
if($_FILES["file"]["error"]==4){
    echo "empty" ;
}
if (($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")){
    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
}
else{
    echo "wrong file type.";
}

?>