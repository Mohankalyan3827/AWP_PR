<!DOCTYPE html>
<html>
    <head>
        <title>Regestration</title>
        <style>
            .Form{
                align-items="center";
            }
        </style>
    </head>
    <body>

    <?php 
     $connection=mysqli_connect("localhost","root","","awp");
     if($connection)
      echo "Database connected";
     else
     echo "Connection Failed";
     
     ?>
         <?php if(isset($_POST['submit']))
        {
            $Name = $_POST['Name'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $Gender = $_POST['Gender'];
            $Phoneno = $_POST['Phoneno'];
        }
        $query="INSERT INTO form(Name,mail,password,Gender,Phoneno) VALUES('$Name','$mail','$password','$Gender', '$Phoneno')";
        $result=mysqli_query($connection,$query);
        if($result)
        {
            echo "the data updated";
        }
        else{
            echo "Data not updated";
        }
        ?>
        <form action="registation.php" method="post" class="Form">
            <legend><h2>Registration Form</h2></legend> <br>
               <label for="Name">Name:</label>
               <input type="text" name="Name"><br>
            <label for="mail">Mail: </label>
            <input type="text" name="mail"><br>
            <label for="password">password:</label>
            <input type="text" name="password"><br>
        
            <label for="Gender">Gender:</label>
            <input type="radio" name="Gender">Male
            <input type="radio" name="Gender">Female <br>
            
            <label for="Phoneno">phoneno:</label>
            <input type="text" name="Phoneno"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>