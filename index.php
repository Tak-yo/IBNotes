<?php require("script.php")?>
<?php 
   if(isset($_POST['submit'])){
      if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
         $response = "All fields are required";
      }else{
         $response = sendMail($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
<title>IBNotes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.disabled {
    pointer-events: none;
}
#the-canvas {
  border: 1px solid black;
  direction: ltr;
}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!--
  <h1>PDF.js 'Hello, world!' example</h1>

  <p>Please use <a href="https://mozilla.github.io/pdf.js/getting_started/#download"><i>official releases</i></a> in production environments.</p>
  
  <canvas id="the-canvas"></canvas>  
-->
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="w3images/avatar2.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>IBNotes</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#notes" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>NOTES</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
<!--   <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
    </div>
    </div>
  </header> -->

<!-- New Header -->
  
  <header id="portfolio">
    <a href="#"><img src="w3images/avatar2.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <h1><b>IBNotes</b></h1>
      <div class="w3-section w3-bottombar w3-padding-16">
        <span class="w3-margin-right">Filter:</span> 
        <button class="w3-button w3-black">ALL</button>
        <button class="w3-button w3-white"><img src="Icons/History.png" style="width:20px; vertical-align:middle;" class="w3-margin-right">History</button>
        <button class="w3-button w3-white w3-hide-small"><img src="Icons/Business.png" style="width:20px; vertical-align:middle;" class="w3-margin-right">Business</button>
        <button class="w3-button w3-white w3-hide-small"><img src="Icons/English.png" style="width:20px; vertical-align:middle;" class="w3-margin-right">English</button>
      </div>
    </div>
  </header>

  <!-- First PDF Grid -->
<div class="w3-row-padding">
  <!-- First notes -->
  <div class="w3-third w3-container w3-margin-bottom">
    <!-- Embed PDF with hover effect -->
    <object data="Notes/History/Auth States/Aims + Results of Hitler Policies.pdf?#scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" class="list w3-hover-opacity">
      <p>Your browser does not support PDFs. <a href="Notes/History/Auth States/Aims + Results of Hitler Policies.pdf">Download the PDF</a>.</p>
    </object>
    <!-- Description container -->
    <div class="w3-container w3-white">
      <p><b>Aims and Results of Hitler's Policies</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <!-- Second notes -->
  <div class="w3-third w3-container w3-margin-bottom">
    <!-- Embed PDF with hover effect -->
    <object data="Notes/History/Auth States/Aims + Results of Mao's Policies.pdf?#scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" class="list w3-hover-opacity">
      <p>Your browser does not support PDFs. <a href="Notes/History/Auth States/Aims + Results of Mao's Policies.pdf">Download the PDF</a>.</p>
    </object>
    <!-- Description container -->
    <div class="w3-container w3-white">
      <p><b>Aims and Results of Mao's Policies</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <!-- Third notes -->
  <div class="w3-third w3-container">
    <!-- Embed PDF with hover effect -->
    <object data="Notes/History/Auth States/Hitler Consolidation and Maintenance of Power.pdf?#scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" class="list w3-hover-opacity">
      <p>Your browser does not support PDFs. <a href="Notes/History/Auth States/Hitler Consolidation and Maintenance of Power.pdf">Download the PDF</a>.</p>
    </object>
    <!-- Description container -->
    <div class="w3-container w3-white">
      <p><b>Hitler's Consolidation and Maintenance of Power</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
</div>

  
  <!-- Second Photo Row-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="w3images/forest.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="w3images/lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
  <!--  
    <div class="w3-col m6">
      <img src="w3images/avatar2.png" alt="Me" style="width:20%">
    </div>
  -->
    <div class="w3-container">
      <img src="w3images/robot.jpg" alt="Me" style="width:50%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <hr>
    
  <!-- Contact Section -->
<!-- Contact Section -->
<div class="w3-container w3-padding-large w3-grey">
  <h4 id="contact"><b>Contact Me</b></h4>
 
  <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
    <div class="w3-third w3-dark-grey">
      <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
      <p>email@email.com</p>
    </div>
    <div class="w3-third w3-teal">
      <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
      <p>Chicago, US</p>
    </div>
    <div class="w3-third w3-dark-grey">
      <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
      <p>512312311</p>
    </div>
  </div>

  <hr class="w3-opacity">

  <form action="" method="post" enctype="multipart/form-data">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border" type="text" name="name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border" type="email" name="email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border" type="text" name="subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border" type="text" name="message" required>
    </div>
    <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>

    <?php
        if(@$response == "success"){
            ?>
                <p class="success">Email send successfully</p>
            <?php    
        }else{
            ?>
                <p class="error"><?php echo @$response; ?></p>
            <?php
        }
    ?>

  </form>
 
</div>


  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <!-- <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
      </p>
    </div> -->

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script src="//mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>

<script type="module">
  // If absolute URL from the remote server is provided, configure the CORS
  // header on that server.
  var url = 'Notes/History/Auth States/Aims + Results of Hitler Policies.pdf';

  // Loaded via <script> tag, create shortcut to access PDF.js exports.
  var { pdfjsLib } = globalThis;

  // The workerSrc property shall be specified.
  pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.mjs';

  // Asynchronous download of PDF
  var loadingTask = pdfjsLib.getDocument(url);
  loadingTask.promise.then(function(pdf) {
    console.log('PDF loaded');

    // Fetch the first page
    var pageNumber = 1;
    pdf.getPage(pageNumber).then(function(page) {
      console.log('Page loaded');

      var scale = 1.5;
      var viewport = page.getViewport({scale: scale});

      // Prepare canvas using PDF page dimensions
      var canvas = document.getElementById('the-canvas');
      var context = canvas.getContext('2d');
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      // Render PDF page into canvas context
      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      var renderTask = page.render(renderContext);
      renderTask.promise.then(function () {
        console.log('Page rendered');
      });
    });
  }, function (reason) {
    // PDF loading error
    console.error(reason);
  });
</script>

</body>
</html>
