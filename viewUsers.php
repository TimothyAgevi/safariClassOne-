<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="userSave.php">Add User</a>
<table class="table table-hover">
    <tr>
        <th>Name</th>
        <th>eMail</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/12/19
     * Time: 10:40 AM
     */
    $conn=mysqli_connect("localhost","root","","safari");
    if(!$conn){
        echo"DB not found";
    }else{
        $fetch=mysqli_query($conn,"SELECT * FROM majina");
        if(!$fetch){
            echo"Fetching Failed";
        }else{
            while($row= mysqli_fetch_assoc($fetch)){
                extract($row);
                echo"
                <tr>
                <td>$jina</td>
                <td>$arafa</td>
                <td><a href='delete.php?x=$id'class='btn btn-danger'>Delete</a></td>
                <td><a href='update.php?x=$id' class='btn btn-success'>Update</a></td>
</tr>
                
                ";
            }
        }
    }
    ?>
</table>
</body>
</html>