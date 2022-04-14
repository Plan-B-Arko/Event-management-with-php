
<?php include 'header.php' ?>
<body>
    <header class="main-header" id="header">
        <div class="main">
        <div class="load">
            </div>

            <div class="top-nav-bar">
                
                <img src="assets/photos/logo.png" class="logo">

                <div class="menu-bar">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#">Sign up</a>
                    <ul>
                        <li><a href="reg.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    </li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                </div>
            </div>
            <div class="col">
                <h2 class="sub-title">Khwaja Yunas Ali University</h2>
            </div>
        </div>
    </header>


    
    <section class="section-padding" id="gallery">
        <div class="container">
            <div class="row">     
                <div class="section-title">
                    <h2 class="head-title">Gallery</h2>
                    <hr class="line">
                    <p>Some pictures of our products</p>
                </div>                
                <div class="col-md-3 col-sm-4">
                    
                    <div class="gallery-box design">
                        <img src="assets/photos/building.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    
                    <div class="gallery-box design">
                        <img src="assets/photos/loft.jpg"class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    
                    <div class="gallery-box design">
                        <img src="assets/photos/building.jpg"class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    
                    <div class="gallery-box design">
                        <img src="assets/photos/loft.jpg" class="img-responsive">
                    </div>
                </div>
                
                <a href="gallery.html">more</a>
            </div>
        </div>
    </section>

     <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h2 class="head-title">About</h2>
                    <hr class="line">
                    <p>A truly comprehensive event management system will allow users and organizers to access and manage all aspects of an 
                    event, including registration, marketing, engagement, integrations, physical planning and preparation, reporting and 
                    analytics, and more.
                    <br>
                    On college and university campuses, events are happening all the time, whether student- or faculty-focused, and often 
                    through in-house or third parties and vendors. When these events take place, it is critical to use an event management 
                    system that offers full control and planning capabilities to ensure activities happen on time, in accommodating spaces 
                    and keeping in mind the safety of every attending. A comprehensive event solution will allow campus event planners to
                    book large-scale events, communicate with service providers, and maintain a single source of record for repeatable, 
                    measurable events.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h2 class="head-title">Contact Info</h2>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-6">
                       <div class="location-info">
                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>University Name</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: +880000000000, +8800000009</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email:<a href="" >njncjnjdbj@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
