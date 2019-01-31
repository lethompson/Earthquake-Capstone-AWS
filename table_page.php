<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'seismic'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM catalog';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    
    
    
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<style>
    
body {
  margin: 0;
  font-family: Arial;
}
    
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    
<style>


.top-container {
  background-color: #f1f1f1;
  padding: 25px;
  text-align: center;
}

.header {
  padding: .5px .5px;
  background: #FFFFFF;
  color: #FFFFFF;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>

<script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
    }
</script>
    
    
</head>
<body id="body" data-spy="scroll" data-target=".header">

       <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="content">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                       <!-- <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/EDR_Logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>-->
                        <!-- End Logo -->
                    </div>

                    
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            
                              <ul class="nav navbar-nav navbar-nav-left">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body"><p style="font-size:50px; color:grey">ED2</p></a></li>
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.html" style="color:grey">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="events.html" style="color:grey">Earthquakes</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="World_map.html" style="color:grey">Potential Flood Areas</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
    
    <br><br><br><br><br>
    
    
    
    
    
    
    
    
    
    
		<div id="wrap">
			<div class="container">
            <h3>A demo of Bootstrap data table</h3>
      <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Depth</th>
                            <th>Mag</th>
                            <th>MagType</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                          
                            while($row = mysqli_fetch_array($query))
                            {
                                
                                echo '<tr>
                                        <td>'.$row['time_event'].'</td>
                                        <td>'.$row['latitude'].'</td>
                                        <td>'.$row['longitude'].'</td>
                                        <td>'.$row['depth'].'</td>
                                        <td>'.$row['mag'].'</td>
                                        <td>'.$row['magType'].'</td>
                                     </tr>';
                            }
                        
                        
                        
                        
                        ?>
                        
                        
                       
                    </tbody>
          
                    
        </table>
              
			</div>
		</div>
    
    
     <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
    
    
    
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
            
            
                    $(document).ready(function() {
                $('#example').DataTable( {
                    "dom": '<"top"i>rt<"bottom"flp><"clear">'
                } );
            } );
		</script>


    
    

    
   
        

    
    
</body>
</html>