<?php include("../password_protect.php"); ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- disable smart zoom /-->
<link rel="stylesheet" href="../../wp-content/themes/CC/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen" href="../../wp-content/themes/CC/style.css" />	
<link rel="pingback" href="../xmlrpc.php" />

<title>Wire Bundle Assembly</title>
<link rel="shortcut icon" href="../../wp-content/themes/CC/imgs/favicon.ico?" />
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="SKRY - Christopher Chung" />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="Christopher Chung" />

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel='dns-prefetch' href='http://ajax.googleapis.com/' />
<link rel='dns-prefetch' href='http://platform.twitter.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />

<link rel='stylesheet' id='sb_instagram_styles-css'  href='../../wp-content/plugins/instagram-feed/css/sb-instagram-2-2.min2f91.css?ver=2.4.6' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='../../wp-includes/css/dist/block-library/style.min0606.css?ver=5.2.9' type='text/css' media='all' />
<link rel='stylesheet' id='ctf_styles-css'  href='../../wp-content/plugins/custom-twitter-feeds/css/ctf-styles4e44.css?ver=1.3' type='text/css' media='all' />
<script type='text/javascript' src='../../ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min0606.js?ver=5.2.9'></script>
<link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel='shortlink' href='http://wp.me/P-4' />

    
<!--font--> 
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

<!--jQuery--> 
    <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="../../wp-content/themes/CC/js/jquery.easing.1.3.js"></script>
    
<!--IE understand media@--> 
    <script type="text/javascript" src="../../wp-content/themes/CC/js/css3-mediaqueries.js"></script>         

	<!--Scroll to--> 
	<script>
		function goToByScroll(id){
     			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
    </script>
    
<!--Logo text--> 
    <script>
	$(document).ready(function(){

			$("#logoText").animate({opacity:1}, 300);

	});
	
<!--Scroll to Top-->
	$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
	});
	$('#return-to-top').click(function() {      // When arrow is clicked
		$('body,html').animate({
			scrollTop : 0                       // Scroll to top of body
		}, 500);
	});
    </script>
</head>

<body class="Site">



<header id="header">
   <div class="container">
                      
                      <a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
                      <!-- Flipped logo -->
                      <div id="logoContainer">
                          <a href="../../index.html">
                              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                  <div class="flipper">
                                      <div class="logoFront">
                                          <img id="logo" src="../../wp-content/themes/CC/imgs/CC_logo_flip01.png" alt="logo" />
                                      </div>
                                      <div class="logoBack">
                                          <img id="logo" src="../../wp-content/themes/CC/imgs/CC_logo_flip02.png" alt="logo" />
                                      </div>
                                  </div>
                              </div>
							  <div id="logoText">CHRISTOPHER CHUNG</div> 
                          </a>
                      </div>
   
          
                      
                   <div id="nav">
                            
                                <ul>

                                <li id="current">
                                        <a class="hvr-underline-from-left" href="../../index.html">Work</a>
                                </li>

                                <li>
                                        <a class="hvr-underline-from-left" href="../../about/index.html">About Me</a>
                                </li>
                             
                                </ul>
                        
                            </div><!--end of nav-->
                            
                            
                            
                            
                       </div><!--end of container-->
          </header><!--end of header-->
    
    
<div id="main">

   <section id="secondSection">

       <div class="container">
            
            
            <div class="contentWrapper_about">
                
                <div class="aboutTitle">
                    <div class="contentH1">Boeing Wiring System</div>
                    <div class="contentH2">Designing a suite of in-house wiring tools to replace legacy apps</div>
                </div>

				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring2.png" /></div>
					 </div>
				</div>
              
                <div class="column contentLeft responsive-paddingRight20">
                    <div class="contentBox">
                        <div class="contentH3">Overview</div>
                        <p>The Boeing Wiring System, also known as BWS, is a consolidation of several wiring apps that were built to support legacy Boeing models and the 787. It was broken up into two tracks, Design and Maintenance Engineering (DME) for power users as a native desktop app, and Change Management (CM) for more casual users as a web app.</p>
						<p>The goal was to modernize legacy wiring apps that had been developed separately in the past, establishing common syntax and processes across the different apps, and adding improvements based on user feedback. This would make it easier to maintain for IT and streamline the engineer's workflow so they could access everything in one place.</p>
						</div>
                </div>
                
                <div class="column contentRight">
                    <div class="contentBox">
                        <div class="contentH3">Duration</div>
                        <p>12 months<br/>
                        </p>
                    </div>
                    <div class="contentBox">      
                        <div class="contentH3">Role</div>
						<p>User Research</p>
						<p>UI/UX Design</p>
						<p>Prototyping</p>
						<p>Usability Testing</p>
                    </div>
                </div>

            </div>
           
            <div class="clear"></div>
           
            
            
            <div class="divider">
            
                   <div class="dot1"></div>
                   <div class="dot2"></div>
                   <div class="dot3"></div>
                
            </div>
			
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">DTE Introduction</div>
                     <p>Product development at Boeing follows a framework called Digital Transformation Environment (DTE), which is formed by blending Agile/Extreme Programming, Lean Product Management, and User-Centered Design principles. Balanced teams are created based on this framework, to ensure multiple perspectives are accounted for and that the "right" questions are being asked.</p>
					 <p>The balanced team consists of three roles: Product Manager, Product Designer, and the Developer, who represent the three different circles in the venn diagram. Each role helps answer a different question surrounding the product, and the collaboration between the roles helps ensure the delivery of a successful product.</p>
				   <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring01.png" /></div>
					 </div>
				  </div>
				  <p>As a product designer, I was responsible for creating empathy for the end user in order to define solutions that are useful, usable, and desirable. I also provided design education, direction, and leadership as an expert in design patterns.</p>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
							
			</div><!--end of contentWrapper_portfolio-->  
			
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Design Process</div>
                     <p>The team followed the concept of "Build-Measure-Learn" to provide a continuous cycle of feedback that provides data to prove or disprove our assumptions and turn uncertainties into facts:</p> 
				  <p>1. <b>Build</b> small and simple tests to collect metrics (i.e. interview script, usability tests)</p>
				  <p>2. <b>Measure</b> results of the tests (i.e. customer observation and interviews, a/b testing)</p>
				  <p>3. <b>Learn</b> from data analysis whether to pivot or preserve (i.e. validate assumptions)</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring02.png" /></div>
					 </div>
				  </div>
				  <p>The switch to an iterative approach was a big change for Boeing, which has traditionally followed the waterfall model to build airplanes. Instead of separating requirement gathering, design, development, and testing into different phases on a fixed schedule, we used short frequent iterations to keep risks low by validating often.</p>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
							
			</div><!--end of contentWrapper_portfolio-->  
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Discovery & Framing Overview</div>
                  <p>Since the current system we were replacing hadn't been validated yet, we conducted a round of discovery and framing to ensure that we identified the correct problems to solve and came up with a good solution. Assumptions were validated through user feedback following the build-measure-learn process, ensuring we had mature user requirements to hand off to developers for the delivery phase.</p> 
				  </div><!--end of contentWrapper_portfolio-->  
				 
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring03.png" /></div>
					 </div>
				  </div>


				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Research Planning</div>
                     <p>In order to communicate effectively between the three roles and set expectations, we had a research planning meeting where everyone worked together to map out the planned activities and meetings for the sprint. We also had an engineering SME included in the group as well, to provide insight into the current process.</p>
					 </div><!--end of contentWrapper_portfolio--> 
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring04.jpg" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
			
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Understanding the Problem Space</div>
                     <p>To begin, we had our SME provide an overview of the problem we were solving and any engineering-related goals. They also demoed the existing tools we would be replacing. PM provided input on resource allocation, project timeline, and expected targets. Notes were taken on post-it notes regarding the current processes in the tools, assumptions to validate, and potential users to contact, which were then grouped together on a whiteboard.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring05.JPG" /></div>
					 
					  <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring06.JPG" /></div>
					</div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
		
		
			
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">2 x 2 Risk Matrix</div>
                     <p>A 2 x 2 risk matrix was created to map the impact of any risks identified and how easy they were to mitigate. We then discussed and agreed upon which mitigation strategies were most appropriate for each risk.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring07.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
				  
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Proto-persona</div>
                     <p>Next, we created a proto-persona, which collected assumptions the team had around a "typical" user. Once the assumptions were validated, it turns into a real "persona." This was essential for understanding who the app is being built for, the environment it's being used in, and how users interact with the product.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring08.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
				
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Stakeholder Map</div>
                     <p>Finally, a stakeholder map was generated, to understand the key stakeholders, where they come from, and their relationship to the team and each other. This is important to understand if they can provide any expertise, how involved they need to be in the process, and how willing they may be to engage.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring09.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
				
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Journey Map</div>
                     <p>Before interviewing the users, we took a tour of the ESRC which is where wiring bundles are created. This helped us create a journey map of the user flow to better understand how our app can aid users in completing their tasks. We discovered that there's a handoff between several different users during the wire bundle assembly process: Design Engineers (DE), Manufacturing Engineers (ME), and Industrial Engineers (IE).</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring10.JPG" /></div>
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring11.JPG" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
				
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">User Interviews</div>
                     <p>We created a discussion guide for the interviews, which consisted of questions we'd like to answer based on the assumptions and pain points we'd captured from the demo, proto-persona, and tour. One designer would serve as the facilitator, while the other would focus on capturing notes. Interviews would also be recorded and transcribed.</p>
					 <p>Our interviews were 1 hour long and followed a semi-structured format. Participants were recruited from various programs (737, 767, 747, 787) and various roles (DE, IE, ME). Key quotes and insights were captured on post-it notes, and then grouped together using affinity diagraming.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring12.JPG" /></div>
					 </div>
				  </div>
				  <p>As we conducted more and more interviews, common themes began to emerge which were aggregated on a single whiteboard. Different colored post-it notes represented each user we had interviewed. Quotes and key insights that matched or were related were stacked on top of each other.</p>
				  <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring13.JPG" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				
				</div><!--end of contentWrapper_portfolio--> 
				
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Design Studio</div>
                     <p>After the user interviews, we conducted several design studios with the users to ideate on potential concepts based on opportunities identified through the affinity diagramming. We gathered users together in a room and presented them with design prompts and asked them to brainstorm and sketch potential concepts. Then, we had each user present their concept to the group, with time allocated for questions as well. Finally, everyone voted on their favorite concepts using stickers.</p>
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring14.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
				  </div><!--end of contentWrapper_portfolio--> 
				  
				  <div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Wireframe Prototypes</div>
                     <p>Once we settled on a concept through the design studio, we mocked it up by building low-fidelity wireframes with Sketch. This helped the users better visualize how the screens would look. Then we created interactive prototypes by uploading the wireframes to InVision so that we could test the concepts and get user feedback. We went through several iterations, refining the prototype until users were happy with the solution.</p>
					 </div><!--end of contentWrapper_portfolio--> 
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring15.png" /></div>
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring16.png" /></div>
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring17.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
				  
				  
				  <div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Delivery Overview</div>
                     <p>From the discovery and framing phase, we were able to identify the necessary improvements to include in our tool, based on feedback from our users around the existing tools and processes. These made up the features in our product backlog that would be broken up into user stories for the developers to work on. We followed a traditional agile cadence during this phase, which included Daily Standup, IPM, Iteration, and Retrospective.</p>
					 </div><!--end of contentWrapper_portfolio--> 
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring18.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
				  
				  
				   <div class="contentWrapper_portfolio"> 
				  
				  <div class="contentH3">Information Architecture</div>
                     <p>To aid the developers in understanding the information architecture for the future tool, user flows were created to show a specific persona's pathway through the design. It includes key pages/actions, the users involved, and any data that's being pulled. The user flow below illustrates how an IE would interact with the tool, and how they're dependent on information upstream provided by DE/ME.</p>
					 </div><!--end of contentWrapper_portfolio-->
				 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring19.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
				  
				  <div class="contentWrapper_portfolio"> 
				  
				  <div class="contentH3">High-Fidelity Wireframes</div>
                     <p>Just like in discovery and framing, wireframe prototypes are created to ensure that the feature being developed meets the user's needs. Once the prototypes have been tested and signed off, high-fidelity wireframes are created. These will be handed off to dev, by attaching screenshots of the wireframes to the associated user story. A link to the prototype if available is included, to help illustrate the interactions on the screen.</p>
					 <p>The developers also have access to the BWS UX Homepage, which has a style guide, UI framework, and a list of prototype links they can access if they have any additional questions. It was created by the UX team to provide a centralized hub for all design assets, as well as useful links for Dev and PM such as the links to the network drive, TFS board, defect backlog, and more.</p>
					 
					 </div><!--end of contentWrapper_portfolio--> 
					 
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring20.png" /></div>
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/wiring21.png" /></div>
					 </div>
				  </div>
				 

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
				  <div class="contentWrapper_portfolio">  
                
                <div class="portfolioNav">          
					<a href="../postpaid/secure.php" title="TMO Postpaid"><div class="previousPage btn">Previous</div></a>                    <a href="../convey/index.html" title="Convey"><div class="nextPage btn">Next</div></a> 
                </div>
          
          </div><!--end of contentWrapper_portfolio--> 

   </section>

</div><!--end of main-->



</body>



</html>
