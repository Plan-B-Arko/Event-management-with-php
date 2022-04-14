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
    <form class="form-horizontal" action="editevent.php" method="post">
    <?php
        $id=$_GET["edit_id"];
        $sql = "SELECT * FROM `events` WHERE `eventid`='$id'";
        $display = mysqli_query($con,$sql);
        while($row= mysqli_fetch_array($display))
        {
    ?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="eventid">EventID:</label>
            <div class="col-sm-10">          
                <input type="number" class="form-control" id="eventid" value='<?php echo $_GET['edit_id']; ?>' name="eventid">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Event Name:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" id="name" value='<?php echo $row["eventname"]; ?>' name="name" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="details">Details:</label>
            <div class="col-sm-10">          
                <input type="textarea" class="form-control" id="details" value='<?php echo $row["eventdetails"]; ?>' name="details"required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="fee">Fee:</label>
            <div class="col-sm-10">          
                <input type="number" class="form-control" id="fee" value='<?php echo $row["eventfee"]; ?>' name="fee"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">          
                <input type="date" class="form-control" id="date" value='<?php echo $row["eventdate"]; ?>' name="date"required>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit">Update</button>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="delete">Delete</button>
            </div>
        </div>
    </form>
    </div>

    <?php

    if (isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $eventid =$_POST['eventid'];
        $details =$_POST['details'];
        $fee=$_POST['fee']; 
        $date=$_POST['date'];
        
        $insertion="UPDATE `events` SET `eventname`='$name',`eventdetails`='$details',`eventfee`='$fee',`eventdate`='$date'  WHERE `eventid`='$eventid'";
        $run=mysqli_query($con,$insertion);
        if($run)
        {             
            echo"<script>alert('You are successfully updated');
                </script>";
                header("location:http://localhost/DEMSProject/eventlist.php");

        }
        else
        {
            echo"<script>alert('Connection Failed');
            windows.location.href='http://localhost/DEMSProject/addevent.php';
            </script>";
        }
            
    }
            
    if (isset($_POST['delete'])) 
    {
        $eventid =$_POST['eventid'];
        $sql2 = "DELETE FROM  `events` WHERE  `eventid` ='$eventid'";
        if(mysqli_query($con,$sql2))
        {
            echo "<script>alert('event is deleted!');
            </script>";
            header("location:http://localhost/DEMSProject/eventlist.php");
        }
    } 
    
    ?>

<br><br>
</body>
</html>
