
<?php
    session_start();
    include 'config.php';
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
      <h2>Event List</h2>         
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Event Id</th>
            <th>Event</th>
            <th>Details</th>
            <th>lists</th>
            <th>Fee</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
          $sql = "SELECT * FROM events";
          $display = mysqli_query($con,$sql);
          while($row= mysqli_fetch_array($display))
          {
            $eventid=$row["eventid"];
         ?>
          <tr  height="auto">
            <td width="5%"><?php echo $row["eventid"]; ?></td>
            <td width="15%"><?php echo $row["eventname"]; ?></td>
            <td width="40%"><?php echo $row["eventdetails"]; ?></td>
            <td width="15%">Total: 50<br>
                <a href='event-teacherlist.php?id=<?php echo $row["eventid"]; ?>' ><h5>Teacher List</h5></a>
                <a href='event-studentlist.php?id=<?php echo $row["eventid"]; ?>' ><h5>Student List</h5></a>
                <a href='event-employeelist.php?id=<?php echo $row["eventid"]; ?>' ><h5>Employee List</h5></a>
            </td>
            <td width="5%"><?php echo $row["eventfee"]; ?></td>
            <td width="10%"><?php echo $row["eventdate"]; ?></td>
            <td width="10%">
              <a href='editevent.php?edit_id=<?php echo $row["eventid"]; ?>' ><h5>Edit /Delete </h5></a>
            </td>
            
          </tr>
          <?php   
          }
          ?>
          <tr>
            <td></td>
            <td><a href="addevent.php" class="btn btn-default">Add New Event</a></td>
          </tr>
        </tbody>
      </table>
    </div>

</body>
</html>
