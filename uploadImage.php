

<?php
//$conn = mysqli_connect("sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"); // "localhost", "root", "123456"
//$db = mysqli_select_db($conn, 'epiz_29265313_kidney'); // 'opentutorials'
$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');


if(isset($_POST['Upload']))
{
  $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//var_dump($_FILES);
//var_dump($_FILES['image']);
//var_dump($_FILES['image']['tmp_name']);
  $desc = $_POST['desc'];

  $query = "INSERT INTO `photo`(`image`, `desc`) VALUES ('$file', '$desc')";
  $query_run = mysqli_query($conn, $query);

//var_dump($query_run);



  if($query_run)
  {
    echo '<script type= "text/javascript"> alert("Image Profile Uploaded") </script>';
  } else {
    echo '<script type= "text/javascript"> alert("Image Profile Not Uploaded") </script>';
  }
}
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="index.php"><button>home</button></a></li>
        <p><button><a href="displayImage.php">show images (ALL)</a></button></p>

          <form action = "displayImageOne.php" method="POST" enctype="multipart/form-data">
            <p><input type="text" name="idNo" placeholder="Enter id number"/>
            <input type="submit" name="submit" value="show image (Only ONE)"/><br>
          </form>

        <button><a href="showList.php">image List</a></button>
    </ul>
</div>
