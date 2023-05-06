<?php include "connection.php"?>
<!DOCtype html>
<html>
    <head><title>
        CRUD Operations
    </title>
</head>
<body>
    <!-- contactForm -->
    <?php if(isset($_POST['submit']))
        {
           $mail=$_POST['mail'];
           $password=$_POST['password'];

        //    echo "My mail: ".$mail."<br/>"."My Password: ".$password;
        $query="INSERT INTO awp(Mail,password) ";
        $query.="VALUES ('$mail','$password')";
        $result=mysqli_query($connection,$query);

        if($result)
            {     
                echo "the data updated";
            }
        else{
            echo "Data not updated";
        }
        }
        ?>
        <form action="CRUD_operations.php" method="post" class="Form">
            <legend><h2>Registration Form</h2></legend> <br>

            <label for="mail">Mail: </label>
            <input type="text" name="mail">
            <label for="password">Password:</label>
            <input type="text" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
     if(isset($_POST['submit']))
     {
        $id=$_POST['id'];
        $mail=$_POST['mail'];
        $password=$_POST['password'];

        $query="UPDATE awp SET ";
        $query.="Mail='$mail',";
        $query.="password='$password' ";
        $query.="WHERE id='$id' ";
 
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die("Query failed".mysqli_error($connection));
        }
        else
        {
            echo "<br />Updated your record";
        }
     }

     ?>
    <h1>Update record</h1>
    <form action="CRUD_operations.php" method="post">
        <input type="email" name="mail" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
         <select name="id"><?php
          $query='SELECT *FROM awp';
          $result=mysqli_query($connection,$query);
          if(!$result)
          {
            die("query failed".mysqli_error($connection));
          }
          else
          {
            echo "<br>result is working<br/>";
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                echo "<option value='$id'>$id</option>";
            }
        } 
        ?>
        <input type="submit" value="Update" name="submit">
        
        </select>
    </form>

    <!-- delete_record -->
     <h1>Delete_record</h1>
   <form action="CRUD_operations.php" method="post">
        <select name="id">
        <?php
            $query = "SELECT * FROM awp";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("query failed".mysqli_error($connection));
            }
            else
            {
                echo "Result is working <br/>";
                while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                echo"<option value='$id'>$id</option>";
                }
            }
        ?>
        </select>
        <input type="submit" value="Delete" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $query="DELETE FROM awp ";
            $query.="WHERE id = '$id' ";
            $result=mysqli_query($connection,$query);
            if(!$result){
                die("Query failed".mysqli_query($connection));
            }
            else{
                echo "<br/> $id Record deleted";
            }
       }
   ?>
</body>
</html>
