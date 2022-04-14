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
                    <li class="active"><a href="reg.php">Register</a>
                    <ul>
                        
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    </li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                </div>
            </div>
            <div class="col">
                <h2 class="sub-title">Khwaja Yunas Ali University</h2>
                <h4 class="top-title">Departmental Event Management</h4> 
            </div>
        </div>
    </header>
    <div class="container">
    <h2>Registration form</h2>
    <form class="form-horizontal" action="reg.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="id" placeholder="Enter Your Institution ID" name="id" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Full Name:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone Number:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="department">Department:</label>
            <div class="col-sm-10">          
            <select name="department" id="department">
            <?php
        
            $sql = "SELECT * FROM department";
            $display = mysqli_query($con,$sql);
            while($row= mysqli_fetch_array($display))
            {
            ?>
                <option value="<?php echo $row["departmentid"]; ?>"><?php echo $row["departmentname"]; ?></option>
            <?php   
            }
            ?> 
            </select>
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
            $id =$_POST['id'];
            $name=$_POST["name"];
            $password =$_POST['password'];
            $email=$_POST['email']; 
            $phone=$_POST['phone'];
            $department=$_POST['department'];
            
            $query="SELECT * FROM `users` WHERE `academicid`='$id'";
            $query_check=mysqli_query($con,$query);
            if ($query_check) 
            {
                if (mysqli_num_rows($query_check) > 0) 
                {
                    echo "<script>alert('Already registerd!');
                                window.location.href='http://localhost/DEMSProject/index.php';
                        </script>";
                }
                else
                {
                    
                    $insertion="INSERT INTO `users`(`academicid`, `username`, `email`, `password`, `phone`, `department`) VALUES('$id','$name','$email','$password','$phone','$department')";
                    $run=mysqli_query($con,$insertion);
                    if($run)
                    {              
                            echo "<script>alert('You are successfully registered!');
                                    
                            windows.location.href='http://localhost/DEMSProject/login.php';
                            </script>";
                            

                    }
                    else
                    {
                        echo"<script>alert('Connection Failed');
                        windows.location.href='http://localhost/DEMSProject/reg.php';
                        </script>";
                    }
                }
            } 
            else
            {
                echo"<script>alert('Database Error!');
                windows.location.href='http://localhost/DEMSProject/reg.php';
                </script>";
            }
        }
    ?>

<br><br>
</body>
</html>
