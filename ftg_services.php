<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Website Title and Icon-->
    <title>FTG MULTIMEDIA - SERVICES</title>
    <link rel="icon" type="image/png" href="resources/others/icon.png" >

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic:wght@800&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Font Awesome CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <!-- Custom Files' Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">

    <!-- For Revealing Elements on Scroll -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <?php require ('./inc/header.php'); ?>

    <!-- Rooms Title Section -->
    <div class="title-rooms">
        <div class="my-5 px-4">
            <h2 class="h-font text-center fw-bold titles">FTG SERVICES</h2>
            <div class="h-line fw-bold titles"></div>
        </div>
    </div>
    

            

<style>
* {
	margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;

}

body {
  background-color: lightblue;
  padding: 0px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1300px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 10px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 0px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px;
  background-color: black;
  cursor: pointer;
  color: white;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #E3826D;
  color: white;
}

</style>

<!-- MAIN (Center website) -->
<div class="main">

<center>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('wedding')"> Wedding</button>
  <button class="btn" onclick="filterSelection('debut')"> Debut</button>
  <button class="btn" onclick="filterSelection('concert')"> Concert</button>
  <button class="btn" onclick="filterSelection('ceremony')"> Ceremony</button>
  <button class="btn" onclick="filterSelection('anniversary')"> Anniversary</button>
  <button class="btn" onclick="filterSelection('film')"> Film</button>
  <button class="btn" onclick="filterSelection('esports')"> E-sports</button>
  <button class="btn" onclick="filterSelection('seminar')"> Seminar</button>
  <button class="btn" onclick="filterSelection('hide')">Hide All</button>
</div>
</center>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column anniversary">
    <div class="content">
      <img src="resources/services/anniv.png" alt="anniversary" style="width:100%">
      <center><h4>ANNIVERSARY</h4></center>
      
	<center>
	<b>*Silver Package </b>- Close Celebration*
	<br><br>
	<b>1 Camera Setup - </b> <br><p style="color:red"> ₱12,000 </p>
	</center>
	<br><b> &ensp;Inclusions:</b>
	<br>
     &emsp; * Editor <br>
     &emsp; * 1 HD Camera<br>
     &emsp; * Tripod <br>
	 &emsp; * 1 Cameraman <br>
     &emsp; * Video Edit</p>
	 
	 <br>
    </div>
  </div>
  <div class="column debut">
    <div class="content">
    <img src="resources/services/debut.png" alt="debut" style="width:100%">
      <center><h4>DEBUT</h4></center>
      <center><b>2 Camera Setup - </b><br><p style="color:red">₱25,000</p></center>
	<p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 2 HD Camera<br>
	&emsp;* 2 Tripod<br>
	&emsp;* 1 Sony Video Switcher <br>
	&emsp;* 1 SD Recorder <br>
	&emsp;* 1 Tv monitor<br>
	&emsp;* 1 Audio mixer <br>
	&emsp;* 2 Cameraman<br>
	&emsp;* 1 Technical Director<br>
	&emsp;* 1 Video Assistant
	</p>
	
	<br>
    </div>
  </div>
  <div class="column concert">
    <div class="content">
    <img src="resources/services/con1.png" alt="CONCERT" style="width:100%">
      <center><h4>CONCERT</h4></center>
      <center><b>Small Venue Performance: </b><br><p style="color:red">Basic Package - ₱60,000</p></center>
  <p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 1 HD Camera<br>
	&emsp;* Video Edit<br>
	&emsp;* 2 Tripod <br>
	&emsp;* 1 Audio mixer <br>
	&emsp;* 2 Cameraman<br>
	&emsp;* 1 Technical Director<br>
	&emsp;* 1 Video Assistant
	</p>
	<br><br><br>
    </div>
  </div>
  <div class="column film">
    <div class="content">
    <img src="resources/services/film.png" alt="film" style="width:100%">
      <center><h4>FILM - TELEVISION</h4></center>
      <center><b>3 Camera Setup - </b><br><p style="color:red">₱50,000 per day</p></center>
	<p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 3 HD/4k Camera<br>
	&emsp;* 4 Wireless Lapel<br>
	&emsp;* 5 LED Video Light <br>
	&emsp;* 2 Boom Mic  <br>
	&emsp;* 3 Tripod<br>
	&emsp;* 3 Cameraman<br>
	&emsp;* 1 Technical Director<br>
	&emsp;* 2 Video Assistant
	</p><br><br>
    </div>
  </div>
  <div class="column esports">
    <div class="content">
    <img src="resources/carousel/ftgcarousel.png" alt="esports" style="width:100%">
      <center><h4>E-SPORTS</h4></center>
      <center><b>Basic Package - Player Spotlight</b><br><p style="color:red">1-Camera Setup - ₱15,000</p></center>
	<p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 1 HD Camera <br>
	&emsp;* 1 LED Video Light <br>
	&emsp;* 2 Boom Mic  <br>
	&emsp;* 1 Tripod<br>
	&emsp;* 1 Cameraman<br>
	&emsp;* 1 Video Editor<br>
	</p><br><br><br>
    </div>
  </div>
  
  <div class="column seminar">
    <div class="content">
      <img src="resources/services/seminar.png" alt="seminar" style="width:100%">
      <center><h4>SEMINAR</h4></center>
      <center><b>2 Camera setup -</b><br><p style="color:red"> ₱25,000</p></center>
	<p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 2 HD Camera <br>
	&emsp;* 1 LED Video Light <br>
	&emsp;* Live feed video  <br>
	&emsp;* Cable wires<br>
	&emsp;* 2 Cameraman<br>
	&emsp;* Tripod<br>
	&emsp;* Editor <br>
	&emsp;* Wireless <br>&emsp;Communication<br>
</p><br>
    </div>
  </div>
  <div class="column anniversary">
    <div class="content">
    <img src="resources/carousel/ftgcarousel.png" alt="anniversary" style="width:100%">
      <center><h4>ANNIVERSARY</h4></center>
      <center><b>Gold Package -</b><br><p style="color:red"> ₱25,000</p></center>
	<p>
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 2 HD Camera <br>
	&emsp;* 1 LED Video Light <br>
	&emsp;* Switcher  <br>
	&emsp;* Cable wires<br>
	&emsp;* 2 Cameraman<br>
	&emsp;* Tripod<br>
	&emsp;* Video Edit <br>
	&emsp;* Audio Mixer<br>
	</p><br><br>

    </div>
  </div>
  <div class="column esports">
    <div class="content">
    <img src="resources/services/gaming.png" alt="esports" style="width:100%">
      <center><h4>E-SPORTS</h4></center>
      <center><b>Standard Package - Team Feature:</b><br><p style="color:red">2-Camera Setup -<br> ₱30,000</p></center>
	
	<b>&ensp;Inclusions:</b><br>
	&emsp;* 2 HD Camera <br>
	
	&emsp;* Streaming Encoder <br>
	&emsp;* Cable wires<br>
	&emsp;* 2 Cameraman<br>
	&emsp;* Tripod<br>
	&emsp;* Video Edit <br>
	&emsp;* Audio Mixer<br>
	</p><br>
    </div>
  </div>

  <div class="column wedding">
    <div class="content">
      <img src="resources/services/wedding.png" alt="wedding" style="width:100%">
      <center><h4>WEDDING</h4></center>
      <center><b>4 Camera Setup</b><br><p style="color:red"> ₱60,000</p></center>
	
	<b>&ensp;Inclusions:</b><br>
	&emsp;* Live Feed Recording  <br>
	&emsp;* 4 HD Camera <br>
	&emsp;* Photographer<br>
	&emsp;* 4 Cameraman<br>
	&emsp;* Wireless Comms.<br>
	&emsp;* Video Edit <br>
	&emsp;* Wireless Video System<br>
	&emsp;* Audio Mixer<br>
	&emsp;* Same day edit <br>&emsp;(additional ₱20,000)
	<br><br>
    </div>
  </div>
  <div class="column film">
    <div class="content">
    <img src="resources/services/opera.png" alt="opera" style="width:100%">
      <center><h4>FILM - OPERA PLAY</h4></center>
      <center><b>3 Camera Setup</b><br><p style="color:red"> ₱35,000</p></center>
	
	<b>&ensp;Inclusions:</b><br>
	&emsp;* Live Feed Recording  <br>
	&emsp;* 3 HD/4K Camera <br>
	&emsp;* 3 Tripod<br>
	&emsp;* 3 Cameraman<br>
	&emsp;* Wireless Comms.<br>
	&emsp;* 3 Wireless lapel <br>
	&emsp;* 2 Video Assistant<br>
	&emsp;* Audio Mixer<br>
	&emsp;* 1 Technical Director 
	<br><br><br>
    </div>
  </div>
  
</div>
<br>
</div>

<br>
							
	<h2 class="h-font text-center fw-bold">Make a Reservation<div class="h-line fw-bold mt-2"></div></h2>
    <br><div class="contact-form mt-6" id="contact-form">
        <div class="container from-bottom">
            <div class="content">
                <div class="left-side from-left">
                    <div class="topic-text">***</div>
                    <p>Check out FTG's Services in the services page</p>
                <form method="POST" role="form">
                    <div class="form-group">
                        <input type=text name="name" id="name" required type="text" class="form-control" placeholder="Enter your name">
                    </div><br>
                    <div class="form-group">
                        <input type=email name="email" id="email" required type="text" class="form-control" placeholder="Enter your email">
                    </div><br>
                    <div class="form-group">
                        <input type=text name="contact" id="contactnumber" required type="text" class="form-control" placeholder="Enter your contact number">
                    </div><br>
                    <div class="form-group message-box">
                        <textarea name="remark" id="remark" required class="form-control" placeholder="Additional Remarks:"></textarea>
                    </div><br>
                    <center><div class="button">
                        <input type="submit" name ="send" class="btn btn-lg rounded-3 custom-bg my-2">
                    </div></center>
              
                </div>
				<div class="right-side from-right">
                    <div class="topic-text">Event Form</div>
         
                    <div class="form-group">
                        <b><label>Select package:</label></b>
				&emsp;<select name="package">
				<option value="sel">Select package...  </option>
                <option value="wed1">Wedding - 4 Camera Setup</option>
                <option value="deb1">Debut - 2 Camera Setup</option>
                <option value="con1">Concert - Basic Package</option>
				<option value="anniv1">Anniversary - Silver Package</option>
                <option value="anniv2">Anniversary - Gold Package</option>
                <option value="film1">Film - Television Series</option>
                <option value="film2">Film - Opera Play</option>
				<option value="esp1">E-sports - Basic Package</option>
                <option value="esp2">E-sports - Standard Package</option>
				</select>
                </div>
                <div>
                <label><b>Event Reservation Date:<b></label>
                &emsp;&emsp;&emsp;<input type="date" name="event_date" id="event_date" placeholder="d/m/Y">
                </div>
				<br>
				<br>
                <div>
				<div class="topic-text">Schedule your appointment </div>
                <div>
				<br>
                <label><b>Appointment Date:</b></label>
                &emsp;&emsp;<input type="date" name="appointment_date" id="appointment_date" placeholder="d/m/Y">
                </div><br>
                <div>
                <label>Appointment Time: </label>
                 
				&emsp;&emsp;&emsp;&emsp;<select name="appointment_time">
				<option value="1">Select time...  </option>
                <option value="2">07:00 AM</option>
                <option value="3">08:00 AM</option>
                <option value="4">09:00 AM</option>
				<option value="5">10:00 AM</option>
                <option value="6">11:00 AM</option>
                <option value="7">12:00 NN</option>
                <option value="8">01:00 PM</option>
				<option value="9">02:00 PM</option>
				<option value="10">03:00 PM</option>
				<option value="11">04:00 PM</option>
				<option value="12">05:00 PM</option>
				<option value="13">06:00 PM</option>
				<option value="14">07:00 PM</option>
				<option value="15">08:00 PM</option>
				<option value="16">09:00 PM</option>
				<option value="17">10:00 PM</option>
				</select><br><br>
                </div>
                </form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Connect to your database
  $conn = new mysqli('localhost', 'root', '', 'ftg_multimedia');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);

  
$contact = $conn->real_escape_string($_POST['contact']);
  $remark = $conn->real_escape_string($_POST['remark']);
  $package = $conn->real_escape_string($_POST['package']);
  $event_date = $conn->real_escape_string($_POST['event_date']);
  $appointment_date = $conn->real_escape_string($_POST['appointment_date']);
  $appointment_time = $conn->real_escape_string($_POST['appointment_time']);

  $sql = "INSERT INTO reservations (name, email, contact, remark, package, event_date, appointment_date, appointment_time)
          VALUES ('$name', '$email', '$contact', '$remark', '$package', '$event_date', '$appointment_date', '$appointment_time')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reservation submitted successfully!');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
                </div>
            </div>

        </div>
    </div>
	




<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var regex = /^[\w.+\-]+@gmail\.com$/; // Modified regex to match only @gmail.com
    if (!regex.test(email)) {
      alert("Please enter a valid Gmail email address.");
      return false;
    }
    return true;
  }

</script>

</body>
</html>

            </div>
            
        </div>
    </div>

    <?php require ('./inc/footer.php'); ?>
    
    
    <!-- Scroll to Top Button  -->
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Swiper JS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <!-- Custom Js Link -->
    <script src="js/main.js"></script>

    <script>
        // Highlighted Navigation Link
        $(function() {
            $('#navbarNav ul li a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('current');
                }
            });
        });
        
        //Scroll to Top Button
        const toTop = document.querySelector(".to-top");
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } 
            else {
                toTop.classList.remove("active");
            }
        });


        }
    </script>
    
    <script>
        // Reveal Elements on Scroll
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 50,
        });
        
        ScrollReveal().reveal('.titles', { delay: 5, origin: 'top' });
        ScrollReveal().reveal('.from-bottom', { delay: 50, origin: 'bottom' });
    </script>

    <script>
        
    </script>
</body>

</html>