<!DOCTYPE HTML>
<html>

<head>
  <title>Video Gallery</title>
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
          <li class="selected"><a href="vg.php">Video Gallery</a></li>
          <li><a href="nf.php">News Feed</a></li>
          <li><a href="petition.php">Petitions</a></li>
          <li><a href="contact.php">Suggestions</a></li>
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
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">Speech 1</a></li>
              <li><a href="#">Speech 2</a></li>
              <li><a href="#">Speech 3</a></li>
              <li><a href="#">Speech 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
         <div class="sidebar_item" style="position:static;top:5;left:6;">
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
		  <p><br><a href="page.html">Read more</a></p>
          </div>
          
        </div>
      </div>
      <div id="content">
        <h1>Videos</h1>
		<p>This gallery contains all my speeches in the parliament assemblies and interviews on my recent keezhadi research</p>
		<p style="font-size:15px">Latest speech</p>
		</br>
		<iframe width="620" height="315" src="https://www.youtube.com/embed/EA-0Kieoii4"></iframe></br>
		<p style="font-size:15px">Tamil Vs Sanskrit </p>
		</br>
        <iframe width="620" height="315" src="https://www.youtube.com/embed/FTDs6tjNqpg"></iframe></br>
		<p style="font-size:15px">Democratic Spirit of the Tamil People is Stronger than Ever</p>
		</br>
		<iframe width="620" height="315" src="https://www.youtube.com/embed/FY2i-SMmE3I"></iframe></br>
		<p style="font-size:15px">Keezhadi issues </p>
		</br>
		<iframe width="620" height="315" src="https://www.youtube.com/embed/8a2Hd-X2Mcs"></iframe></br>
		<p style="font-size:15px">Su Venkatesan speech on Keezhadi and Athi Varadar</p>
		</br>
		<iframe width="620" height="315" src="https://www.youtube.com/embed/G08ZoBrWkck"></iframe></br>        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="vg.php">Video Gallery</a> | <a href="nf.php">News Feed</a> | <a href="petition.php">Petitions</a> | <a href="contact.php">Suggestions</a> | <a href="book.php">Books</a></p>
      <p>Copyright &copy; Venkatesan</p>
    </div>
  </div>
  <script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"af5b0c29-c519-4b2a-9de8-5ac57d05208c"});a=!0}}}(window,document);</script>
</body>
</html>
