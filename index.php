<!DOCTYPE HTML>
<html>
<head>
  <title>சு . வெங்கடேசன்</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript" src="lib/jquery-3.4.1.min.js"> </script>
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
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="vg.php">Video Gallery</a></li>
          <li><a href="nf.php">News Feed</a></li>
          <li><a href="petition.php">Petitions</a></li>
		  <li><a href="contact.php">Suggestions</a></li>
		  <li><a href="book.php">Books</a></li>
			<li><a href="jobportal.php">Jobs</a></li>
		</ul>
      </div>
    </div>
	<!-- Slideshow container -->
<div class="slideshow-container" style="float:left" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="v6.jpg" width="180%" height="550" alt="Su.Venkatesan" >
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="v2.jpg" width="180%" height="550" alt="Su.Venkatesan" >
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="v1.jpg" width="180%" height="550" alt="Su.Venkatesan">
    <div class="text"></div>
  </div> 
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
$(window).load(function(){
 $('.cntnr').find('img').each(function(){
  var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
  $(this).addClass(imgClass);
 })
})
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
    
    <div id="site_content">


	  <div id="sidebar_container" >
        <div class="sidebar">
          <div class="sidebar_top">
		  </div>
          <div class="sidebar_item" >
            <!-- insert your sidebar items here -->
			
            <h3>Latest News</h3>
            <marquee behavior="scroll" direction="up" height="150" 
			scrollamount="2" scrolldelay="10">
			<h4>Latest updates of Su.Venkatesan</h4>
            <h5></h5>
			<p>On Date:
			<script> document.write(new Date().toLocaleDateString()); </script>
			</p>
			<p>Visits Thiagarajar College of Engineering for honouring the APPATHON 2020 Event<br>1/1/2020: <br> Wish you a very happy and prosperous New Year<br>25/12/2019 :<br>Wish you a Merry Christmas<br></p>
          </marquee>
		  </div>
          <div class="sidebar_base"></div>
        </div>
	</div>
      <div id="content" >
        <!-- insert the page content here -->
        <h1><i>MP PORTAL - </i><strong><b>S VENKATESAN</b></strong></h1>
		<p>S. Venkatesan also known as Su. Venkatesan is a Tamil writer from Tamil Nadu, India and Tamil Nadu State C
		ommittee member of CPI His debutant novel Kavalkottam published in 2008 was awarded the Sahitya Akademi Award for Tamil in 2011.
		The film Aravaan is based on items. His second novel 'Veera 
		Yuga Nayagan Velpari' was serialised in Tamil popular magazine Ananda Vikatan. 'Veera Yuga Nayagan Velpari' is 
		the second Novel after Ponniyin Selvan to make a big craze between the readers at that time. He is the general secretary of 
		the Tamil Nadu Progressive Writers and Artists Association. S. Venkatesan contested as CPI(M) candidate in 
		the General elections 2019 from Madurai.
		He was elected to the Lok Sabha with a margin of 1.39 Lakhs of votes.</p>
        <p></p>
      </div>
    </div>

</div>
    <div id="content_footer"></div>
    <div id="footer" style="float:left;">
      <p><a href="index.php">Home</a> | <a href="vg.php">Video Gallery</a> | <a href="nf.php">News Feed</a> | <a href="petition.php">Petitions</a> | <a href="contact.php">Suggestions</a> | <a href="book.php">Books</a></p>
      <p>Copyright &copy; Venkatesan</p>
    </div>
  </div>
  
  <script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"af5b0c29-c519-4b2a-9de8-5ac57d05208c"});a=!0}}}(window,document);</script>
</body>
</html>
