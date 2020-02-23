<!DOCTYPE HTML>
<html>

<head>
  <title>Public Forum</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">சு . <span class="logo_colour">வெங்கடேசன்</span></a></h1>
		  <h2> |     எழுத்தாளர்   |       மக்களவை உறுப்பினர்            |     மதுரை        |     தமிழ்நாடு        |</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="vg.php">Video Gallery</a></li>
          <li><a href="nf.php">News Feed</a></li>
          <li><a href="petition.php">Petitions</a></li>
          <li class="selected"><a href="contact.php">Suggestions</a></li>
		  <li><a href="book.php">Books</a></li>
		  <li><a href="jobportal.php">Jobs</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
   <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Latest News</h3>
            <marquee behavior="scroll" direction="up" height="250" 
			scrollamount="2" scrolldelay="10">
			<h4>Latest updates of Su.Venkatesan</h4>
            <h5></h5>
			<img src="venki1.jpeg">
			<p>ON DATE:
			<script> document.write(new Date().toLocaleDateString()); </script>
			</p>
			<p>Visits Thiagarajar College of Engineering for honouring the APPATHON 2020 Event<br>1/1/2020: <br> Wish you a very happy and prosperous New Year<br>25/12/2019 :<br>Wish you a Merry Christmas<br></p>
          </marquee>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
		<h1> Public Forum </h1>
		<iframe src="http://mdump.forumotion.com/" height="450" width="600">
		</iframe>
        <!-- insert the page content here -->
        <h1>Contact Us</h1>      
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>       
      </div>
    </div>
    <div id="content_footer">
	</div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="vg.php">Video Gallery</a> | <a href="nf.php">News Feed</a> | <a href="petition.php">Petitions</a> | <a href="contact.php">Suggestions</a> | <a href="book.php">Books</a></p>
      <p>Copyright &copy; Venkatesan</p>
    </div>
  </div>
  <script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"af5b0c29-c519-4b2a-9de8-5ac57d05208c"});a=!0}}}(window,document);</script>
</body>
</html>
