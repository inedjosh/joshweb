<?php;
include('process.php');
?>
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
			<div class="alert alert-div"><?php echo $success ; ?></div>
		
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
						<p class="text_home_arrange">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus nam amet rem ad dolore magnam Lorem ipsum dolor sit amet. </p>
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
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate laboriosam nostrum, quis magnam esse quasi voluptates aspernatur debitis aliquid delectus dolorem odio sed hic recusandae blanditiis ipsum ea iste dolor accusantium, soluta omnis id cumque praesentium! Qui consectetur sit iure vitae voluptatem. Nisi quidem magnam maiores eius, eum vero.
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

			<form id="contact-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				<a name="contact"></a>

				<label>Name</label>
				<input class="input-field" type="text" name="name" value="<?php echo &name ?> id="name">
				<span class="red err"><?php echo $name_err ?></span>
				<br>
				<label>Subject</label>
				<input class="input-field" type="text" name="subject" value="<?php echo & subject ?>  id="subject">
				<span class="red err"><?php echo $subject_err ?></span>
				<br>
				<label>Email</label>
				<input class="input-field" id="email" type="text" value="<?php echo &email ?>  name="email">
				<span class="red err"><?php echo $email_err ?></span>
				<br>

				<label>Message</label>
				<textarea class="input-field" id="msg" value="<?php echo &msg ?>  name="msg"></textarea>
				<span class="red err"><?php echo $msg_err ?></span>
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
