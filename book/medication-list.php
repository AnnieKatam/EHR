<?php $pageTitle='Medication List'; ?>
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

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" >
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/jquery.fancybox.css" >
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="medication-list">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
	
	<section id="ch-2" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<span class="print-only"><hr/></span>
					<h2>2</h2>
					<h2>Medication List</h2>
					<div class="subheader"><p>Successful medication management is a key part of a patient’s health</p></div>
				</div>
			</div>
		</header>
		<section id="medication-lists" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>We will give you a guided tour of the medication list from a clinical perspective, explaining the principles of design and human factors in plain language as we go. This chapter offers a series of illustrations of Medication Lists good and not so good, our inspirational examples, and a playground of interactive widgets for you to explore and imagine with. In some cases, we'll provide code you can inspect, plug in, play with, improve or remold, and adopt in your EHR product.</p>
					<p>Medication lists come in many forms, but this chapter will only focus on three.</p>
				</div>
				<div class="med-list-type cf">
					<div class="two-thirds column"><p><strong>A simple list</strong> is made to be read quickly and scanned at a glance. It gives the reader, say a physician, a quick overview and what we call "situational awareness" of the patient. </p>
					<blockquote>"There are only two prescription medications for high blood pressure," or in another case, "We have twenty-four medications to keep in mind here.” </blockquote>
					<p>Good design can make this task easy; bad design can make it much harder.</p></div>
					<div class="one-third column">
						<a class="fancybox" href="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png"><img src="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="scale-with-grid" /></a>
					</div>
				</div>
				<div class="med-list-type cf">
					<div class="two-thirds column"><p><strong>An interactive table</strong> helps with a variety of tasks such as making treatment decisions or e-prescribing. The list allows for sorting and filtering, designed specifically for the user’s task at hand. It might even have connections to other data in the EHR such as diagnoses or lab values or vital signs. This list has the most information among our three examples here because the additional columns, some of which can be hidden, and the ability to sort and filter make this list very flexible. </p></div>
					<div class="one-third column">
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0000_table.png"><img src="./assets/images/examples/medication-list/UM_EHR_0000_table.png" class="scale-with-grid" /></a>
					</div>
				</div>
				<div class="med-list-type cf">
					<div class="two-thirds column"><p>A <strong>medication timeline</strong> harnesses the power of information visualization to 1) provide a chronological overview, 2) permit zooming and filtering, and 3) reveal details on demand. The overview provides context, perspective, and discovery ("Wow, all the meds were changed six months ago."). Zooming and filtering can offer answers to preliminary questions or hunches. Drilling for details can give the exact dates or related facts that could influence the medical chain of events.</p></div>
					<div class="one-third column">
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png"><img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>
		
		<section id="situational-awareness" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Situational Awareness</h3>
					<p>Situational awareness is having all the information you need to make effective decisions while being aware of what is happening in your vicinity, both now and in the near future. For a physician in the ambulatory setting doing visits to manage chronic disease, this means the physician takes in a broad overview of the patient and their key information in advance of walking into the room (establishing context), and then upon entering the exam room, mindfully attunes to the patient seated before them as the conversation unfolds (situational awareness).</p>
					<!--<div class="example" class="fig-2-1">
						<div class="ex-title">
							<span class="ex-type">Figure 2.1</span>
							<span class="ex-caption">Establishing context before entering the exam room </span>
						</div>
						<a class="fancybox" href="https://www.dropbox.com/s/hwv2zmou1kk17an/EstablishingContext_Sketch.png"><img src="https://www.dropbox.com/s/hwv2zmou1kk17an/EstablishingContext_Sketch.png" class="scale-with-grid" /></a>
					</div>
					<div class="example" class="fig-2-2">
						<div class="ex-title">
							<span class="ex-type">Figure 2.2</span>
							<span class="ex-caption">Situational awareness of the ongoing experience with the patient </span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/"><img src="./assets/images/examples/medication-list/" class="scale-with-grid" /></a>
					</div>-->
					<p>If the physician enters the exam room half-prepared because of time pressure or information chaos (information overload, underload, or wrong information), then he’ll be struggling to keep listening to the patient’s concerns. Instead, he’ll be searching the EHR trying frantically to fill information gaps. The patient will detect that distraction and may feel disconnected and not heard.</p>
					<div class="quicktip" id="medication-list-tasks">
						<div class="sidebar cf">
							<h5>Medication List Tasks</h5>
							<p class="preview">A number of tasks inform the design of medication list views. Some tasks demand particular features in the Medication List display.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>A number of tasks inform the design of medication list views. Some tasks demand particular features in the Medication List display. The three views we explore (simple list, interactive table, and medication timeline) are well adapted to several of these tasks. Other tasks might require specialized views.</p>
								<h6>For Prescribers</h6>
								<table class="sidebar-table" id="prescribers">
									<thead>
										<tr>
											<th>User Tasks</th>
											<th>Simple List</th>
											<th>Interactive Table</th>
											<th>Medication Timeline</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Scan the list quickly</strong></td>
											<td>●</td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Manage treatment decisions</strong> <br /><span>(see details to guide decisions, but not necessarily actions)</span></td>
											<td>●</td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Renew medications</strong> <br /><span>(for when to renew and for making adjustments)</span></td>
											<td></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Perform medication reconciliation</strong> <br /><span>(comparing two or more lists at transitions of care)</span></td>
											<td></td>
											<td>● <br /><span>but see later chapter</span></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Review time course</strong></td>
											<td></td>
											<td></td>
											<td>●</td>
										</tr>
										<tr>
											<td><strong>Manage temporary changes</strong>
												<p>brief courses (steroid bursts or intermittent treatment such as chemotherapy)</p>
												<p>adjustments around procedures (adjustments &amp; temporary meds needed around the time of surgery)</p>
											</td>
											<td></td>
											<td>● <br /><span>if sort by "expected stop date"</span></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Recall tried &amp; failed medication courses</strong> <br /><span>(what was effective, what wasn't, and why?)</span></td>
											<td></td>
											<td></td>
											<td>● <br /><span>but only if the details are recorded by the users</span></td>
										</tr>
										<tr>
											<td><strong>Assess adherence</strong> <br /><span>(are refills on time? are doses taken as planned?)</span></td>
											<td></td>
											<td></td>
											<td>● <br /><span>depends on additional data, such as dispense data or patient reporting</span></td>
										</tr>
									</tbody>
								</table>
								<h5>For Patients</h5>
								<table class="sidebar-table" id="patients">
									<thead>
										<tr>
											<th>User Tasks</th>
											<th>Simple List</th>
											<th>Interactive Table</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Scan or remember the list</strong></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Share the list with others</strong></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Restock the <a href="http://en.wikipedia.org/wiki/Pill_organizer" class="link" target="blank">pill organizer</a></strong> <br /><span>(to show which pills go in which slot of those little weekly boxes)</span></td>
											<td></td>
											<td>● <br /><span>barely</span></td>
										</tr>
										<tr>
											<td><strong>Remember daily doses</strong> <br /><span>(reminder for each daily dose, and "less than daily" doses too. Check them off when taken.)</span></td>
											<td>●</td>
											<td>●</td>
										</tr>
										<tr>
											<td><strong>Remember pharmacy refills</strong> <br /><span>(for coordinating trips to the pharmacy, and asking the doctor for renewals) <br /><em>Would need data from pharmacy, or from bottle</em></span></td>
											<td></td>
											<td>●</td>
										</tr>
										<tr>
											<td><strong>Update list at end of doctor visit</strong> <br /><span>(After all the changes, this is the final list as the patient leaves for home. The EHR or PHR should handle that automatically)</span></td>
											<td></td>
											<td>●</td>
										</tr>
									</tbody>
								</table>
							</div><!--end qt-content-->
						</div><!--end sidebar-->
						<div class="tip"></div>
					</div><!--end quicktip-->
				</div>
			</div>
		</section>
		<section id="simple-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3><a href="../simple-list/simple-list.html" target="blank">The Simple List</a></h3>
					</div>
					<p>The simple list has the bare-bones basic information. It is easy to scan visually to see the name, strength, and dosing of the medication. Alphabetical order makes it easy to find a particular item in the list.</p>
					<p>Look at <a href="#fig-2-1">Figure 2.1</a>. You can probably intuitively see that one looks cleaner than the other. That simplicity makes it easier to see the drug names, which are more important for getting a quick overview. The list shown here would work well for a physician or a patient, given its use of plain language, and avoiding the Latin abbreviations like “b.i.d.” instead of “twice a day.”</p>
					<div class="example" id="fig-2-1">
						<div class="ex-title">
							<span class="ex-type">Figure 2.1</span>
							<span class="ex-caption">Simple Medication List Makeover</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/SimpleList.png"><img src="./assets/images/examples/medication-list/SimpleList.png" class="scale-with-grid" /></a>	
					</div>
					<p>Patients can use this list for simple tasks. Primarily, they will use it as a reference to show the list to somebody else: at the office of another physician or dentist, to emergency room staff, or to their caregiver. To help patients fill up their weekly medication reminder box, a more detailed list might be needed, which illustrated the contents of each compartment, differentiating the time of day more clearly for each dose.</p>
					<p>A physician or nurse would expect this simple format in a progress note from a previous visit, in a dashboard overview, or in a visit summary from an outside EHR. It is a quick snapshot to be taken in at a glance. If the physician were doing a more complex task, like e-prescribing, then an interactive display with more information would be preferred, such as the interactive table or the medication timeline.</p>
					<div class="scenario" id="exam-room">
						<h5>Here’s a common scenario: Going into the exam room</h5>
						<p>A general internist is about to go into the exam room to see a 70-year-old man with sixteen chronic diseases (diabetes, high blood pressure, high cholesterol, knee arthritis, depression, insomnia, etc.) who is taking seventeen medications. He notes that the patient’s blood pressure is about ten points too high. He plans to ask the patient if he has been taking any home blood pressures, and what those results are.</p>
					</div>
						<p>In this scenario, the physician needs to have an overall awareness of the patient’s medications, chronic problems, latest vital signs, and pertinent lab just prior to starting the face-to-face visit. (“Is he taking insulin? Is he on any high-risk drugs like warfarin?”). That way, the physician is able to give their full attention to the patient telling their story, and to avoid looking away at the EHR to be reminded of the medications. We can call that big picture of getting the patient in mind – their past and current data, their story, and the emotional tone of the human encounter – “establishing context.”</p>
						<p>A single-page dashboard can display all that data. The physician just needs to see the name quickly. Avoid the temptation to add extraneous detail here. Concise lists are easier to read. The physician doesn’t need to see the quantity, number of refills, or the start dates in this task. If a brand name is used in the list, be sure to include the generic name as well. Dealing with brand vs. generic names and with compound names can be a challenge (see the following note).</p>
					<div class="quicktip" id="brand-generic">
						<div class="sidebar cf">
							<h5>Handling brand and generic names</h5>
							<p class="preview">This can get tricky. We’ll admit right now: there may not be one correct answer to the problem of whether to show the brand name<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>This can get tricky. We’ll admit right now: there may not be one correct answer to the problem of whether to show the brand name, the generic name, or both names by default in the list. It depends on the context, and the people in the conversation. Somewhere in the EHR, there should be easy access to both the generic and the brand name. </p>
								<p>Here are a few considerations.</p>
								<p>Ideally, both names would be available on demand at just the right time. If it’s a printed list, then you might have to choose one method of display. Alternatively, display both generic and brand name -- for example “furosemide (Lasix) 20 mg”. For consistency, sort alphabetically by the generic name.</p>
								<p>The brand name is frequently preferred in conversation because the generic name may be difficult to remember or pronounce, even for for physicians. Say these three times fast:</p>
									<ul class="disc">
										<li>adalimumab --- Humira</li>
										<li>ondansetron --- Zofran</li>
										<li>furosemide --- Lasix</li>
									</ul>
								<p>Some medications have so many different confusing brand names available, many of which are NOT interchangeable, that the problem is compounded. Diltiazem is an example. It may be available as:</p>
									<ul class="disc">
										<li>Cardizem</li>
										<li>Cardizem LA</li>
										<li>Cardizem CD</li>
										<li>Cartia XT</li>
										<li>Dilacor XR</li>
										<li>and it goes on and on...</li>
									</ul>
								<p>When discussing medications with the patient, physicians need to be aware of the name of the drug (generic versus brand) as the patient knows it. Patients may be more familiar with a particular drug name because it is the name on their medication container as dispensed by the pharmacy, or the name that is far easier to recall or pronounce.  When speaking with the patient, referring to both names initially may be helpful (“your furosemide, also called Lasix”).</p>
							<!--addlink to HF ch-->
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>We can make the medication list easier to read by <strong>emphasizing</strong> the name of the drug and <span class="grey">de-emphasizing</span> everything else. The physician’s eyes need to notice the name and strength without needing to read a whole line of text. The instructions (take 1 tablet daily) are secondary pieces of information. One method of denoting that instructions are of secondary importance is to use gray text that is perceptibly different while still readable.</p>
					<p>Use just enough difference to make it immediately apparent. If the difference in type is too great, it can be visually jarring. If the difference is too subtle, then it won’t be perceived by the <a href="./human-factors.php#how-people-perceive" target="blank">visual processing system<span class="print-only"> (See Chapter 7 Human Factors)</span></a> of the human brain. The features that the visual system detects readily are called “<a href="./human-factors.php#preattentive-attributes" target="blank">preattentive attributes<span class="print-only"> (See Chapter 7 Human Factors)</span></a>.”</p>
				</div>				
				<div id="jarring-example" class="example cf">
					<div class="one-third column">
						<h5>Too jarring</h5>
						<p><span class="jarring">lisinopril 20 mg</span> 1 tablet daily</p>
					</div>
					<div class="one-third column">
						<h5>Too subtle</h5>
						<p>lisinopril 20 mg <span class="dark-grey">1 tablet daily</span></p>
					</div>
					<div class="one-third column">
						<h5>Invisible to users with color blindness</h5>
						<p><span class="red">lisinopril 20 mg</span> 1 tablet daily</p>
					</div>
				</div>
				<div class="sixteen columns">
					<div class="quicktip" id="preattentive-attributes">
						<div class="sidebar cf">
							<h5>Preattentive Attributes</h5>
							<p class="preview">These are the little things people notice visually and understand quickly, so quickly that we have only noticed it at an unconscious level.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>These are the little things people notice visually and understand quickly, so quickly that we have only noticed it at an unconscious level. Try this little exercise to understand preattentive attributes. </p>
								<p><strong>How many 5’s do you find in each rectangle below?</strong></p>
								<img src="./assets/images/examples/medication-list/findthe5s.png" class="scale-with-grid" />
								<p>It’s much easier to spot the “5’s” in the right-hand figure because our brain perceives the bold characters without consciously thinking.</p>
								<p>Our visual brains combine very basic features (shape, size, orientation, motion) into “objects” that have some meaning to us (face, pole, box), and this happens very quickly below the level of our conscious awareness. Some features stand out more readily and get noticed more quickly than others. Those features are called preattentive attributes. Examples include color, size, shape, orientation, and motion. </p>
								<p><a href="./human-factors.php#preattentive-attributes" target="blank">Read more in the chapter on Human Factors Principles<span class="print-only"> (See Chapter 7 Human Factors)</span></a>.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
				</div>
				<div class="sixteen columns">
					<p>Alphabetize the list. The human brain expects a list of text items to be alphabetical in order to find a particular name quickly in a long list. “Are they taking warfarin?” Just jump to the “w” section.</p>
					<p>Reduce visual noise If a visual element doesn’t add data, or improve the perception or processing of information, then try leaving it out. See <a href="#fig-2-2">Figures 2.2 and 2.3</a></p>
				</div>
				<!--Gal 2-1 Reduce Noise-->
				<div class="one-half column">
					<div class="example" id="fig-2-2">
						<div class="ex-title">
							<span class="ex-type">Figure 2.2</span>
							<span class="ex-caption">Before: Needs improvement</span>
						</div>
						<a href="./assets/images/examples/medication-list/SimpleList_Noisy.png" class="fancybox"  data-fancybox-group="gallery-0">
							<img src="./assets/images/examples/medication-list/SimpleList_Noisy.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-2-3">
						<div class="ex-title">
							<span class="ex-type">Figure 2.3</span>
							<span class="ex-caption">After: We removed the grid to make it less visually noisy. Borders don't add information.</span>
						</div>
						<a href="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="fancybox"  data-fancybox-group="gallery-0">
							<img src="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="scale-with-grid" alt="Reduce Noise" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p>Now, let’s move on to the interactive table.</p>
				</div>
			</div>
		</section> <!--end section simple-list-->
		
		<section id="interactive-table" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3><a href="../interactive-table/interactive-table.html" target="blank">The Interactive Table</a></h3>
					</div>
					<p>This list allows the user to sort, filter, and otherwise adjust the display to the task at hand. The table is the standard workhorse in an EHR, and may sometimes be the only view. The table is flexible and powerful to fit a variety of tasks, but it can also be complex and may require more effort to learn and use.</p>
					<p><a href="#int-2-1">Interactive 2.1</a> shows an example of Interactive Table, sorted alphabetically by medication name by default. Columns can be sorted to fulfill various functions. Not every column needs to be sorted. For example, a physician would not find it helpful to sort on the “instructions” or quantity, but will want to sort on drug name (to scan alphabetically looking for a name), by dates (starting, renewal due, etc), diagnoses, and prescriber name.</p>
					<!--Fig 2-2 Interactive TAble Figure-->
					<div class="example" id="int-2-1">
						<div class="ex-title">
							<span class="ex-type">Interactive 2.1</span>
							<span class="ex-caption"><a href="../interactive-table/interactive-table.html" class="link" target="blank">Medication List Prototype – Try it out</a></span>
						</div>
						<a href="../interactive-table/interactive-table.html" target="blank"><img src="./assets/images/examples/medication-list/UM_EHR_0000_table.png" class="scale-with-grid" /></a>
					</div>
					<div class="scenario" id="high-bp">
						<h5>Returning to the clinical scenario: blood pressure (BP) too high</h5>
						<p>Upon entering the room, the doctor learns that the patient has been exercising regularly and eating a healthy diet. He is on seventeen medications, tolerating them well, and taking them consistently. His blood pressure is about 10 points too high today, and it has been high at home as well. The doctor wants to adjust the BP medications to achieve better control.</p>
						<p>The physician turns to the interactive medication list and sorts the medications by diagnosis. He can readily see that the patient is already on three medications for blood pressure. With some effort, the physician determines that all three medications are at their maximum dose, so a new medication will need to be added. He thinks the next drug of choice in this situation would be lisinopril, but he wonders, "Why isn't the patient on lisinopril already?"</p>
					</div>
					<p>Here’s the mental task for the physician (see <a href="#fig-2-2">Figure 2.2</a>): </p>
						<ul class="disc">
							<li><p>review the medication list</p></li>
							<li><p>identify medications for treating high BP (antihypertensives)</p></li>
							<li><p>determine if each medication has already reached its maximum dose</p>
								<ul class="disc"><li><p>if all the BP meds are at their maximum dose, then a new medication needs to be selected and added to the treatment plan</p></li>
								<li><p>if one or more of the medications is not at the maximum dose, then that medication dose could be increased (and it won’t cost a new co-pay, increase potential drug interactions, or increase the number of pills the patient has to take)</p></li></ul></li>
						</ul>
						<p>Sometimes, that is a lot of mental work. You can make the job much easier.</p>
					<!--Fig 2-3 mental model-->
					<div class="example" id="fig-2-4">
						<div class="ex-title">
							<span class="ex-type">Figure 2.4</span>
							<span class="ex-caption">Physician's mental work (<a href="./human-factors.php#cognitive-load" target="blank"> cognitive load<span class="print-only"> (See Chapter 7 Human Factors)</span></a>) adjusting BP meds</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" title="Physician's mental work (cognitive load) adjusting BP meds"><img src="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" class="scale-with-grid" /></a>
					</div>
					<p>You can reduce the risk of error (missing one in the list) and lighten the mental effort (<a href="./human-factors.php#cognitive-load" target="blank">cognitive load<span class="print-only"> (See Chapter 7 Human Factors)</span></a>) quite a bit with the use of smart design features.</p>
					<p>In order of complexity, here are some solutions:</p>
					<p>Follow <a href="https://sbmi.uth.edu/dotAsset/3fc9f186-7608-4b57-9ade-64a90e5916e0.pdf" target="blank">Effective Table Design guidelines<span class="print-only"> (http://tinyurl.com/puxl2y3)</span></a>. For example, make sure headers remain visible all the time and don’t scroll out of view. The most important columns should be on the left (drug names in this case). Make sure long names (like compound drugs) don’t get truncated without leaving some visual indication, and make the entire name quickly accessible. You can read more at the <a href="https://sbmi.uth.edu/dotAsset/3fc9f186-7608-4b57-9ade-64a90e5916e0.pdf" target="blank">SHARP-C website<span class="print-only"> (http://tinyurl.com/puxl2y3)</span></a>.</p>
					<p><strong>Allow sorting</strong> of the medication list <strong>by associated diagnosis</strong>. This groups them together and makes for far less reading, searching, and and relying on humans’ limited working memory (which can only hold 3 to 4 items). </p>
				
					<div class="quicktip">
						<div class="sidebar cf">
							<h5>Working Memory</h5>

							<p class="preview">Working memory is your memory that you need for less than a minute. This is sometimes called short term memory.<span class="elipsis">.. <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Working memory is your memory that you need for less than a minute. This is sometimes called short term memory.</p>
								<p>This is the type of memory we use when someone tells us a phone number and we have to keep it in our heads till we write it down or punch it into our phone. This type of memory takes focused thinking.</p>
								<p>A design tip is try not ask people to look at information on one page and then remember it and use it on another page.</p>
								<p><a href="./human-factors.php#working-memory" target="blank">Read more in our chapter on Human Factors Principles.</a></p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>There are potential barriers to this approach. This won’t work unless the physician or provider has selected the diagnosis (or diagnoses) for each medication. Here’s how it would work: When the physician prescribes a new medication, the system presents the current list of diagnoses or chronic problems so the physician can merely pick one or more from the list, or add a new one. That is a task that physicians have not been required to do, but there was no payoff until now. That work only needs to be done once for each medication, and it prevents a lot of future unnecessary mental work. Although it is more work to make the diagnosis assignment, physicians are already doing that for lab and imaging orders. With this sort-by-diagnosis feature, you are making the physician’s time investment pay off.</p>
					<div class="example" id="gal-2-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.2</span>
							<span class="ex-caption">How many current medications for hypertension? Which medication was previously used for hypertension?</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-list/UM_EHR_0001_sort-condition.png" title="Sorted by Diagnosis"><img src="./assets/images/examples/medication-list/UM_EHR_0001_sort-condition.png" class="scale-with-grid" alt="Sort and highlight by associated diagnosis" /></a>
									<div class="caption">Sorted by Condition</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-list/UM_EHR_0001_sort-condition.png" title="Filtered by Diagnosiss"><img src="./assets/images/examples/medication-list/UM_EHR_0003_condition-focus.png" class="scale-with-grid" alt="Sort and highlight by associated diagnosis" /></a>
									<div class="caption">Filtered by Condition</div>
								</div></li>
							</ul>
						</div>
					</div>

					<p>Make <strong>dose range information</strong> available <strong>with a click or a tap</strong> by linking the medication name to reference information about the medication. Drug product information databases include information about the recommended dose range for each indication or diagnosis. The maximum dose might be higher for heart failure than for hypertension.</p>
					<p>Make that same dose range information <strong>available at a glance by using an icon or simple color scheme</strong>. The simple color scheme “Black is the maximum dose, gray is less, lighter is lower. Red is over the maximum” reveals the relative dose in a way that meets the physician’s needs elegantly. No clicks. No reading. No math necessary.</p>
					
					<!--Fig 2-6 Lisinopril details-->
					<div class="example">
						<div class="ex-title" id="fig-2-5">
							<span class="ex-type">Figure 2.5</span>
							<span class="ex-caption">Shading displays information about the maximum dose</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0009_lisinopril.png" title="Shading displays information about the maximum dose"><img src="./assets/images/examples/medication-list/UM_EHR_0009_lisinopril.png" class="scale-with-grid" /></a>
					</div>

					<p>In any standard EHR table view, that maximum dose indicator could be added with a single small icon for each medication, shown here. This display would also help the patient better understand their medication. By creating visual designs like this that work equally well for physicians, nurses, and patients, we can make the EHR and associated care processes more understandable and transparent to the patient.</p>
					<div class="quicktip" id="max-dose">
						<div class="sidebar cf">
							<h5>Developer challenges for identifying "Maximum Dose" value</h5>
							<p class="preview">Some medications have different minimum and maximum dose ranges depending on the  diagnosis. For example, for lisinopril the<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Some medications have different minimum and maximum dose ranges depending on the  diagnosis. For example, for lisinopril the range is 10 to 40 mg daily for Hypertension, and 5 to 40 mg daily for heart failure.</p>
								<p>The maximum dose for gabapentin is 3600 mg daily for partial seizures or neuropathic pain, and 1800 mg daily for post-herpetic neuralgia. For gabapentin, the maximum dose must be adjusted downward for reduced renal function, and the maximum drops as renal function declines from a maximum of 1400 mg to 700 mg to 300 mg daily.</p>
								<p>For patients on dialysis, the maximum dose of gabapentin is 300 mg daily. Development teams will need to check with their pharmaceutical database provider to learn if these maximum dose data are available as discrete data as opposed to textual data.</p>
								<p>For pediatric dosing, age and weight introduce another variable in maximum dose calculations. Some drugs may require dosing based on body surface area, a function of height and weight, providing this is an effective form of clinical decision support.</p>
								<!--<div class="tip close"></div>-->
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<!--Fig 2-7 Maximum dose icons-->
					<div class="example">
						<div class="ex-title" id="fig-2-6">
							<span class="ex-type">Figure 2.6</span>
							<span class="ex-caption">Column added for "Maximum Dose" icon</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0011_dose-max-condition.png" title="Column added for Maximum Dose icon"><img src="./assets/images/examples/medication-list/UM_EHR_0011_dose-max-condition.png" class="scale-with-grid" /></a>
					</div>
					<p>In the examples above in <a href="#fig-2-4">Figure 2.4</a> and <a href="#fig-2-5">2.5</a>, we use the medication timeline (described in detail later in the chapter) embedded in the table view. It uses the same color scheme (“Black is the maximum dose, gray is less, lighter is lower, and red is over the maximum”).</p>
					<div class="example">
						<div class="ex-title" id="fig-2-7">
							<span class="ex-type">Figure 2.7</span>
							<span class="ex-caption">Mini-timeline shows maximum dose information for each medication</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0008_timeline.png" title="Mini-timeline shows maximum dose information for each medication"><img src="./assets/images/examples/medication-list/UM_EHR_0008_timeline.png" class="scale-with-grid" /></a>
					</div>
					<h3>Time to Play</h3>
					<p>We’ve made an interactive prototype for you to play with. Imagine a few clinical tasks to accomplish while playing with it. We listed a few below. Compare this prototype to the tools in your existing EHR to see the difference in user experience. You might want to time yourself, or time a friend or colleague doing the same task. Is one tool more accurate for you?</p>
					<p>Here’s the prototype. <a href="../interactive-table/interactive-table.html" class="link" target="blank">Medication List Prototype</a>
					<br/>For this prototype, assume “today” is Sep 18, 2013.</p>
					<p>Try these tasks.</p>
						<ol>
							<li>Is the patient taking insulin?</li>
							<li>Is the patient taking any medication for diabetes? How many?</li>
							<li>Is the patient taking any medication for high blood pressure (hypertension)? How many?</li>
							<li>Is there room to increase the dose on any of those high blood pressure medications? If so, which ones?</li>
							<li>Which medications are Dr. Belden responsible for?</li>
						</ol>
				</div>
			</div>
			<!--Interactive 2-1 Interactive Table-->
		</section><!--end section interactive list-->

		<section id="timeline" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3><a href="../timeline/timeline.html" target="blank">The Medication Timeline</a></h3>
					</div>
					<p>Physicians are yearning for a timeline. They are working with people who have many complex, chronic conditions (diseases), and are managing many interventions such as medications, laboratory tests, occasional procedures, and many visits with multiple health care providers at home, offices, and hospitals. How is it possible to manage all this complex data? It takes a tremendous amount of mental effort (cognitive load). In order to understand the time course for even a single medication, it requires a lot of digging through progress notes and through medication list tables reviewing years worth of prescription renewals. Even worse, that effort may need to be duplicated to understand a second or third medication.</p>
					<p>Here’s an example of a medication timeline. (<a href="#gal-2-3">See Gallery 2.3</a>) </p>
					<p>A timeline offers a complete overview. At the top level, it conveys a few basic details – When does a medication start or stop? When does the dose change, and is it increasing or decreasing? Is that the maximum dose?</p>
					<p>There are just a few simple rules necessary to understand how it works. Each bar represents the history of a single medication (e.g. citalopram started at 10 mg, and progressively increased to 40 mg daily). The timescale can be adjusted. The color black represents the maximum dose of that particular medication. Shades of gray represent progressively lower doses (lighter means lower). At a glance, there is a wealth of information. It’s straightforward.</p>
					<p>Your designs should accommodate large medication lists. These large lists are the ones that challenge physicians the most because these patients have many problems and are very complex.  It’s not uncommon for some patients to have 15 to 20 medications on their active list. Try not to require scrolling to see all the medications at once.</p>
					<p>All instances of a medication (e.g. citalopram) should occur in the same timeline, even if they involve different tablet strength (10 mg, 20 mg, or 40 mg) or occur at distinct points in time (say, a 8 month course 4 years ago, and another course for the past 12 months).</p>
					
					<div class="example" id="gal-2-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.3</span>
							<span class="ex-caption">Medication Timeline</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Active medications in the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" /></a>
									<div class="caption">Medication Timeline showing values for "today"</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-list/UM_EHR_0010_notated.png" title="Active medications in the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0010_notated.png" class="scale-with-grid" /></a>
									<div class="caption">How to read the timeline</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-list/UM_EHR_0011_notated-2.png" title="Active medications in the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0011_notated-2.png" class="scale-with-grid" /></a>
									<div class="caption">PRN (as needed) medications and medications with no fixed maximum dose need special treatment</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>Here are some of the cognitive science and interface usability features incorporated into the medication timeline.</p>
					<p>The high-level overview shows the time course for the complete list of medications in a single view. It’s very efficient. The user won’t need to keep different pieces of information in working memory or make written notes just to keep track of details scattered across several EHR views. Patterns emerge visually (from <a href="./human-factors.php#preattentive-attributes" target="blank">preattentive attributes</a> like color, length, and <a href="./human-factors.php#proximity" target="blank">proximity</a>) that would be far more difficult to deduce from text or numerical data.</p>
					<p>Zooming in on an area of interest allows exploration of more detail (text explanations, dose details, and even adherence information if pharmacy refill data or patient-reported adherence data are available to the EHR) to confirm hunches or to develop new questions to pursue.</p>
					<p>Episodic medications (PRN medications for pain, nausea, asthma exacerbations, etc) can be displayed as available (we chose a white bar here), with additional visual cues indication that the patient used it. Pharmacy dispense events could be indicated by a square or dot, and patient reports of actual use could be a small vertical hash mark.</p>
					<p>Filtering may show only active medications, discontinued medications, or both to help answer other questions that arise during the inquiry (“Why was this medication stopped here, and a switch made to that alternative medication?”).</p>
					<p>For the timeline, we used monochrome (grayscale) for conveying most information. For conveying a maximum number, black is well-adapted compared to a “darkest blue” or “darkest green”. Color is used sparingly as an alert color (the dose is greater than the recommended maximum dose). In general, it’s a good idea to design in monochrome first, and then add color sparingly to convey meaning and not distract the user. Remember that some users will not perceive color. For example notice that we combined yellow and cross hatching to make sure everyone could see it. One quick test you can do is to print your design in grayscale and check that all the information is still accessible.</p>
					<p>The text is readable: the drug names are left justified which is easier to read. The dose is displayed either in black or white so it contrasts with the background. Manual zooming on the timeline is possible but it requires more dexterity and can be challenging for novice users so buttons allows users to quickly zoom to commonly used useful time periods like the last 3 months or the last year.</p>
					<p>The medication timeline serves every conceivable user well: physician, nurse, patient and caregiver, pharmacist, mental health professional, health coach, and any medical specialist. It can accommodate long lists of medications. A dozen medications can be quite common. Twenty medications would not be surprising. Thirty medications, sadly, may not be rare. The medication timeline handles the visual burden with ease. It is a tool for data visualization, whose mantra is “overview first, then zoom and filter, then details-on-demand. Let’s look at a gallery to demonstrate how.</p>
					<!--Gallery 2-2 Timeline-->
					<div class="example" id="gal-2-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.4</span>
							<span class="ex-caption">Medication Timeline</span>
						</div>
						
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0001_tutorial.png" title="Instructions on how to read the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0001_tutorial.png" class="scale-with-grid" /></a>
									<div class="caption">Instructions on how to read the timeline</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Active medications in the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" /></a>
									<div class="caption">Active medications in the timeline</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0002_drag.png" title="You can grab the scrubber and drag it across the timeline to look at more details on certain dates."><img src="./assets/images/examples/medication-list/UM_EHR_0002_drag.png" class="scale-with-grid" alt="Reduce Noise" /></a>
									<div class="caption">You can grab the scrubber and drag it across the timeline to look at more details on certain dates.</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0003_drag2.png" title=""><img src="./assets/images/examples/medication-list/UM_EHR_0003_drag2.png" class="scale-with-grid" alt="Reduce Noise" /></a>
									<div class="caption"><p>Dragging the scrubber farther back in time when some medications were not yet prescribed. They appear as greyed out names and the labels disappear from the scrubber.</p></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0004_show-all.png" title="Show all (active and inactive) medications. Active medications are at the top while the inactive are at the bottom."><img src="./assets/images/examples/medication-list/UM_EHR_0004_show-all.png" class="scale-with-grid" alt="Reduce Noise" /></a>
									<div class="caption">Show all (active and inactive) medications. Active medications are at the top while the inactive are at the bottom.</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0005_hover.png" title="Tap a line to see more details."><img src="./assets/images/examples/medication-list/UM_EHR_0005_hover.png" class="scale-with-grid" alt="Reduce Noise" /></a>
									<div class="caption">Tap a line to see more details.</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" title="Expanded bar shows details and notes that may explain reasons for discontinuing is valuable information."><img src="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" class="scale-with-grid" alt="Reduce Noise" /></a>
									<div class="caption">Expanded bar shows details that influenced the time course. Reason for discontinuing may be valuable information. Other details (pharmacy, prescriber, etc) can be accessed by linking a drug timeline to that drug in the interactive table.</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Active medications in the timeline"><img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" /></a>
									<div class="caption">Back to where we started</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>The timeline efficiently shows an entire medication history in a single view. The user can tell at a glance important details about the medication dose at any particular point in time, and allows comparison to other medication dose patterns simultaneously.</p>
					<div class="scenario" id="what-happened">
						<h5>Returning to the clinical scenario: What happened before today?</h5>
						<p>The physician had determined that the blood pressure was too high, and an additional drug would be necessary. He wondered why lisinopril was not already on this medication list, since it would normally be among the first 3 drugs he used for hypertension. So, turning to the medication timeline, he explores the past by toggling from “Active Medications” to “Active + Inactive Medications” view. He sees (<a href="#fig-2-6">Figure 2-6</a> below) that lisinopril had been prescribed, but only for a few months. He wonders, “Why was it stopped?” Doing a search of the chart, he finds a phone note reporting that the patient had developed a persistent dry cough, which had resolved upon stopping the lisinopril. There was no other record of that adverse effect, so the physician added lisinopril to the allergy list with “cough” as an “adverse effect.” If his EHR supported the function, he might add that “cough” detail to the comment field for lisinopril as a “reason for stopping” the drug.</p>
					</div>
					<div class="example" id="fig-2-8">
						<div class="ex-title">
							<span class="ex-type">Figure 2.8</span>
							<span class="ex-caption">Show All Medications (Active &amp; Inactive) - Lisinopril had been stopped</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0007_lisinopril-stopped.png" title="Show all (active + inactive) - Lisinopril has been stopped"><img src="./assets/images/examples/medication-list/UM_EHR_0007_lisinopril-stopped.png" class="scale-with-grid" /></a>
					</div>
					<p>The physician now considers adding amlodipine to control high blood pressure, but wonders about the patient’s adherence to the existing medications. Zooming in on the medication timeline, he finds that the patient was three weeks late on refilling Coreg, but was embarrassed to admit to it. The patient had just requested a refill last night, and planned to pick it up from the pharmacy after the visit today. The relatively high copay for Coreg was a barrier to getting it. So, the physician discussed cheaper alternatives in the beta-blocker class, and together they selected metoprolol XL 200 mg daily. Read more about why patients may not be taking their medication as prescribed in <a href="./medication-reconciliation.html" target="blank">Chapter 3</a> on Medication Reconciliation.</p>
					<div class="quicktip" id="adherence-data">
						<div class="sidebar cf">
							<h5>Developer Challenge: Collecting Medication Adherence Data</h5>
							<p class="preview">Currently, prescription dispensing information data is only sporadically available from pharmacies or e-prescribing hub organizations.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Currently, prescription dispensing information data is only sporadically available from pharmacies or e-prescribing hub organizations. As that data becomes more robust in the future, that data could provide clues that a patient is not using the medication at the predicted pace.</p>
								<p>Collecting data from the patient directly will be limited by the granularity we strive for. Basic details (such as “never filled prescription” or “stopped taking X months ago”) will be easier to collect and quantify than less precise details (such as “I forget some of the doses” or “I’ve been spacing it out and not taking it every day so I wouldn’t run out until payday when I can afford to get the refill”).</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<!--Figure 2-8 gaps-->
					<div class="example" id="fig-2-9">
						<div class="ex-title">
							<span class="ex-type">Figure 2.9</span>
							<span class="ex-caption">Zoom in for more granular detail. You can see gaps in medication adherence.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0008_zoom-in.png" title="Zoom in for more granular detail. You can see gaps in medication adherence."><img src="./assets/images/examples/medication-list/UM_EHR_0008_zoom-in.png" class="scale-with-grid" /></a>
					</div>
					<h5>Timeline Prototype</h5>
					<p>We’ve made an interactive prototype for you to play with. Imagine a few clinical tasks to accomplish while playing with it. We listed a few below. Compare this prototype to the tools in your existing EHR to see the difference in user experience. You might want to time yourself, or time a friend or colleague doing the same task. Is one tool more accurate for you?</p>
					<p>Here’s the prototype: Medication Timeline &nbsp; <a class="button" href="../timeline/timeline.html" target="blank">Try it out!</a></p>
					<p>For this prototype, assume “today” is Sep 18, 2013.</p>
					

					<div class="example" id="int-2-2">
						<div class="ex-title">
							<span class="ex-type">Interactive 2.2</span>
							<span class="ex-caption">Medication Timeline Prototype</span>
						</div>
						<a href="../timeline/timeline.html" target="blank"><img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" /></a>
					</div>

					<h5>Try these tasks</h5>
					<ol>
						<li>First navigate so you can see the starting date, Sep 18, 2013 by dragging the gray shaded area (the scrubber) in the bottom timeline. (We assign Sep 18 as “today” so our prototype works now and for years to come).</li>
						<li>What medication was started most recently? About when?</li>
						<li>Which medication was stopped most recently?</li>
						<li>Drag the scrubber at the bottom until you can see a 5-year timeline.</li>
						<li>Which drugs were stopped, and then restarted?</li>
						<li>Now try dragging the list of medication names on the right side toward the left. Notice that some names disappear. Only the active drugs at that time are shown in the list (i.e. based on your position along the timeline) along with the doses in use at that time.</li>
					</ol>
					<h5>Future directions for Medication Timeline</h5>
					<p>We acknowledge there are additional details to be worked out. Some clinical tasks really demand a historical view that integrates other clinical data. For example, warfarin anticoagulation management requires details about prior warfarin dose changes, other medication changes, and prothrombin time (also known as protime or PT or INR) lab results. Insulin management requires concomitant viewing of recent blood glucose results, hemoglobin A1c results, diet and activity details, and sometimes other details about exceptions to the patient’s usual condition or activities. We haven’t tried to address here the complex regimens like chemotherapy, or the variables involved in pediatric dosing. </p>

					<p>Summary</p>
						<ol>
							<li><p>Consider the user and the task at hand. That consideration will help you decide what details and functionality are needed for a particular medication list view. </p></li>
							<li><p>Use <a href="./human-factors.php#preattentive-attributes" target="blank">preattentive attributes</a> (like color, size, shape, alignment) to draw the user’s attention to the salient details. </p></li>
							<li>Design in monochrome first, then add color sparingly and meaningfully, where it can add information, and not distract the user.</li>
							<li>Remember that humans have very limited <a href="./human-factors.php#working-memory" target="blank">working memory</a> (only 3 to 4 items), so put information directly in view where possible. Eliminate the need to remember details from one step to the next in a task sequence.</li>
							<li>Provide situational awareness by giving an overview of all the key details. The extent of situational awareness depends on the task context (attain broad, limited depth overview versus making complex clinical decisions with many dependencies).</li>
							<li>Reduce <a href="./human-factors.php#cognitive-load" target="blank">cognitive load</a>. Do the math for the user. Design so that repetitive reading is not required. Present the information directly instead of requiring the user to recall it.</li>
							<li>Remember the data visualization mantra: Overview first, then zoom and filter, then details-on-demand.</li>
							<li>Your designs should accommodate large medication lists. Try not to require scrolling to see them all at once. It’s not uncommon for some patients to have 15-20 medications on their active list.</li>
						</ol>
					<h5>Additional Resources</h5>
					<p><em>From the National Center for Cognitive Informatics &amp; Decision Making in Healthcare</em></p>
					<h5>EHR Safety Enhanced Design Briefs </h5>
					<ul>
						<li><a href="https://sbmi.uth.edu/nccd/SED/Briefs/sedb-g02.htm" target="blank">Effective Table Design</a></li>
						<li><a href="https://sbmi.uth.edu/nccd/SED/Briefs/sedb-g01.htm" target="blank">Making Effective Use of Color</a></li>
					</ul>
					<h5>EHR Usability</h5>
					<ul>
						<li><a href="https://sbmi.uth.edu/nccd/ehrusability/" target="blank">Designing for Usability</a></li>
					</ul>
				</div>
			</div>
			<!--Interactive 2-3 Timeline-->
		</section><!--end timeline section-->
		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fleft" id="prevCh">
							<p class="pagination prev_ch"><a href="./about-this-book.php"><span class="prev"></span>About this Book</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./medication-reconciliation.php">Medication Reconciliation<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	

</div><!--end wrapper-->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
			$( '#cbp-fwslider-4' ).cbpFWSlider();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				
				helpers : {
					title : {
						type : 'outside'
					}
				},
				
				afterLoad : function() {
					if (this.group.length > 1){
						this.title = (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				}
			});
		});
	</script>
</body>
</html>