<?php
    include 'connect.php';
    $id=$_GET['id'];
    $sql="Select * from `todo` where id=$id";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $status=$row['status'];


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $sql="update `todo` set id=$id, name='$name', status='' where id=$id";
        $result=mysqli_query($connect,$sql);

        if($result){
            // echo "Successfully added";
            header('location:index.php');
        } else{
            die(mysqli_error($connect));
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <form method="post" class="d-flex">
            <input type="text" class="form-control" placeholder="add to do" name="name" value="<?php  echo $name;?>">
            <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>
    </div>
  </body>
</html>