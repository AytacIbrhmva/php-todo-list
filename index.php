<?php
  include 'connect.php';
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

    <a class="btn btn-primary" href="create.php">add new</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="Select * from `todo`";
                    $result=mysqli_query($connect,$sql);
                    if($result) {
                        while($row=mysqli_fetch_assoc($result)) {
                            $id=$row['id'];
                            $name=$row['name'];
                            $status=$row['status'];
                            echo '  <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td><span class="badge text-bg-success">'.$status.'</span></td>
                            <td>
                                <a class="btn btn-danger" href="delete.php?id='.$id.'">Delete</a>
                                <a class="btn btn-primary" href="update.php?id='.$id.'">Edit</a>
                            </td>
                            </tr>';
                        }
                    }
                ?>
              
            </tbody>
        </table>
    </div>
  </body>
</html>