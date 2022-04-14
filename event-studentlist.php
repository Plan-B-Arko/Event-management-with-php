
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
            <li><a href="eventlist.php">Events</a></li>
            <li class="active"><a href="userlist.php">User list</a></li>
        </ul>
        </div>
    </div>
  </header>
    <div class="container">
      <h2>Student List attending in the Event</h2>         
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Volunteer</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $id=$_GET["id"];
        $sql = "SELECT * FROM eventregistration AS e, users AS u, department AS d WHERE u.department = d.departmentid AND e.userid = u.academicid AND e.eventid = '$id' AND e.category = 'student'";
        $display = mysqli_query($con,$sql);
        while($row= mysqli_fetch_array($display))
        {
        ?>
          <tr>
            <td><?php echo $row["academicid"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["departmentname"]; ?></td>
            <td><?php echo $row["volunteer"]; ?></td>
          </tr>
          <?php   
          }
          ?>
        </tbody>
      </table>
    </div>

</body>
</html>
