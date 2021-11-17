
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
						<p class="">it's my world of seamless possibilities where everything is possible.</p>
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

					<p class="center">Front End Web & Mobile Developer</p>

					<div id="skills">
						<ul>
							<li>JAVASCRIPT</li>
							<li>React JS</li>
							
						
						</ul>

						<ul>
							<li>React Native</li>
							<li>Redux</li>
							
						</ul>
						<ul>
							<li>Git</li>
							<li>Firebase</li>
							
						</ul>

					</div>
					<hr>
					<div class="quote">
						<p>Do you have a job you'll love me to handle?</p>
						<a href="https://wa.me/2349064819648" class="btn">let's Chat <i class="fab fa-whatsapp social-icon"></i></a>
					</div>
				

				</div>

				
				<div class="social-links ">
				<h6 class="upper center">About me</h6>
					<p>
                                         
						I am a Front End Software developer with industry experience building websites, web applications and mobile applications.

						I specialize in JavaScript and have professional experience working with React, Firebase and React Native.
						
						Having undergone tons of training both onsite and online I have built competence and technical know how how in development and an amazing skill set which include:
						-CSS Layout / Grids
						-Mobile Web Performance
						-Cross-Browser Testing
						-cross platform Testing
						-Interaction or User Interface Design
						-User Experience
						-State management with redux
						-Mobile App Performance
						-Mobile UI
						


                                         </p>
				</div>
			</div>

		</div>
	</section>
	<!-- <section class="s1">
	<div class="main-container">
		<h5 class="center upper">portfolio</h5>
		<p class="center ">Check out my amazing projects</p>

		
	</div>
	</section> -->
	

	<section class="s2">
		<div class="main-container">
			<a href=""></a>
			<h5 class="upper center">Get In Touch</h5>

			<form id="contact-form" action="https://formcarry.com/s/wlt_l788JRU" method="post">
				<a name="contact"></a>
				<input type="hidden" name="accessKey" value="55186873-b58b-4675-b023-53ceb1ddc8a3">
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
				<textarea class="input-field" id="message"  name="message"></textarea>
				<!-- <input type="hidden" name="redirectTo" value="thankyou.html" > -->
				<br>
				<input id="submit-btn" type="submit" name="submit" value="Send">
			</form>
		</div>
	</section> 
    <footer class="s1 footer">
        
        <p> &copy; Inedu Joshua 2021</p>
    </footer>
	<script type="text/javascript" src="main.js"></script>
	<script>

		let form = document.getElementById('submit-btn')
		form.addEventListener('msg', () => {
			location.reload()
			alert(1)
		})
	</script>
	<script src="form.js"></script>
</body>
</html>
