<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  
<div class="wrapper">
     
    <div class="body-overlay"></div>
     
    <!-------sidebar--design------------>
     
    <div id="sidebar">
      <div class="sidebar-header">
        <h3><img src="img/LOGO.jpeg" class="centered-image"/></h3>
        <h4></h4><span>CONTACT APP MANAGER</span></h4>
      </div>
      <ul class="list-unstyled component m-0">
        <li class="active">
          <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
        </li>
        
        <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="material-icons">aspect_ratio</i>Profile
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
            <li><a href="#">Nama</a></li>
            <li><a href="#">No HP</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="material-icons">grid_on</i>tables
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu6">
             <li><a href="#">table 1</a></li>
             <li><a href="#">table 2</a></li>
             <li><a href="#">table 3</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="material-icons">content_copy</i>Pages
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu7">
             <li><a href="#">Pages 1</a></li>
             <li><a href="#">Pages 2</a></li>
             <li><a href="#">Pages 3</a></li>
          </ul>
        </li>
      
      </ul>
     </div>
     
   <!-------sidebar--design- close----------->

   <!-------page-content start----------->
   
   <div id="content">
       
        <!------top-navbar-start-----------> 
           
        <div class="top-navbar">
           <div class="xd-topbar">
               <div class="row">
                   <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                      <div class="xp-menubar">
                          <span class="material-icons text-white">signal_cellular_alt</span>
                      </div>
                   </div>
                   
    <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
            <form action="search.php" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">Go</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
        <div class="xp-profilebar text-right">
            <nav class="navbar p-0">
                <ul class="nav navbar-nav flex-row ml-auto">
                    <li class="dropdown nav-item active">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <span class="material-icons">notifications</span>
                            <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">You Have 4 New Messages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">question_answer</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <img src="img/user.jpg" style="width:40px; border-radius:50%;"/>
                            <span class="xp-user-live"></span>
                        </a>
                        <ul class="dropdown-menu small-menu">
                            <li><a href="logout.php">
                                <span class="material-icons">logout</span>
                                Logout
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="xp-breadcrumbbar text-center">
        <h4 class="page-title">Dashboard</h4>
    </div>
    
    <!-- Include JS files -->
    <script src="path_to_your_js_file.js"></script>
</body>
</html>
