<?php
    session_start();
    include_once 'config.php';
    
    
?>
<?php include 'header.php' ?>
<body>
    <header>
        <div class="main">
        <div class="load">
            </div>

            <div class="top-nav-bar">
                
                <img src="assets/photos/logo.png" class="logo">

                <div class="menu-bar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#gallery">Gallery</a></li>
                    <li class="active"><a href="login.php">Login</a>
                    <ul>
                        
                        <li><a href="reg.php">Register</a></li>
                    </ul>
                    </li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <h2>Registration form</h2>
    <form class="form-horizontal" action="login.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="id" placeholder="Enter Your Institution ID" name="id" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"required>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>

    <?php

                        if (isset($_POST['submit'])) 
                        {
                            $id=$_POST['id'];
                            $password=$_POST['password'];
                            
                            if($id=="admin" && $password=="admin")
                            {
                                   echo"<script>alert('Admin login');
                                      </script>";
                                      header("location:http://localhost/DEMSProject/userlist.php");
                                      exit();
                                
                            }
                            else
                            {
                            $query="SELECT * FROM `users` WHERE `academicid`='$id' AND `password`='$password'";
                            $check=mysqli_query($con,$query);
                            if (mysqli_num_rows($check) == 1) 
                            {
                                $row = mysqli_fetch_array($check);
                                $_SESSION["uid"] = $row["academic-id"];
                                header("location:http://localhost/DEMSProject/events.php");
                                    exit();
	                            
                            } 
                            else 
                            {
	                             echo"<script>alert('Connection Failed');
                                        windows.location.href='http://localhost/DEMSProject/login.php';
                                      </script>";
	                            exit();
                            }
                            }
                        }


                        ?>

<br><br>
</body>
</html>

                    