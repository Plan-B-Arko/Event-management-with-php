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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="eventlist.php">Events</a></li>
            <li><a href="userlist.php">User list</a></li>
        </ul>
        </div>
    </div>
    </header>
    <div class="container">
    <h2>Add New Event</h2>
    <form class="form-horizontal" action="addevent.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Event Name:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="name" placeholder="Enter Event Name" name="name" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="details">Details:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="details" placeholder="Enter details" name="details"required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="fee">Fee:</label>
            <div class="col-sm-10">          
                <input type="number" class="form-control" id="fee" placeholder="Enter fee" name="fee"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">          
                <input type="date" class="form-control" id="date" placeholder="Enter date" name="date"required>
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
            $name=$_POST["name"];
            $details =$_POST['details'];
            $fee=$_POST['fee']; 
            $date=$_POST['date'];

            $insertion="INSERT INTO `events`(`eventname`, `eventdetails`, `eventfee`, `eventdate`) VALUES('$name','$details','$fee','$date')";
            $run=mysqli_query($con,$insertion);
            if($run)
            {             
                    echo "<script>alert('You are successfully Added!');
                            </script>";
                            header("http://localhost/DEMSProject/eventlist.php");
                    

            }
            else
            {
                echo"<script>alert('Connection Failed');
                windows.location.href='http://localhost/DEMSProject/addevent.php';
                </script>";
            }
                
        }
    ?>

<br><br>
</body>
</html>
