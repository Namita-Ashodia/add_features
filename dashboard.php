<?php include "inc/session.php"; ?>
<?php include "inc/db.php"; ?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/scrollbar.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

</style><style> ol li {text-align:left; }  </style>
<body class="w3-theme-l5">

<!-- Navbar -->
<?php include "inc/navbar.php"; ?>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">  
<?php include "inc/alert.php"; ?>
  
  <!-- The Grid -->
  <div class="w3-row">
    <!-- upLeft Column -->
    <div class="w3-col m2">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
      <p class="w3-center"><img src="images/employee/<?php echo $_SESSION['profile_picture']; ?>" class="w3-circle" style="height:106px;width:106px" alt="profile picture"></p>
         <hr>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?> </p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['department']; ?></p>
         <p><i class="fa fa-id-badge fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['designation']; ?></p>
        </div>
      </div>
      <br>
      <style> .w3-white a{
         text-decoration:none;
	  }
	  .w3-input {padding:2%;}
	  </style>
      <!-- Accordion -->
      <?php include "inc/accordian.php"; ?>
      <br>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m10">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white" style="min-height:450px;">
  <div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'My Task')">My Task</button>

  </div>
  <div id="My Task" class=" w3-border city w3-animate-right active">
    <h2>My Task</h2>
    
	<style> tr, td, th {font-size:10px;}</style>
	<div class="w3-container">
<div class="w3-responsive">
<table class="w3-table-all">
<tbody><tr>
  <th>Task Title</th>
  <th>Deadline</th>
  <th>Allotment Date</th>
  <th>Assigned By</th>
  <th>Attachment</th>
  <th>Description</th>
  <th>Comments</th>
  <th>Followed By</th>
  <th>Status</th>
  <th>Close Task</th>
  
  
</tr>


</tbody>
</table>
<br>
</div>
</div>


  </div>

          </div>
       </div>
	   
    <!-- End Middle Column -->
		 </div>
		 
 
	    
    <!-- End Right Column -->
       
	   </div>
       

      
      
    <!-- End Middle Column -->
    </div>
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<?php include "inc/footer.php"; ?>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
</body>
</html> 
