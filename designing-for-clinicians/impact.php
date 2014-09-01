<?php $pageTitle='Feedback'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Inspired EHRs | <?php echo $pageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="feedback-pg">
	
<div class="wrapper">
	<?php include './header.php'; ?>
				
	<section class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>Impact Stories</h2>
					<div class="subheader">Stories about Inspired EHRs: Desinging for Clinicians</div>
				</div>
			</div>
		</header>

		<section class="section" id="impact-sect">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<!--<h3>Impact</h3>
					<p>We want to hear how <em>Inspired EHRs</em> has helped you or team.</p>
					
					<div id="contact-area">
						<form method="post" action="feedback.php">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" required />
				
							<label for="email">Email</label>
							<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" required />
							
							<label for="message">Story</label><br />
							<textarea name="message" rows="20" cols="20" id="message" required></textarea>

							<input type="text" name="blank" style="display: none;">

							<input type="submit" name="submit" value="Submit" class="button" />
						</form>
						</div>
						<?php
							//form data
							//$name = $_POST['name'];	
							//$email = $_POST['email'];
							//$message = $_POST['message'];
							//$blank = $_POST['blank'];
							//$to = 'feedback@inspiredehrs.org';
							//$from = $email;
							//$from = 'feedback@inspiredehrs.org';
							//$subject = 'Impact story about Inspired EHRs: Designing for Clinicians';
							

							//$body = "From: " . $name . "\n";
							//$body .= "Email: " . $email . "\n \n"; 
							//$body .= "Message: \n" . $message . "\n";

							//$headers = "From:" . $from . "\r\n";
							//$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

							//if($_POST['submit'] && $blank == ''){
								//mail($to, $subject, $body, $headers);

								//if(mail($to, $subject, $body, $headers)) {
									//echo "<p>Thanks for your email. We'll get back to you ASAP.</p>";
								//} else {
									//echo "<p>There was an issue, try sending again.</p>";
								//}
							//} else if($_POST['submit'] && $blank != '' ) {
								//echo "<p>Sorry, your message looks like spam, so it was not sent.</p>";
							//}
						?>
					</div>-->

					<div id="impact-stories">
						
						<div class="impact">
							<p>"I sent this around to our User Experience team here, and there was a lot of discussion and appreciation for the work you’ve done."</p>
							<p class="quote-author"><em>&mdash; EPIC Software Developer</em></p>
						</div>
						<hr>
						<div class="impact">
							<p>"We have already referenced your design for the allergies list. Your human factors and design principle sections has convinced a lot of my bosses to go in a new direction with design."</p>
							<p class="quote-author"><em>&mdash; Marshfield Clinic User Experience Designer</em></p>
						</div>
						<hr>
						<div class="impact">
							<p>"With your permission, I'd like to link to your GitHub repo and homepage.  Your work has been invaluable to my team. We are actually building a product which will make your work invaluable to a lot of developers, so linking to your stuff will be great."</p>
							<p class="quote-author"><em>&mdash; Doctrly startup, an API to allow developers to easily create EHR applications</em></p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php include './footer.php'; ?>

					</div>
				</div>
			</div>
		</section>

	</section>
</div><!--end wrapper-->
</body>
</html>