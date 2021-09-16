<!doctype html>
<html>
	<head>
		
		<title>Home | Divine Event Management</title>	
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="Fusionic Web Solutions creates beautiful and responsive web designs to help you grow your business online. We create static, dynamic and ecommerce websites that can boost your business growth that are designed based upon your business and budget requirements">
		<link href="../css/main_style.css" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">	
		<link rel="icon" href="../images/logo.png" type="image/png">

		<!--fonts!-->
		<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">

		<!--fonts!-->
																														 
		<style>
  
.responsivemenudiv{display:block;top:0px !important;height:99vh !important;
    padding-top: 6%;overflow:hidden}
		
		#menubutton{display:none}
		#maindiv{height:0px;width:100%;transition: all 500ms linear;}
		#maindiv.activemenu{height:100%;overflow:auto}
		#maindiv.nonactivemenu{height:0px;overflow:hidden}
		
		
		#widthchange{height:100vh;top:1px;width:0px;transition: all 500ms linear;overflow:hidden;position:absolute}
#widthchange.openmenu{width:352px !important;overflow:auto}
#widthchange.nonopenmenu{width:0px !important;overflow:hidden}
.sl-nav{padding-top:0%}
		
		
		
			.menu-div{background:none}
		#smoothmenu li{display:inline-block;font-size:19px;padding: 0% 2%;text-transform:uppercase}
		#smoothmenu{padding-top:3%}
		
		.main-image-header{background-image:url('../images/mainhomepage.jpg') !important;}	
		
  
		.menudiv{text-align:right}
		
		@media only screen and (max-width: 767px) and (orientation:portrait) {
			.main-image-header{height: 250px !important;}
			
		#demo{    width: 70%;  
    text-align: left;
    position: absolute;
    background: white;
    padding: 4% 5%;}
	.page-title-header{padding-bottom:6%;font-size:29px !important}
	.fa-bars{padding-top: 8%;
    padding-bottom: 4%;}
	.menudiv{text-align:left}					  
	.sl-nav{padding-top:23% !important}
		}

		@media only screen and (max-width: 768px) and (orientation:landscape){
		.main-image-header{height: 250px !important;} 
		
		#demo{    width: 32%;
    text-align: left;
    position: absolute;
    background: white;
    padding: 2% 5%;}
	.page-title-header{padding-bottom:6%}
		}
			
			
		@media only screen and (min-width: 768px) and (max-width: 1200px) and (orientation:portrait) {
		.main-image-header{height: 345px !important;}
#demo{    width: 26%;
    text-align: left;
    position: absolute;
    background: white;
    padding: 3% 4%;}			
		}
		@media only screen and (min-width: 768px) and (max-width: 1200px) and (orientation:landscape) {
		.main-image-header{height: 345px !important;}
#demo{    width: 19%;
    text-align: left;
    position: absolute;
    background: white;
    padding: 2% 3%;}
.responsive-menu{display:none    }	
.menudiv{text-align:right !important;
			margin-left: -10%;}
		}
		@media only screen and (min-width: 1201px) {
		/* .main-image-header{} */
		#demo{    width: 19%;
    text-align: left;
    position: absolute;
    background: white;
    padding: 2% 3%;}
	.menudiv{text-align:right;
			margin-left: -10%;}
	#menubutton{display:inline-block}
	#maindiv{display:block}
	.responsive-menu{display:none}
	
		}

		
.grid-divider {
	 overflow-x: hidden;
	 position: relative;
	padding-left: 10%;
	padding-right: 10%;
}
 .grid-divider > [class*="col-"]:nth-child(n + 2):after {
	 content: "";
	 background-color: black;
	 position: absolute;
	 top: 0;
	 bottom: 0;
}
 @media (max-width: 767px) {
	 .grid-divider > [class*="col-"]:nth-child(n + 2):after {
		 width: 95%;
		 height: 2px;
		 left: 10;
		 top: -4px;
	}
}
 @media (min-width: 768px) {
	 .grid-divider > [class*="col-"]:nth-child(n + 2):after {
		 width: 3px;
		 height: auto;
/*		 left: -1px;*/
	}
}			
			.menu-div {
    /* background: rgba(0, 0, 0, 0.5); */
    background: -webkit-linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
}

		</style>
	</head>
	<body><!--Fixed header div start-->
	<div class="fixed-container-div">
		<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12 menu-div">
			<div class="row">
				<div class="col-xs-6 col-md-6 cols-sm-6 col-lg-6">
					<a href="../ar"><img src="../images/logo.png" class="logo_image" alt="event management company logo"></a>				</div>
				<div class="col-xs-6 col-md-6 cols-sm-6 col-lg-6 menudiv">					<label for="show-menu" class="show-menu"><i class="fa fa-bars fa-2x" onclick="changewidth();"></i></label>					<input type="checkbox" id="show-menu" role="button"> 					<ul id="menu" class="onepress-menu" > <!--desktop view menu-->
						<li><a href="../ar">الصفحة الرئيسية</a></li>
						<li><a href="../services/ar">خدمات</a></li>
						<li><a href="../celebrities/ar">مشاهير</a></li>
					<li><a href="../aboutus/ar/">معلومات عنا</a></li>
						<li>&nbsp;&nbsp;&nbsp;						<div class="nav-wrapper">							<div class="sl-nav">
						<span onclick="location.href='../en'" style="color:white;cursor:pointer;border-left:2px solid white" class="btn language_button" >En</span>
							<span onclick="location.href='../ar'" style="color:white; cursor:pointer;" class="btn language_button" >عربى</span>
							
						</div>
					</div>					
						</li>
											</ul>
											
								</div>	
						</div>
						<div id="widthchange">
				<span style="float: right;color: white;padding-right: 2%;font-size: 27px;font-weight: bold;" onclick="changewidth()">x</span>		
				<ul id="mobilemenu" style="width: 90%;text-align:center;padding-left:0%;padding-top:2%;background: #facac7;height: 100vh;list-style-type:none;box-shadow:13px 5px 25px 0px rgba(0,0,0,0.1);">
					<li><a href="../ar">الصفحة الرئيسية</a></li>

					<li><a href="../services/ar">خدمات</a></li>
												
					<li><a href="../celebrities/ar">مشاهير</a></li>
																				 
					<li style="float:none">
						<div class="nav-wrapper">
						<div class="sl-nav">
							<span onclick="location.href='../en'" style="color:white;cursor:pointer;border-left:2px solid white" class="btn language_button" >En</span>
							<span onclick="location.href='../ar'" style="color:white; cursor:pointer;" class="btn language_button" >Ar</span>
						</div>
					</div>
					</li>
				</ul>
			</div>
		
	</div>
</div>

	<div class="main-image-header"></div>
				<section>
					<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="background:white; padding-top: 3%;">
	  
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12">
								<h1 style="font-weight:bold;text-align:center;padding-left: 7%;"  class="page-title-header">معلومات عنا</h1>
							</div>
							
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12">
								<div class="row aboutrow">
										<div class="col-xs-12 col-md-4 cols-sm-12 col-lg-4" style="text-align: center;padding-bottom: 2%;">
										<div>
											<img src="../images/about.jpg" style="width:90%;height: 315px;">
										</div>
										</div>
										<div class="col-xs-12 col-md-8 cols-sm-12 col-lg-8" style="text-align: justify;padding-bottom: 2%;">
																																																																																																						   
										<div style="padding:3%;line-height: 30px;font-size: 17px;" >
											<p style="color:#0c354a;"> نحن نقدم التخطيط وإدارة الأحداث المخصصة ، مع أخذ فكرتك وجعلها تنمو إلى حقيقة واقعة.
											
											نحن نعتقد أن كل حدث واحتفال يجب أن يكون مختلفًا وفريدًا تمامًا بالنسبة لك. نحن نفخر بأننا نعمل بشكل تعاوني معك ، ونساعد في إطلاق العنان لأفكارك الإبداعية وتحقيقها ؛ سواء كنت ممتلئًا بأطرافهم ، أو تعتقد أنه ليس لديك أي شيء على الإطلاق.
											
											عندما تثق بنا في هذا الحدث الخاص بك ، نعدك باتخاذ كل خطوة لجعلها تجربة ممتعة ومريحة لك.</p>
											
										</div>
										</div>
								</div>
							</div>
					</div><!-- container -->
				</section>
				
				
				<!-- Mission and Vision Section-->
				
				<section>
					<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="background-image:url('../images/mission-vision.jpg');box-shadow:13px 5px 25px 0px rgba(0,0,0,0.1);background-position: center;background-size: cover;padding-top:0%;padding-bottom:0%">

						<div class="row grid-divider" >
						  <div class="col-sm-12 col-md-5 col-lg-5 my-1" >
							
								<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" >
								  <h2 style="font-weight:bold;text-align:center;font-size: 30px;padding-top: 5%;">مهمتنا</h2>
			 

								</div>

			 
								<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="text-align: right;padding-bottom: 1%;">
								  <div class="row vision-mission-row" style="padding:0px !important">
									<div style="padding:1%;line-height: 33px;font-size: 17px;">
									  <p style="color:#0c354a;text-align: justify;padding-top: 5%;padding-right: 10%;    padding-left: 10%;">نحن نؤمن برفع معايير الأحداث ، من خلال ضمان الجودة العالية والاحتراف ، لإشراك الجمهور ، وتعزيز التميز. كشركة حدث ، نحن نسترشد بالتزامنا المستمر وقيمنا لتحقيق أهداف وغايات عملائنا. أنت قلب كل ما نقوم به.</p>
									</div>
								  </div>
								</div>

						  </div>
								
								<div class="col-sm-12 col-md-5 col-lg-5 my-1">
							
								<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12">
								  <h2 style="font-weight:bold;text-align:center;font-size: 30px;padding-top: 5%;">رؤيتنا</h2>
								</div>
								
								<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="padding-bottom: 3%;">
								  <div class="row vision-mission-row" style="padding:0px !important">
									<div style="padding:1%;line-height: 33px;font-size: 17px;">
									  <p style="color:#0c354a;text-align: justify;padding-top: 5%;padding-right: 10%;    padding-left: 10%;">أن نكون شركة إدارة الأحداث الأفضل والأكثر شهرة في المنطقة ، حيث نقدم أفضل الحلول لتصميم وإنشاء تجارب ذات جودة استثنائية ، والجمع بين الإستراتيجية والكفاءة لتحفيز تطوير الصناعة وتجاوز توقعات عملائنا من أجل رنين كل حدث من الرؤية إلى الواقع .</p>
									</div>
								  </div>
								</div>
							  
							</div>
		
						</div>
		   
					</div><!-- container -->
				</section>
				
				<!-- we help you organize -->
				
				<section>
					<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="background-image:url('../images/organize.jpg');box-shadow:13px 5px 25px 0px rgba(0,0,0,0.1);background-position: center;background-size: cover;padding-top:0%;padding-bottom:0%">
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="padding-top: 3%;">
								<h1 class="page-title-header" style="font-weight:bold;text-align:center;"> نحن نساعدك على التنظيم</h1>
							</div>
							
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12"  style="text-align: justify;padding-bottom: 3%;">
								<div class="row organize-row" >
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" style="text-align:center">	
										<img src="../images/wedding ring.png" class="wedding-organize" >
										<p class="organize-p">حفلات</p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/parties.png" class="organize" >
										<p class="organize-p"> الزفاف </p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/product launching.png" class="organize" >
										<p class="organize-p">طرح المنتج</p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/birthdays.png" class="organize" >
										<p class="organize-p"> عيد الميلاد </p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/workshops.png" class="organize1" >
										<p class="organize-p"> ورشة عمل </p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/corporate events.png" class="organize1" >
										<p class="organize-p">الأحداث التجارية</p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/graduation.png" class="organize1" >
										<p class="organize-p"> تخرج </p>
									</div>
									<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-3" >	
										<img src="../images/grand opening.png" class="organize1" >
										<p class="organize-p">الافتتاح الكبير </p>
									</div>
								</div>
							</div>
					</div><!-- container -->
				</section>
				
				<!-- Team Section -->
				
				<section>
					<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="background:white;box-shadow:13px 5px 25px 0px rgba(0,0,0,0.1);padding-top:0%;padding-bottom:0%">
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="padding-top: 3%;">
								<h1 class="page-title-header" style="font-weight:bold;text-align:center;"><span style="border-bottom:4px solid #c6a5a5">فريقنا</span></h1>
							</div>
							
							<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12"  style="text-align: justify;padding-bottom: 5%;">
								<div class="row" style="padding: 3% 6% 0% 6%;text-align: center;" >
									<div class="col-xs-12 col-md-4 cols-sm-12 col-lg-4 team-div ">	
										<img src="../images/girl.jpg" class="team-img">
										<p class="team-name">Ms. Layla K. Bucheeri </p>
										<p class="team-name"> Managing Director </p>
									</div>
									<div class="col-xs-12 col-md-4 cols-sm-12 col-lg-4 team-div " >	
										<img src="../images/boy.png" class="team-img" >
										<p class="team-name"> Mr. Ali A. AlBalooshi </p>
										<p class="team-name"> General Manager </p>
									</div>
									<div class="col-xs-12 col-md-4 cols-sm-12 col-lg-4 team-div " >	
										<img src="../images/girl.jpg" class="team-img" >
										<p class="team-name"> Ms. Basma Y. AlBalooshi  </p>
										<p class="team-name"> PR Manager </p>
									</div>
									
								</div>
							</div>
					</div><!-- container -->
				</section>
				
				
				<!-- Clients Section  -->
		<section>		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clients-section" style="padding-top:0%;padding-bottom:0%">
				<h1 class="page-title-header" style="font-weight:bold;text-align:center;padding-bottom: 2%;padding-top:3%;color:white;">عملائنا</h1>
				<div class="client-block">
				<div id="clientCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" >
						<div class="clientitem w3-animate-fading">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/adara.png" alt="Adara"  class="client-image">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/al_areen.png" alt="Al Areen Palace & Spa" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/al_zain.png" alt="Al Zain Master Jewellers" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/baker.png" alt="Baker" class="client-image1">
										</div>
									</div>
								</div>
						</div>

						<div class="clientitem w3-animate-fading">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
									<div class="row">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/buffalo_wings_rings.png" alt="Buffalo Wings & Rings" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/four_seasons.png" alt="Four Seasons" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/gaia.png" alt="Gaia" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/gro.png" alt="GRO" class="client-image">
										</div>
									</div>
								</div>
						</div>
						
						<div class="clientitem w3-animate-fading">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
									<div class="row">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/revive_cafe.png" alt="Revive Cafe" class="client-image1">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
											<img src="../images/showcase01.png" alt="Showcase 01" class="client-image1">
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>	 
<section class="footer-section" style="padding-bottom:0% !important">
			<div class="col-xs-12 col-md-12 cols-sm-12 col-lg-12" style="padding-top:3%">
				<div class="row" style="margin:0">
					<div class="col-xs-12 col-md-4 cols-sm-12 col-lg-4 footer-logo-div">
						<h2 style="color:white;text-align:center"><span style="border-bottom:3px solid #facac7">حول</span></h2><br>
						<p class="footer-desc">Divine Event Management هي شركة إدارة الأحداث الرائدة التي تقدم تخطيط الأحداث لجميع المناسبات.</p>
					</div>
					<div class="col-xs-12 col-md-3 cols-sm-12 col-lg-4 footer-links">
						<a href="#"><i class="fa fa-facebook fa-2x" id="facebook_icon"></i></a>&nbsp;&nbsp;
						<a href="#"><i class="fa fa-twitter fa-2x" id="twitter_icon"></i></a>&nbsp;&nbsp;
						<a href="#"><i class="fa fa-instagram fa-2x" id="insta_icon"></i></a>&nbsp;&nbsp;
						<a href="#"><i class="fa fa-linkedin fa-2x" id="linkedin_icon"></i></a>&nbsp;&nbsp;
					</div>
					<div class="col-xs-12 col-md-5 cols-sm-12 col-lg-4 footer-icons">
						<h2 style="color:white;text-align:center"><span style="border-bottom:3px solid #facac7">Get In Touch</span></h2><br>
						<div class="row">
							<!--<div class="col-xs-12 col-md-1 cols-sm-1 col-lg-1"><a href="tel:+919146596302"><i class="fa fa-phone" style="color:white"></i></a> </div><div class="col-xs-12 col-md-11 cols-sm-11 col-lg-11"><a href="tel:+919146596302">(+91) 9146596302 </a></div><br>-->
							<div class="col-xs-12 col-md-1 cols-sm-1 col-lg-1"><a href="mailto:info@divineservices.co"><i class="fa fa-envelope-o" style="color:white"></i></a></div><div class="col-xs-12 col-md-11 cols-sm-11 col-lg-11"><a href="mailto:info@divineservices.co">info@divineservices.co</a></div><br>
							<div class="col-xs-12 col-md-1 cols-sm-1 col-lg-1"><i class="fa fa-map-marker" style="color:white"></i></div><div class="col-xs-12 col-md-11 cols-sm-11 col-lg-11">Bahrain</div><br>
							<!--<div class="col-xs-12 col-md-1 cols-sm-1 col-lg-1"><i class="fa fa-clock-o" style="color:white"></i></div><div class="col-xs-12 col-md-11 cols-sm-11 col-lg-11">Mon-Fri 9am-6pm</div><br>-->
						</div>
					</div>
				</div>	
				<div class="copyright-section" style="background:black">
					<p class="copyright">Copyright © 2020 DivineEventManagement All Rights Reserved</p>
				</div>	
			</div>
				<!--<p style="color:white;font-size:11px;text-align:center"> Privacy policy &nbsp; | &nbsp; Terms &amp; Conditions </p>	--> 
		
	</section>
	<script src="../js/jquery.min.js"> </script>
				<script src="../js/popper.min.js"> </script>
				<script src="../js/bootstrap.min.js"> </script>
				<!--<script src="../js/fontawesome.min.js"> </script>-->
				<script src="../js/aos.js"></script>
	<script>
	 var myIndex = 0;

	function carousel() {
	 var i;
	 var x = document.getElementsByClassName("clientitem");

	 for (i = 0; i < x.length; i++) {
	   x[i].style.display = "none";  
	 }
	 myIndex++;
	 if (myIndex > x.length) {myIndex = 1}    
	 x[myIndex-1].style.display = "block";  
	 setTimeout(carousel, 4000);    
	}
	carousel();

	function showdropdown()
	{
		document.getElementsByClassName("responsive-menu")[0].style.display="block";
   
																			  
			//document.getElementsByClassName("menu-div")[0].style.backgroundColor="rgba(2,2,2,0.8)";
   
	  
   
		document.getElementById("menu1").className="responsive-menu mobileactivemenu";
																						  
   
  
 
		
		$('.responsive-menu').css(" transition","width 1s ease-in-out");
		$('.responsive-menu').css("width","352px !important");
		
	}
	function closeresponsivemenu()
	{
		document.getElementsByClassName("responsive-menu")[0].style.display="none";
			//document.getElementsByClassName("menu-div")[0].style.background="rgba(2,2,2,0.2)";
		document.getElementById("menu1").className="responsive-menu mobilenonactivemenu";
	}
 
	/*if(document.body.clientWidth>1200)
	{
		$(window).scroll(function(){if($(this).scrollTop()>50){	//$('.menu-div').css("background","#facac7");	$('.menu-div').css("background","rgb(0, 0, 0, 0.5)");			  	/*$('.language_button').css("color","black");	$('.language_button').css("border","1px solid black");	$('.menu-div').css("border-bottom","3px solid #facac7");	$('.onepress-menu').css("display","inline-block");	$('#menubutton').css("display","none");	 	if(document.body.clientWidth>1200) 		$('.menudiv').attr('style', 'text-align: left !important');}else{    	//$('.menu-div').css("background","#facac7");	$('.menu-div').css("background","rgb(0, 0, 0, 0.5)");	/*$('.language_button').css("color","black");	$('.language_button').css("border","1px solid black");	$('.menu-div').css("border-bottom","3px solid #facac7");	$('.onepress-menu').css("display","inline-block");	$('#menubutton').css("display","none");		if(document.body.clientWidth>1200) 		$('.menudiv').attr('style', 'text-align: left !important');        //	$('.menu-div').css("background","none");//	$('.language_button').css("color","white");	//$('.language_button').css("border-left","border-left:2px solid white");//	$('.menu-div').css("border-bottom","none");//	$('.onepress-menu').css("display","none");//	$('.menudiv').css("text-align","right");//	if(document.body.clientWidth>1200)//		$('#menubutton').css("display","inline-block");//	else//	$('.menudiv').css("text-align","left");									   												 	 										} });	

	//}*/
	function changeheight()
{
	if(document.getElementById("maindiv").className=='' || document.getElementById("maindiv").className=='nonactivemenu')
	{
		document.getElementById("maindiv").className='activemenu';
		document.getElementsByClassName("logo_image")[0].style.display="none";
		//document.getElementById("menubutton").innerHTML="Exit";
		$('#menubutton').css("background-image","url('http://www.winkwed.com/wp-content/themes/winkwed/library/images/exit.png')");
	}
	else if(document.getElementById("maindiv").className=='activemenu')
	{
		document.getElementById("maindiv").className='nonactivemenu';
		document.getElementsByClassName("logo_image")[0].style.display="block";
		$('#menubutton').css("background-image","url('http://www.winkwed.com/wp-content/themes/winkwed/library/images/menu.png')");
	}
}
function changewidth()
{
	/*if(document.getElementById("menu1").className=='responsivemenudiv' || document.getElementById("menu1").className=='responsivemenudiv nonopenmenu')
	{
		document.getElementById("menu1").className='responsivemenudiv openmenu';
		document.getElementById("mobilemenu").style.display="block !important";
	}
	else if(document.getElementById("menu1").className=='responsivemenudiv openmenu')
	{
		document.getElementById("menu1").className='responsivemenudiv nonopenmenu';
		document.getElementById("mobilemenu").style.display="none !important";
	}*/
	if(document.getElementById("widthchange").className=='' || document.getElementById("widthchange").className=='nonopenmenu')
	{
		document.getElementById("widthchange").className='openmenu';/*
		document.getElementById("mobilemenu").style.display='inline-block';
		document.getElementById("mobilemenuclose").style.display='inline-block';
		*/
	}
	else if(document.getElementById("widthchange").className=='openmenu')
	{
		document.getElementById("widthchange").className='nonopenmenu';/*
		document.getElementById("mobilemenu").style.display='none';
		document.getElementById("mobilemenuclose").style.display='none';*/
	}
}
	</script>			
	
	<script>
	AOS.init();
	</script>	
</body>
</html>
