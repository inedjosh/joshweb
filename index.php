
<!DOCTYPE html>
<html>
<head>
	<title>Inedu Joshua</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

    <link rel="stylesheet" href="main.css">
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="default.css">
	<link id="theme-style" rel="stylesheet" type="text/css" href="">
</head>
<body>

	<section class="s1">
		<div class="main-container">
			
			<div class="greeting-wrapper" style="position:relative;">

		
				<h1>Hey, I'm Inedu Joshua</h1>
			</div>


			<div class="intro-wrapper">
				<div class="nav-wrapper">

					
					<a href="index.php">
						<div class="dots-wrapper">
							<div id="dot-1" class="browser-dot"></div>
							<div id="dot-2" class="browser-dot"></div>
							<div id="dot-3" class="browser-dot"></div>
						</div>
					</a>
					

					<ul id="navigation">
						<li><a href="contact.php">Contact</a></li>

					</ul>
				</div>

				<div class="left-column">
					<img id="profile_pic" src="img\resize.jpg">
					<h5 style="text-align: center;line-height: 0;">Theme Switcher</h5>
                    <p id="theme-p">choose your prefered theme color</p>
					<div id="theme-options-wrapper">
						<div data-mode="light" id="light-mode" class="theme-dot"></div>
						<div data-mode="blue" id="blue-mode" class="theme-dot"></div>
						<div data-mode="green" id="green-mode" class="theme-dot"></div>
						<div data-mode="purple" id="purple-mode" class="theme-dot"></div>
					</div>

				
				</div>

				<div class="right-column">
					<div class="icon_div">
						<img class="welcome_icon" src="img\icons8-waving-hand-emoji-96.png" alt="">
					</div>
					<div id="preview-shadow">
						<h6 class="center upper">welcome to my world of tech</h6>
						<p class="it's my world of seamless possibilities where everything is possible. </p>
					</div>
				</div>
		
			</div>
		</div>
	</section>

	<section class="s2 padded">
		<div class="main-container">

			<div class="about-wrapper">
				<div class="about-me">
					<h6 class="center">TOP EXPERTISE</h6>

					<p class="center">Fullstack Developer</p>

					<div id="skills">
						<ul>
							<li>HTML/CSS</li>
							<li>PHP</li>
						
						</ul>

						<ul>
							<li>JAVASCRIPT</li>
							<li>REACT</li>
							
						</ul>

					</div>
					<hr>
					<div class="quote">
						<p>Do you have a job you'll love me to handle?</p>
						<a href="<?php echo $row['whatsapp']; ?>" class="btn">let's Chat <i class="fab fa-whatsapp social-icon"></i></a>
					</div>
				

				</div>

				
				<div class="social-links ">
				<h6 class="upper center">About me</h6>
					<p>
                                          Welcome to my profile, it's indeed a great privilege to have you here out of the many others you could have visited.

I am Inedu Joshua, am a full stack web developer, I develop with HTML CSS JAVASCRIPT and PHP.

I'm always excited to take on new projects as it enables me deliver my proficiency in turning ideas into workable and productive whole. 

I started this journey early 2020 with much learning from books and online classes from tons of developers plus a certification from mimo on HTML, CSS and JAVASCRIPT in April and from Google on digital marketing in 2019, and its really been an exciting ride, taking up jobs has been the most thrilling.

I have good understanding of customer behavior especially as it concerns the web market and has really helped in creating solutions to business needs and even served as milestones to achieving set goals and objectives. In development I ensure I follow a guided process with clients to ensure full satisfaction as well as staying within the obtainable in the sector covering from ideation down to deployment, I ensure my clients are well grounded about the process and convinced also of the innovations in fine tuning their ideas to bring about a complete whole.

From designs to markup, server side structuring and functionalities I ensure no process is left out in this fine tuning process and as well staying withing the set plan to achieve set goals in different ways. I ensure it doesn't just end at producing good looking web apps but productive apps that up convert visiting customers to buying customers and keep them coming by enabling good user experience.

Lest I forget to say I enjoy reading a lot and would be glad to get more recommendations on books you got busted on.

I hope I kept you hooked on my profile enough to convince you for the deal.

Warm regards.

                                         </p>
				</div>
			</div>

		</div>
	</section>
	<!-- <section class="s1">
	<div class="main-container">
		<h5 class="center upper">portfolio</h5>
		
	</div>
	</section> -->
	

	<section class="s2">
		<div class="main-container">
			<a href=""></a>
			<h5 class="upper center">Get In Touch</h5>

			<form id="contact-form" method="POST" action="">
				<a name="contact"></a>

				<label>Name</label>
				<input class="input-field" type="text" name="name"  id="name">
				
				<br>
				<label>Subject</label>
				<input class="input-field" type="text" name="subject"  id="subject">
				
				<br>
				<label>Email</label>
				<input class="input-field" id="email" type="text"  name="email">
				
				<br>

				<label>Message</label>
				<textarea class="input-field" id="msg"  name="msg"></textarea>
				
				<br>
				<input id="submit-btn" type="submit" name="submit" value="Send">
			</form>
		</div>
	</section> 
    <footer class="s1 footer">
        
        <p>copyright &copy; Inedu Joshua 2020</p>
    </footer>
	<script type="text/javascript" src="main.js"></script>
	<script src="form.js"></script>
</body>
</html>
