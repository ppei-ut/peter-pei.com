<!DOCTYPE html>
<html lang="en">

<head>
  <title>Peter-Pei.com</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html, body, h1, h2, h3, h4, h5, h6
    {
      font-family: "Roboto", sans-serif
    }
  </style>
  <link rel="stylesheet" href="style.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="app.js"></script>

</head>


<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="images/peterpei_full.jpg" style="width:100%" alt="Avatar">
        </div>
        <div class="w3-container">
          <!-- <div class="w3-display-bottomleft w3-container w3-text-black"> -->
          <h2>Peter Pei</h2>
          <p><i class="fa fa-mouse-pointer fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="index.html">peter-pei.com</a></p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Web Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>West Jordan, Utah</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ppei3011@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>801.712.6093</p>
          <a href="Peter Resume WebDev 2019.pdf" target="_blank"><span class="w3-tag w3-teal w3-round">Download Resume</span></a>
          <hr>

          <p class="w3-large"><b><i class="fa fa-cog fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <ul>
              <li>HTML | CSS</li>
              <li>Javascript</li>
              <li>PHP | MySQL</li>
              <li>AJAX | JQuery</li>
              <li>Bootstrap</li>
              <li>Visual Studio Code</li>
              <li>Git</li>
              <li>CodePen</li>
              <li>Responsive design</li>
              <li>Adobe Photoshop | Illustrator | InDesign</li>
          </ul>
          <br>
        </div>
      </div><br>
      <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-container">
              <p class="w3-large"><b><i class="fa fa-comment fa-fw w3-margin-right w3-text-teal"></i>Feedback*</b></p>
              <div id="form-messages" class="w3-text-teal"></div>
              <form id="ajax-contact" method="post" action="mailer.php" name="feedback">
                <div class="w3-section">
                  <label>Name</label>
                  <input type="text" id="name" class="w3-input" style="width:100%;" name="name" value="<?php echo $name;?>" required>
                </div>
                <div class="w3-section">
                  <label>Email</label>
                  <input type="text" id="email" class="w3-input" style="width:100%;" name="email" value="<?php echo $email;?>" required>
                </div>
                <div class="w3-section">
                  <label>Message</label>
                  <input type="text" id="message" class="w3-input" style="width:100%;"  name="message" value="<?php echo $message;?>" required>
                </div>
                <button type="submit" class="w3-button w3-margin-bottom w3-teal w3-round" value="Send">Send</button>
              </form>
          </div>
      </div><br>
    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphics Product Technician / Good to Go! Graphics</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1998 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <ul>
            <li>Communicate & finalize art direction with clients</li>
            <li>Create print or web graphics using Adobe apps</li>
            <li>Execute prepress or pre-web file conversion process according to specs</li>
            <li>Coordinate with customer service & print department to meet deadlines</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Scoutmaster / Boy Scouts of America</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016 - 2018</h6>
          <ul>
              <li>Recipient of mentor awards given and choosen by Eagle rank scouts</li>
              <li>Wood Badge leadership training that enabled me to excel in leading & teaching</li>
              <li>Taught youth good values & life skills that will help them become good citizens in their communities</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Production Coordinator / AMC Colorgrafix</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1996 - 1998</h6>
          <ul>
              <li>Conducted meetings with clients to finalize print product and deadline</li>
              <li>Finalized mock layouts with clients & communicate art direction to the art department</li>
              <li>Schedule & finalize layout proofing with client</li>
              <li>Coordinated with art & print department for print production</li>
          </ul>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>Web Developer Certification</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2019</h6>
            <p>Salt Lake Community College</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Javascript | PHP </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Ongoing</h6>
          <p>w3chools.com & developer.mozilla.org
            </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Bachelor's Degree - Business Administration</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1990 - 1994</h6>
          <p>University of California: Riverside</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-margin-left w3-margin-top">
  <p>*AJAX Form submission | JQuery | PHP - Feedback form's source code available <a href="https://github.com/ppei-ut/peter-pei.com">here</a></p>
</footer>
</body>
</html>
