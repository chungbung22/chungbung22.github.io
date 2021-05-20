<?php include("../password_protect.php"); ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- disable smart zoom /-->
<link rel="stylesheet" href="../../wp-content/themes/CC/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen" href="../../wp-content/themes/CC/style.css" />	
<link rel="pingback" href="../xmlrpc.php" />

<title>Airplane Maintenance</title>
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
                    <div class="contentH1">Maintenance Optimization System</div>
                    <div class="contentH2">Creating an improved airplane maintenance planning tool for operators</div>
                </div>

				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance2.png" /></div>
					 </div>
				</div>
              
                <div class="column contentLeft responsive-paddingRight20">
                    <div class="contentBox">
                        <div class="contentH3">Overview</div>
                        <p>The Maintenance Optimization System also known as MOS, is a consolidation of three legacy maintenance tools: SASMO, OMPTrak, and MIDOT. It's a web-based tool built using Angular, and will have advanced data analytics and visualization capabilities.</p>
						<p>The goal was to create an improved maintenance tool, which is used to generate maintenance plans for Boeing's customers based on historical flight and maintenance data. Data analytics is used to determine if customers can save money by performing maintenance less frequently.</p>
						</div>
                </div>
                
                <div class="column contentRight">
                    <div class="contentBox">
                        <div class="contentH3">Duration</div>
                        <p>18 months<br/>
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
          
                  <div class="contentH3">Introduction</div>
                     <p>The three applications that were to be consolidated were developed at different time periods. MIDOT came first and followed a component-based approach, using component data to analyze and determine the estimated maintenance interval. SASMO came next, switching to a task-based approach, which was more accurate by using historical maintenance task data. Finally, OMPTrak was developed to make up for functionality missing from SASMO, such as project management, creation of knowledge base records, and loading tasks from maintenance planning documents. As a result, it was determined that the three applications could be merged into one, as they are essentially evolutions of each other.</p> 
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance00.jpg" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  </div><!--end of contentWrapper_portfolio--> 
				  
				  <div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Goals</div>
				  <p>There were three main goals as part of the strategic focus for the MOS project:</p>
					 <p>1. Enable new business opportunities through robust, scalable architecture that allows for enhanced analytics performance and machine learning capability.</p>
					 <p>2. Increase business productivity by improving system performance and enabling a self-serviced end to end project/analysis/visualization process.</p>
					 <p>2. Save costs by consolidating UI and applications, standardizing to a newer tech stack, and reducing redundant work/data reconciliation.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				   <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance01.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 

				  <div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Design Process</div>
                     <p>I was part of a balanced team for this project, consisting of PM, UX, and Dev. Since this was an agile software development project, I followed the user-centered design process, using the "Think, Make, Check" cycle optimized for validation, delivery, and learning (based on Lean Methodologies). I first conducted exploratory research to understand the current systems, and identify assumptions plus defined hypotheses. Several design artifacts such as personas and service blueprints were created during this phase.</p> 
					 <p>Once the features had been identified, I moved onto the make phase, ideating on potential solutions by creating wireframes and clickable prototypes. Finally I checked my proposed designs through usability testing, validating my assumptions and hypotheses. Once the final design had been confirmed, I created a high-fidelity mockup to handoff to dev. A challenge faced for this project was that everyone was virtual due to the pandemic, so I had to be creative with some of the design activities.</p>
					  
				   <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance02.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  </div><!--end of contentWrapper_portfolio--> 
				   <div class="contentWrapper_portfolio"> 
				  <div class="contentH3">Literature Review</div>
                     <p>In order to design the new MOS system, I first had to review the existing applications and identify what functionality was shared between the three applications and what was unique. The first step was reviewing the existing documentation. This included the P490s which contained the functional requirements, as well as the P700s which was the user guide. The documentation also covered the user flows, which differed depending on the team using the application. For example, the SASMO usage flow can be found below, where certain screens are common to all teams, while others are unique to ISC or OMP.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				   <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance03.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
					
				<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Information Architecture</div>
                     <p>Based on the documentation and demoing the legacy apps, I create sitemaps to capture the pages across each tool. This would make it easier to identify which screens were common across the tools, and could be incorporated into MOS. The sitemap for SASMO can be found below.</p>
					 </div><!--end of contentWrapper_portfolio-->  
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance04.jpg" /></div>
					 </div>
				  </div>
				  
				  <div class="contentWrapper_portfolio"> 
				   <p>Using the sitemaps, I created an excel spreadsheet which listed the functionality/screens for each app in a separate tab. I then created a tab called "Combo" which combines the three tabs into one. For each row, I identified whether the functionality was specific to that application (i.e. O-only), if it had matching functionality in other tools (i.e. S=), or if the functionality was being added in a future release (i.e. S-only>O=). This was used to identify the required features for MOS.</p>
				   </div><!--end of contentWrapper_portfolio-->
				   
				   <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance05.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 					
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">User Personas</div>
                     <p>I captured the target users for the application using personas. These were identified through the legacy documentation and consulting the PO for a list of existing users. Thankfully the PO had helped develop the legacy tools, so they were able to identify SME's for the different apps. I created a user list based on his input, which would be used for user interviews down the line. There were three different teams that use the current apps: ISC, OMP, and MIDOT.</p>
					 <p>I also sent out a personas template to the the SME's for them to fill out. This provided me a list of the different roles for the different teams, which I could then synthesize into personas for MOS. The two primary users were project owners who were responsible for creating new projects and assigning analysts to the project, and engineering analysts, who were responsible for running analyses and generating a final report with a maintenance interval recommendation.</p>
					 </div><!--end of contentWrapper_portfolio--> 
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance06.png" /></div>
					 </div>
				  </div>
				   
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
							
			
			
							   
			
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">Service Blueprint</div>
                     <p>After creating the personas, I had the SME's walk me through their workflow. From the walkthrough, I was able to build service blueprints for the different teams, capturing the process flow between the different tools. The service blueprint was broken into 4 layers covering the actions by the user, the feedback provided by the system on the frontend/backend, as well as any supporting processes. The task completion time was captured during a performance test during the last Oracle DB upgrade.</p>
					  </div><!--end of contentWrapper_portfolio-->  
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance07.jpg" /></div>
					 </div>
				  </div>
				 					 		   
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
			
			<div class="contentWrapper_portfolio"> 
          
                  <div class="contentH3">Competitive Analysis</div>
                     <p>I also conducted a competitive analysis, to identify a visualization service that would satisfy the needs of the user based on their pain points. Criteria was pulled from the persona, such as reporting capability, ability to customize the UI, and ability to manipulate data instead of using Excel. Other criteria was from the IT side such as cost of adoption and ease of use.</p>
					 <p>Two rounds were conducted, comparing existing visualization tools with NetCharts, which is currently used by the legacy systems. The first round looked at software that was all-inclusive, with most of the functionality built in. However, our tool didn't require the full capabilities that Tableau and Cognos provided, so it was hard to justify the price. It would also potentially be harder to maintain in the long term, as we had less flexibility modifying the source code.</p>
					 </div><!--end of contentWrapper_portfolio--> 
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance08.jpg" /></div>
					 </div>
				  </div>
				  <div class="contentWrapper_portfolio"> 
				   <p>The second round looked at cheaper alternatives that were less fully fledged, leaning more towards charting tool libraries, that would require additional coding. These would require more effort up front, but would be easier to maintain in the long term, as we would have more control over the code. We ended up going with Ignite UI, since it was easier to develop with, as it included native Angular components that were compatible with the Angular framework we had chosen to build our UI.</p>
				    </div><!--end of contentWrapper_portfolio--> 
					 <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance08a.jpg" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
			
				  <div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">User Interviews</div>
                     <p>Next, I validated legacy requirements for the features identified through user interviews to confirm if they were still valid for MOS. These were captured in a P251 document, which contained all the user requirements for MOS. The P251 was broken up into the different sections of the tool, identifying the different use cases for each section such as project creation, which would be translated into user stories for the developers. Each use case contained the task, the users involved, the pre and post condition, as well as any business rules.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance08.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
			
			
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">Design Studio</div>
                     <p>After identifying the required features and validating legacy requirements, I moved onto the design phase. I conducted several design studios with the users to come up with concepts/ideas for MOS. The goal was to come up with a solution that solved the pain points identified through the personas, and find a way to unify the three systems without making it too complex.</p> 
					 <p>Since everyone was virtual, I used the annotation function of Webex to allow user to provide feedback on brainstormed concepts. Voting was done through the chat, as opposed to using stickers. From the design studios, I was able to generate a system map based on the feedback which can be found below.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance09.jpg" /></div>
					 </div>
				  </div>
				  <div class="contentWrapper_portfolio"> 	
				  <p>I also updated the service blueprints for each team based on the new system map. The focus was on using as many common/shared screens as possible. The project creation and data load screens were shared across the three teams. The screens started to diverge when creating the pre-analysis input, since the teams had different analyses they needed to setup and run. I've included the MIDOT one below as the other two are much longer.</p>
				  </div><!--end of contentWrapper_portfolio-->  
				  <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance10.jpg" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">Visual Design</div>
                     <p>After coming up with possible solutions, I moved on to deciding on the look and feel for the app. Since it would be customer-facing, I decided to follow visual and branding guidelines provided by Digital Aviation which is used by BCA. This consisted of a flavor of Material Design from Google, with some tweaks from Boeing to follow their established color palette.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance11.png" /></div>
					 </div>
				  </div>
				  <div class="contentWrapper_portfolio"> 
				  
				  <p>I also had to make some changes to the material components provided by Digital Aviation, which can be downloaded as a design pack, since we were building using Angular and decided to use Material Design components for Angular. The differences can be found by referring to the <a href="http://www.material.io" target="_blank">material.io</a> and <a href="http://material.angular.io" target="_blank">material.angular.io</a> sites.</p>
				  </div><!--end of contentWrapper_portfolio--> 
				  <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance12.png" /></div>
					 </div>
				  </div>

				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
			
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">Wireframe Prototypes</div>
                     <p>Once the look and feel was decided, I moved onto to creating wireframes using Sketch based on the requirements identified during user research.</p> 
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance13.png" /></div>
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance14.png" /></div>
					 </div>
				  </div>
				  <div class="contentWrapper_portfolio">
				  <p>To help the user better visualize the flow and possible interactions, wireframes were uploaded to InVision and linked together to create clickable prototypes using hotspots. Users were shared a link to the prototype, which allowed them to click through the prototype on their own time, and quickly identify if the flow was intuitive or if changes had to be made to the interactive components.</p>
				  </div><!--end of contentWrapper_portfolio-->  
				  
				  <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance15.png" /></div>
					 </div>
				  </div>
				  
				  <div class="contentWrapper_portfolio">
				  <p>Users were also able to provide feedback on the screens by leaving comments. This was especially valuable for users who were not available during the designated time slots for reviewing wireframes each week. It was also useful if we needed to return to a wireframe to understand why we made certain design decisions.</p>
				  </div><!--end of contentWrapper_portfolio-->  
				  
				  <div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance16.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
			
			
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">User Task Flow</div>
                     <p>A user task flow chart was also created for each feature, which aided the developers in understanding the relationship between screens and the different paths a user could take based on certain decisions they made. Below is an example of the manage project flow, specifically for the project owner role. Certain screens and functionality were not available to all users, which is why multiple flow charts had to be created from time to time for the different roles.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance16.jpg" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
				  
			<div class="contentWrapper_portfolio"> 			
			
			<div class="contentH3">Handoff to Dev</div>
                     <p>Once the screens and were approved and a user task flow was generated, a high-fidelity wireframe was created to handoff to dev. These were attached to the dev stories, along with the requirements from the P251 document. If the developer had any clarification questions, they were able to post a discussion note below. This was sometimes necessary as many of the developers were in India, so the time difference and being virtual made it hard to discuss in real-time.</p>
					 </div><!--end of contentWrapper_portfolio-->  
				<div class="marginTop30 marginBottom30">
				     <div class="portfolioImgCenter">
					 <div class="portfolioImgCaption"><img class="portfolioImg" src="../../wp-content/themes/CC/imgs/img_portfolio/maintenance17.png" /></div>
					 </div>
				  </div>
				  <div class="divider">    
					   <div class="dot1"></div>
					   <div class="dot2"></div>
					   <div class="dot3"></div>
				  </div> 
		  <div class="contentWrapper_portfolio">  
                
                <div class="portfolioNav">          
					<a href="../convey/index.html" title="Convey"><div class="previousPage btn">Previous</div></a>                    <a href="../canvas/index.html" title="Canvas Redesign"><div class="nextPage btn">Next</div></a> 
                </div>
          
          </div><!--end of contentWrapper_portfolio--> 
				
				  

   </section>

</div><!--end of main-->



</body>



</html>
