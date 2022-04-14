
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
      <h2>User List</h2>         
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
          $sql = "SELECT * FROM users, department WHERE users.department=department.departmentid";
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
          </tr>
          <?php   
          }
          ?>
        </tbody>
      </table>
    </div>

</body>
</html>
