<?php
// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanderLog</title>


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/css_ToursAndTravel.css">
    <script src="./javascript/script.js" defer></script>
	<script src="./css/journal.js" defer></script>
</head>
<body>
    <div class="logo">
    <center><img src="./images/wd.png" alt="WanderLog"> </center> 

    <?php 
    echo '<center><ul><span class="welcome-message">Welcome, ' . $_SESSION["user_name"] . '!</span></ul></center>';
    ?>
    <br>

    </div>
    <div class="navbar">
        <span class="menu-btn material-symbols-outlined">menu</span>
        <nav> 
            <ul class="links">
                
                <span class="close-btn material-symbols-outlined">close</span>
                <li> <a href="index2.php">Home</a></li>
                 <li> <a href="ToursAndTravel.php">Tours and Travels</a></li>
                 <li> <a href="Post.php">Journal</a></li>
                 <li> <a href="about.php">About</a></li>
                 <?php
                 echo '<li><a href="logout.php">Logout</a></li>';
                 ?>
                
               
            </ul>
       </nav>



    </div>
<!-- Recommend Spots For Tours And Travel. --> 	
 <section class="recommended-spots">
    <center><h2>Recommended Travel Spot in Batangas</h2></center>
	<br>
    <div class="spot">
      <img src="./images/TheOldGrove.jpg" alt="TheOldGrove">
      <h3><i class="fa fa-map-marker" aria-hidden="true">&nbsp </i>TheOldGrove</h3>
      <p>The Old Grove Farmstead is a five-hectare farm located in Brgy Lodlod in Lipa, Batangas. This farm setting gives us the vibe of a Western country style, making you feel like you are in the Netherlands. </p>
	  <center><a href="#" class="comment-link" onclick="toggleCommentSection(this, event)">See Review</a></center>
      <div class="comment-section">
      <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Michael21: </strong>This Place is 100 percent Recommended, Great Place and Great Food.</p>
	  <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Raymond: </strong>Place is great and good for photo ops and for kids to enjoy and experience the animals.  There are many spots to sit and relax while appreciating the place.</p>
    </div>
  </div>
    <div class="spot">
      <img src="./images/Monte.jpg" alt="Monte Maria">
      <h3><i class="fa fa-map-marker" aria-hidden="true">&nbsp </i>Monte Maria</h3>
      <p>The Montemaria International Pilgrimage & Conference Centre, often known as Montemaria, is a township in Batangas City, Batangas, Philippines, and a Roman 
	  Catholic pilgrimage site. It is the location of the Mother of All Asia - Tower of Peace, the world's tallest statue of the Virgin Mary.</p> 
        <center><a href="#" class="comment-link" onclick="toggleCommentSection(this, event)">See Review</a></center>
      <div class="comment-section">
      <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>JoseManuel: </strong>Wonderful views and structure.. however they are remodeling the interior and going up is off limits until farther notice.</p>
    </div>	  
    </div>
	  <div class="spot">
      <img src="./images/fantasyworld.jpg" alt="Fantasy World">
      <h3><i class="fa fa-map-marker" aria-hidden="true">&nbsp </i>Fantasy World</h3>
      <p>A Castle Sits Atop on a hill in the Philippines, its colorful walls adding an unexpected pop of color to the surrounding greenery. The stalwart structure, which looks like an image straight from a fairytale, seems oddly out of place.</p>
	     <center><a href="#" class="comment-link" onclick="toggleCommentSection(this, event)">See Review</a></center>
      <div class="comment-section">
      <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Gloria23: </strong>Such a great time unwinding in this place. It makes you feel relax from a stressful week. Good job!.</p>
	  <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Alvin Trq: </strong>The place is great for photoshoot especially if you’re theme is an abandoned castle or palace. This is a perfect place for you.</p>
    </div>		
    </div>
	 <div class="spot">
      <img src="./images/Marian.jpg" alt="Marian Orchard Pilgrimage Center">
      <h3><i class="fa fa-map-marker" aria-hidden="true">&nbsp </i>Marian Orchard Pilgrimage Center</h3>
      <p>The Marian Orchard shall serve as a spiritual oasis that will promote the Roman Catholic religion through the propagation of Marian devotion and other religious activities that will inspire a renewal of FAITH.</p>
	   <center><a href="#" class="comment-link" onclick="toggleCommentSection(this, event)">See Review</a></center>
      <div class="comment-section">
      <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Daniel Pa: </strong>Beautiful and clean place. Must go to if your looking for a peaceful quiet place to clear your mind. Quite close to the highway so can easily be found.</p>
	  <p><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp <strong>Ivan12: </strong>Really Cool Place to Visit.</p>
    </div>	
    </div>
  </section>
 <!-- Number Navigation --> 
    <footer>
        <div class="pagenum">
            <a href="#">1</a>
            <a href="ToursAndTravel2.php">2</a>
			<a href="#">3</a>
        </div>
    </footer>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<!-- Popup Form -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup" id="popup">
        <span class="close-btn material-symbols-outlined">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay with us.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form action="login.php" method="post">
                  <div class="input-field">
                      <input type="text" name="emailaddress" required>
                      <label>Email</label>
                  </div>
              
                  <div class="input-field">
                      <input type="password" name="pw" required>
                      <label>Password</label>
                  </div>
              
                  <a href="#" class="forgot-pass">Forgot password?</a>
                  
                  <button type="submit">Log In</button>
              </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div> 
        
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create an account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2>SIGN UP</h2>
                <form action="reg.php" method="post">
                  <div class="input-field">
                      <input type="text" name="name" required>
                      <label>Name</label>
                  </div>
              
                  <div class="input-field">
                      <input type="email" name="emailaddress" required>
                      <label>Email</label>
                  </div>
              
                  <div class="input-field">
                      <input type="password" name="pw" required>
                      <label>Create password</label>
                  </div>
              
                  <div class="input-field">
                      <input type="password" name="cpw" required>
                      <label>Confirm password</label>
                  </div>
              
                  <div class="policy-text">
                      <input type="checkbox" id="policy" required>
                      <label for="policy">
                          I agree to the 
                          <a href="#">Terms and Conditions</a>
                      </label>
                  </div>
              
                  <a href="#" class="forgot-pass">Forgot password?</a>
              
                  <button type="submit">Sign up</button>
      
              
                  <!-- Optional: Display errors or notifications -->
                  <div id="error-message"></div>
              
                  <script>
                      // Optional: You can handle additional validation here using JavaScript
              
                      // Example: Display error message using JavaScript
                      function submitForm() {
                          var policyCheckbox = document.getElementById("policy");
              
                          if (!policyCheckbox.checked) {
                              document.getElementById("error-message").innerText = "Please agree to the Terms and Conditions.";
                              return false; // Prevent form submission
                          }
              
                          // Additional validation logic can be added as needed
              
                          // If all validation passes, the form will be submitted
                          return true;
                      }
                  </script>
              </form>
              
                <div class="bottom-link">
                        Already have an account?
                    <a href="" id="login-link">Login</a>
                </div>
            </div>
        </div>

    </div>