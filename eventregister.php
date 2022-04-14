<?php
    session_start();
    include_once 'config.php';
    
    
?>
<?php include 'header.php' ?>
<body>
    <header>
    <div class="top-nav-bar">
        <img src="assets/photos/logo.png" class="logo">
        <div class="menu-bar">
                <ul>
                    <li><a href="events.php">Home</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
                </div>
    </div>
  </header>
    <div class="container">
    <h2>Registration for </h2>
    <form class="form-horizontal" action="eventregister.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="eventid">EventID:</label>
            <div class="col-sm-10">          
                <input type="number" class="form-control" id="eventid" value='<?php echo $_GET['id']; ?>' name="eventid" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="id" placeholder="Enter Your Institution ID" name="id" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="category">Category:</label>
            <div class="col-sm-10">          
            <select name="category" id="category">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="employee">Employee</option>
            
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="volunteer">do you want to work as Volunteer?:</label>
            <div class="col-sm-10">          
                <input type="radio" name="volunteer" value="1"><label>Yes</label><br>
                <input type="radio" name="volunteer" value="1"><label>No</label>
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
            $userid =$_POST['id'];
            $eventid =$_POST['eventid'];
            $category=$_POST["category"];
            $volunteer =$_POST['volunteer'];
            
            
            $query="SELECT * FROM `eventregistration` WHERE `userid`='$userid' AND `eventid`='$eventid' ";
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
                    
                    $insertion="INSERT INTO `event-registration`(`eventid`, `userid`, `category`, `volunteer`) VALUES ('$eventid','$userid','$category','$volunteer')";
                    $run=mysqli_query($con,$insertion);
                    if($run)
                    {              
                            echo "<script>alert('Successfully registered!');
                            </script>";
                            header("location:http://localhost/DEMSProject/events.php");

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
