<?php

include 'config.php';

if(isset($_POST)){

  extract($_POST);

$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_temp, "images/$image" );

$query ="INSERT INTO data(title,content,image) 
VALUES ('$title','$ckeditor','$image')";

 if(mysqli_query($conn,$query))
{

echo "success";

}
else{
    echo "error";
}
}


?>
  