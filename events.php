
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
                    <li class="active"><a href="events.php">Home</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
                </div>
    </div>
  </header>
  <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2 class="head-title">Events</h2>
                        <hr class="line">
                    </div>
                </div>
                <div class="col-md-9">
                <?php
        
                    $sql = "SELECT * FROM events";
                    $display = mysqli_query($con,$sql);
                    while($row= mysqli_fetch_array($display))
                    {
                ?>
                    <div class="col-md-6">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-para"><?php echo $row["eventname"]; ?></h3>
                            <h4 class="txt-tl">Date:<?php echo $row["eventdate"]; ?></h4>
                            <h4 class="txt-tl">Fee:<?php echo $row["eventfee"]; ?></h4>
                            <a class="txt-tl" href="#"><h4 >Details</h4></a>
                            <h4 class="txt-tl"><a href='eventregister.php?id=<?php echo $row["eventid"]; ?>'>Register now</a></h4>
                        </div>
                    </div>
                <?php   
                }
                ?>
                    
                    
                </div>
            </div>
        </div>
    </section>

</body>
</html>
