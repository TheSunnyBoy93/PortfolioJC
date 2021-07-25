<?php
require('phpmailer/class.phpmailer.php');
require('phpmailer/class.smtp.php');
require('app/config.php');
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
        <style>
            body {
                background-color: lightgrey !important;
            }
        </style>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jacques Curtis</title>
        <link rel="icon" href="favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
        <!-- Custom style -->
        <link rel="stylesheet" href="css/customStyle.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

        <!-- Navigation Barre -->
	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/moi.png);"></div>
				<h1 id="colorlib-logo"><a href="index.php">Jacques Curtis</a></h1>
				<span class="position"><a href="#">Technicien Support Système et Réseaux en Alternance</a> en France</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="" data-nav-section="accueil">Accueil</a></li>
						<li><a href="" data-nav-section="about">A propos</a></li>
						<li><a href="" data-nav-section="competences">Compétences</a></li>
						<li><a href="" data-nav-section="formation">Formations</a></li>
						<li><a href="" data-nav-section="experience">Experiences Professionnelles</a></li>
						<li><a href="" data-nav-section="projets">Projets</a></li>
						<li><a href="" data-nav-section="technologique">Veille Technologique</a></li>
                        <li><a href="" data-nav-section="juridique">Veille Juridique</a></li>
						<li><a href="" data-nav-section="contact">Me contacter</a></li>
					</ul>
				</div>
			</nav>
            <!-- Icones + Copyright -->
			<div class="colorlib-footer">
				<p><small>&copy;
Copyright Jacques Curtis &copy;<script>document.write(new Date().getFullYear());</script>
					<BR /> All rights reserved
				<ul>
					<li><a style="color:darkblue" href="https://www.facebook.com/profile.php?id=100006640567851"><i class="flaticon-facebook"></i></a></li>
					<li><a style="color:dodgerblue" href="https://twitter.com/jackicts93"><i class="flaticon-twitter"></i></a></li>
					<li><a style="color:red" href="https://www.instagram.com/jacques_cts/"><i class="flaticon-instagram"></i></a></li>
					<li><a style="color:blue" href="https://www.linkedin.com/in/jacques-cts/"><i class="flaticon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside>
            <!-- Accueil -->
		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="accueil">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/fond1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
											<div style="text-align:right">
												<h1 style="padding-left: 560px; color: white">Bonjour! <br>Je suis Jacques Curtis</h1>
												<p><a style= "color: white; font-size: 25px" href="doc/cv_jacques_curtis.pdf" download class="btn btn-primary btn-learn">Télécharger mon CV <i class="flaticon-down-arrow"></i></a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				   	</li>
				   	<li style="background-image: url(images/fond2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Je suis <br>un technicien en systèmes et réseaux informatiques</h1>
												<p><a  style= "color: black; font-size: 25px" href="doc/cv_jacques_curtis.pdf" download class="btn btn-primary btn-learn">Télécharger mon CV <i class="flaticon-down-arrow"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>
            <!-- A Propos de moi -->
			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">A propos</span>
										<h2 class="colorlib-heading">Qui suis-je?</h2>
										<p style="font-size: 18px"><strong>Bonjour je m'appelle Jacques Curtis, </strong>Franco-Irlandais né le 6 octobre 2000, je suis actuellement en 3ème année à l'Ecole Supérieure de Génie Informatique, en Système Réseaux et Cloud Computing. Cette année, j'ai effectuée mon alternance a la suite de celle de mon BTS à la Prefecture de Seine-Saint-Denis avec un rythme de 2 semaine en entreprise et 1 semaine a l'école afin d'acquerir les compétences et le savoir vivre en entreprise nécéssaire.<br>Dans le cadre de mon BTS j'ai été amené à poursuivre une première année en formation initiale avec un stage de fin d'année nous permettant de poursuivre l'année d'après avec une alternance. Je suis actuellement en alternance a la Préfecture de la Seine-Saint-Denis à Bobigny dans le cadre de ma 2ème année avec un rythme de 3 jours en entreprise et 2 jours à l'école et je suis amené à travailler avec l'ensemble des services afin de résoudre les pannes ou configurer des postes. </p>
										<p style="font-size: 18px">J'aime apprendre en permanence, découvrir de nouvelles technologies innovantes et mettre en pratique ce que j'ai pus appprendre a l'école dans mon travail et dans la vie de tous les jours.</p>
                                        <a href="https://github.com/TheSunnyBoy93">Ci-joint mon github</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="flaticon-light-bulb"></i></span>
										<h3>Autonomie</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="flaticon-risk"></i></span>
										<h3>Investissement</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="flaticon-magic-ball"></i></span>
										<h3>Anticipation</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="flaticon-support"></i></span>
										<h3>Travail d'équipe</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>J'ai pu travailler sur quelques projets <br>dont celui de ma 2ème année de BTS qui consistait a créer un réseau d'entreprise. <br>En 3ème année, le projet était plus axé sur la partie préparation du Projet.</h2>
										<a href="doc/cv_jacques_curtis.pdf" download>Télécharger mon CV</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Compétences -->
			<section class="colorlib-skills" data-section="competences">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Compétences</span>
							<h2 class="colorlib-heading animate-box">Mes compétences</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Anglais : Bilingue (langue parternelle)</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
								  	aria-valuemin="0" aria-valuemax="100" style="width:100%">
								    <span>100%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Réseaux (Paramétrage switch Cisco/NetGear, Paramétrage modem/routeur ADSL/Point d'accès Wifi Dlink, Netgear, Cisco)</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Développement (Web : PHP, HTML5, CSS. Logiciel : C++, Python, VB.NET)</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="65"
								  	aria-valuemin="0" aria-valuemax="100" style="width:65%">
								    <span>65%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Système d'exploitation (Windows 7, Windows 10, Windows server, Debian linux)</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Administration de serveurs (DNS, DHCP, AD, FTP, NTFS)</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Maintenance Informatique (Hardware et Software)</h3>
								<br><div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
								  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
								    <span>95%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Base de données (MySQL, Access)</h3>
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
										 aria-valuemin="0" aria-valuemax="100" style="width:70%">
										<span>70%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Virtualisation (VmWare, vSphère)</h3>
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" aria-valuenow="80"
										 aria-valuemin="0" aria-valuemax="100" style="width:80%">
										<span>80%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <h3><a href="doc/tableau_de_competences.pdf" target="_blank">Ci-joint mon tableau de compétence!</a></h3>
						</div>
				</div>
			</section>
            <!-- Formations -->
			<section class="colorlib-education" data-section="formation">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Formations</span>
							<h2 class="colorlib-heading animate-box">Formations</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mastère Système Réseaux et Cloud Computing (2021-2023 / en cours)</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p><b><u>Centre formateur :</u></b><br>Ecole Supérieure de Génie Informatique ESGI<br><b><u>BACHELOR SRC :</u></b><br>Système Réseaux et Cloud Computing. <br><b><u>Objectif de la formation :</u></b><br>La spécialisation Systèmes, Réseaux et Cloud Computing délivre une formation de très haut niveau sur les méthodes de conception, de réalisation et de sécurité des architectures systèmes et réseaux.. <br><b><u>Débouchés :</u></b><br>- Administrateur systèmes et réseaux.<br>- Ingénieur Exploitant d'infrastructure.<br>- Ingénieur de Production.<br>- Pilote d’exploitation.<br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bachelor Système Réseaux et Cloud Computing (2020-2021)</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p><b><u>Centre formateur :</u></b><br>Ecole Supérieure de Génie Informatique ESGI<br><b><u>BACHELOR SRC :</u></b><br>Système Réseaux et Cloud Computing. <br><b><u>Objectif de la formation :</u></b><br>La spécialisation Systèmes, Réseaux et Cloud Computing délivre une formation de très haut niveau sur les méthodes de conception, de réalisation et de sécurité des architectures systèmes et réseaux.. <br><b><u>Débouchés :</u></b><br>- Administrateur systèmes et réseaux.<br>- Ingénieur Exploitant d'infrastructure.<br>- Ingénieur de Production.<br>- Pilote d’exploitation.<br><b><u>Projets effectués :</u></b><br>- Projet d'administration systeme et reseau windows 2016/2019<br>- Projet CCNA (2 parties)<br>- Projet d'administration et de supervision sous Nagios<br>- Projet de planification de projet<br>- Projet de conception de Base de donnée<br>- Projet Versionning sur github/gitlab<br>- Projet Scripting en Python v3.0<br>- Projet Annuel : Mise en place d'une infrastructure reseau d'entreprise complete fonctionnelle<br></p>
                                            </div>
                                        </div>
                                    </div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Brevet de Technicien Supérieur (2018-2020)</a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
									         <div class="panel-body">
                                                 <p><b><u>Centre formateur :</u></b><br>UFA Robert Schuman 93440 Dugny<br><b><u>BTS SIO SISR :</u></b><br>Brevet de Technicien Supérieur, Service d'Information aux Organisations option Solution d'infrastructure, Système et Réseaux. <br><b><u>Objectif de la formation :</u></b><br>Le titulaire du BTS SIO a pour objectif de produire et fournir un ensemble de solutions et/ou de services informatiques en tant que collaborateur interne et externe en fonction de la spécialité, SISR (Solutions d’infrastructures, systèmes et réseaux) ou SLAM (Solutions logicielles et applications métiers). <br><b><u>Débouchés :</u></b><br>- Administrateur systèmes et réseaux.<br>- Technicien de production.<br>- Technicien micro et réseaux.<br>- Pilote d’exploitation.<br><a data-nav-section="formations" href="doc/epreuves/bts_sio_e4.pdf" target="_blank"><b><u>Explication de l'épreuves E4 :</u></b></a><br>- Préparation : 20 min. L’étudiant/candidat prend connaissance de l’expression des besoins et prépare une réponse appropriée.<br>- oral : 20 min. L’étudiant explique sa réponse.<br>- Préparation : 1 h. L’étudiant/candidat réalise la solution proposée.<br>- Présentation de la solution pendant 20 min.<br><a data-nav-section="formations" href="doc/epreuves/bts_sio_e6.pdf" target="_blank"><b><u>Explication de l'épreuves E6 :</u></b></a><br>- Entretien centré sur le parcours de professionnalisation du candidat : 20 minutes.<br>- Entretien centré sur les compétences déclarées du candidat liées aux activités du processus de gestion du patrimoine informatique : 20 minutes.</p>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Baccalauréat Professionnel (Juin 2018)
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<div class="row">
									        		<div class="col-md-6">
									            		<p>Centre formateur : Lycée et UFA Robert Schuman 93440 Dugny</p>
									        		</div>
													<div class="col-md-6">
														<p>Baccalauréat Professionnel Système Electronique et Numérique. Mention Bien.</p>
													</div>
												</div>
											</div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Brevet d'Etude Professionel (Juin 2017)
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<div class="row">
									        		<div class="col-md-6">
									            		<p>Centre formateur : Lycée et UFA Robert Schuman 93440 Dugny</p>
									        		</div>
													<div class="col-md-6">
														<p>Brevet d'Etude Professionel Système Electronique et Numérique.</p>
													</div>
												</div>
											</div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Expériences Professionnelles -->
			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Experiences Professionnelles</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
                             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                 <div class="timeline-entry-inner">

                                     <div class="timeline-icon color-1">
                                         <i class="flaticon-university"></i>
                                     </div>

                                     <div class="timeline-label">
                                         <h2><a href="http://www.seine-saint-denis.gouv.fr/">Alternant au sein de la Banque Populaire/Caisse d'Epargne</a> <span><br>2021-2023-En cours</span></h2>
                                         <p>
                                             <br>Missions :
                                             <br>-
                                             <br>-
                                             <br>-
                                             <br>-
                                             <br></p>
                                     </div>
                                 </div>
                             </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="flaticon-university"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="http://www.seine-saint-denis.gouv.fr/">Alternant au sein de la prefecture de la Seine-Saint-Denis a Bobigny</a> <span><br>Septembre 2019 - Aout 2021</span></h2>
					                  <p>Technicien alternant au Bureau de support informatique de la prefecture de la Seine-Saint-Denis a Bobigny.
                                          <br>Missions :
                                          <br>-Support utilisateurs (Dépannage des sessions utilisateurs, mouvement de matériel informatique).
                                          <br>-Support téléphonique, déploiement de système d'exploitation.
                                          <br>-Configuration de téléphones portables.
                                          <br>-Configuration de badges d'impressions
                                          <br>et beaucoup plus!!</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="flaticon-university"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="http://www.seine-saint-denis.gouv.fr/">Stagiaire au sein de la prefecture de la Seine-Saint-Denis a Bobigny</a> <span><br>Mai-Juin 2019</span></h2>
					                  <p>Technicien stagiaire au Bureau de support informatique de la prefecture de la Seine-Saint-Denis a Bobigny.<br>Missions :<br>-Support utilisateurs (Dépannage des sessions utilisateurs, mouvement de matériel informatique).<br>-Support téléphonique, déploiement de système d'exploitation.<br>-Configuration de téléphones portables<br>-Configuration de badges d'impressions.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="flaticon-university"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="http://www.seine-saint-denis.gouv.fr/">Stagiaire au sein de la prefecture de la Seine-Saint-Denis a Bobigny</a> <span>Octobre-Decembre 2017</span></h2>
					                  <p>Technicien stagiaire au Bureau de support informatique de la prefecture de la Seine-Saint-Denis a Bobigny.<br>Missions :<br>-Support utilisateurs (Dépannage des sessions utilisateurs).<br>-Support téléphonique.<br>-Déploiement de système d'exploitation.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="flaticon-university"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="https://www.clearygottlieb.com/">Stagiaire au sein du service informatique de l'entreprise d'avocats CGSH</a> <span>Février-Mars 2017</span></h2>
					                  <p>Technicien stagiaire au sein du service informatique de l'entreprise <a href="https://www.clearygottlieb.com/">CGSH</a> situé dans Paris.<br>Missions :<br>-Mouvement/inventaire de matériel.<br>-Descente d'images Windows 10, Migration de ligne téléphonique (Changement d'opérateur).<br>-Paramétrage d'ordinateurs pour les conférences.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="flaticon-university"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="https://www.sfr.fr/">Stagiaire au sein du service informatique du siège social de SFR</a> <span><br>Mai-Juin 2016</span></h2>
					                  <p>Technicien stagiaire au sein du service infomatique du siège social de <a href="https://www.sfr.fr/">SFR</a>.<br>Missions :<br>-Préparation du nouveau Wiki (plans d'interventions) pour les techniciens du service informatique.<br>-Insertion de chemin d'accès vers une base de donnée Logfile avec Toad et Excel.<br>-Test de nouvelles fonctionnalités sur l'extranet et l'intranet des sites SFR en rapport avec les mots de passe.</p>
					               </div>
					            </div>
					         </article>
					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>
            <!-- Mes Projets -->
			<section class="colorlib-work" data-section="projets">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Mes Projets</span>
							<h2 class="colorlib-heading animate-box">Projets</h2>
						</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/logo.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a data-nav-section="projets" href="doc/Projets/BTS/LPRS-Doc.pdf" target="_blank">Projet LPRS</a></h3>
                                        <span>Voici une documentation du contexte dans lequel j'ai eu avec mes collègues de classe configurer un réseau entier d'entreprise :
                                            <br><a href="doc/Projets/BTS/switch_lprs.pdf" style="color:#FF0000;" target="_blank">-Configuration de Switch (Cisco 3550 et Cisco 2950)</a>
                                            <br>-Outil de supervision(PRTG)
                                            <br><a href="doc/Projets/BTS/pfsense.pdf" style="color:#FF0000;" target="_blank">-Serveur proxy(pfsense)</a>
                                            <br>-Outil de traitement de ticket(GLPI)
                                            <br>-Création d'un serveur de messagerie
                                            <br><a href="doc/Projets/BTS/win_srv_2012.pdf" style="color:#FF0000;" target="_blank">-Configuration d'un serveur Active Directory avec ajout des utilisateurs via un script et DNS.</a></span>
									</div>
								</div>
							</div>
						</div>

                        <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                            <div class="project" style="background-image: url(images/ovh.png);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a data-nav-section="projets" href="doc/Projets/Perso/OVH_doc.pdf" target="_blank">Mettre son site en ligne avec OVH</a></h3>
                                        <span>A l'aide de cette documentation technique que j'ai faite, vous pourrez recréer votre propre serveur avec OVH.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                            <div class="project" style="background-image: url(images/esgi.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a data-nav-section="projets" href="https://github.com/TheSunnyBoy93" target="_blank">Projets Bachelor</a></h3>
                                        <span>La documentation des différents projets (cliquez sur chaque titre pour avoir le sylabus des projets):
                                        <br><a href="doc/Projets/Bachelor/BDD.pdf" style="color:#FF0000;" target="_blank">Projet Base de Donnee</a>
                                        <br><a href="doc/Projets/Bachelor/ccna_1.pdf" style="color:#FF0000;" target="_blank">CCNA partie 1</a>
                                        <br><a href="doc/Projets/Bachelor/ccna_2.pdf" style="color:#FF0000;" target="_blank">CCNA partie 2</a>
                                        <br><a href="doc/Projets/Bachelor/infra.pdf" style="color:#FF0000;" target="_blank">Projet infrastructure reseaux</a>
                                        <br><a href="doc/Projets/Bachelor/nagios.pdf" style="color:#FF0000;" target="_blank">Projet Nagios</a>
                                        <br><a href="doc/Projets/Bachelor/pyhton.pdf" style="color:#FF0000;" target="_blank">Projet Python (également disponible sur Github)</a>
                                        <br><a href="doc/Projets/Bachelor/versionning.pdf" style="color:#FF0000;" target="_blank">Projet de versionning sur Github/Gitlab</a>
                                        <br><a href="doc/Projets/Bachelor/PA.pdf" style="color:#FF0000;" target="_blank">Projet annuel de Bachelor</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                            <div class="project" style="background-image: url(images/github-logo.png);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a data-nav-section="projets" href="https://github.com/TheSunnyBoy93" target="_blank">Plus de projets sur mon Github!</a></h3>
                                        <span>Vous retrouverez sur mon github beaucoup d'autres projets de dévellopement effectués.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
			</section>
            <!-- Veilles Technologiques -->
            <section class="colorlib-blog" data-section="technologique">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="veille-heading">Mes veilles</span>
							<h2 class="colorlib-heading">Veille Technologique</h2>
						</div>
                        <div class="colorlib-narrow-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                        <div class="col-md-12">
                                            <div class="about-desc">
                                                <p style="font-size: 18px">La veille technologique consiste à s'informer en continue sur les nouveautés du secteur, les inventions des concurrents ainsi que les nouvelles technologies et ce dans le but d’être le meilleur de son domaine.<br>En effet, l’informatique étant en constante évolution, la veille est une partie essentielle de notre travail et peut prendre beaucoup de temps. C’est pour cela qu’il faut savoir organiser sa veille technologie pour être toujours à jour de l’actualité sans perdre de temps.<br>La veille technologique est utilisée pour de nombreuses raisons, principalement :<br>- Suivre les évolutions techniques.<br>- Anticiper sur la concurrence: on peut ainsi rester à la pointe du marché en acquérant toutes les nouvelles technologies qui permettent de disposer d’un avantage concurrentiel.<br>- Diminuer les coûts de production.<br>- Augmenter la qualité des produits.<br>- Identifier les meilleures pratiques.<br>- Augmenter nos compétences.<br> Voici les quelques outils et techniques pour mener à bien sa veille technologique :<br>- Les flux RSS.<br>- Les réseaux sociaux comme Twitter et Facebook.<br>- Les Google Alert.<br>- S'inscire a des Newsletters.<br>- Les sites d'actualités (pour l'informatique: Developpez.net, 01net, le journal du geek).<br>- Les sites spécialisés dans les nouvelles technologies.<br>- Les vidéos parlant de technologies sur youtube ou dailymotion.</p>
                                                <p style="font-size: 18px">Dans le cadre de mon BTS, la mise en place d’une veille technologique est imposée.<br>La veille permet de s’informer des nouveautés dans certains domaines définis.</p>
                                                <p><a style="font-size: 18px; color: lightseagreen"<b><u>Exemples de sites utilisé pour ma veille :</u></b><br><li><a href="https://www.zdnet.fr/" style="font-size: 16px">Zdnet</a></li><li><a href="https://www.clubic.com/" style="font-size: 16px">Clubic</a></li><li><a href="https://www.01net.com/" style="font-size: 16px">01.net</a></li><li><a href="https://www.journaldugeek.com/" style="font-size: 16px">Journal du geek</a></li><br><strong><a style="font-size:17px; color:red">Cliquez sur l'image pour voir la veille:</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a data-section="technologique" data-nav-section="work" href="doc/veille_techno/evolution_support_stockage.pdf" target="_blank" class="blog-img"><img src="images/disque_dur.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>2020 </small> | <small> Evolution des technologies </small> </span>
                                    <h3><a data-section="technologique" data-nav-section="work" href="doc/veille_techno/disque_dur.pdf" target="_blank"><u>Evolution des technologies de sauvegardes</u></a></h3>
									<p style="font-size: 15px">Veille technologique sur l'évolution des disques dur, réalisé au cours de ma 2ème année de BTS SIO</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
							<div class="blog-entry">
								<a data-section="technologique" data-nav-section="work" href="doc/veille_techno/evolution_des_reseaux.pdf" target="_blank" class="blog-img"><img src="images/res_mob.png" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>date </small> | <small> titre </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="#">L'évolution du réseaux mobile, de la 1G à nos jours</a></h3>
									<p>Dans cet articles, je vous explique comment ont évolués les réseaux mobiles et ce qu'ils étaient au début.</p>
								</div>
							</div>
						</div>
                        <!--
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>date </small> | <small> titre </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="#">Sujet 1</a></h3>
									<p>Analyse grace aux article séléctionné plus tôt.</p>
								</div>
							</div>
						</div>
					</div>
			</section>
            <!-- Veille juridique -->
            <section class="colorlib-about" data-section="juridique">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="about-desc">
                                        <span class="colorlib-heading">Veille juridique</span>
                                        <h2 class="veille-heading"><b><u>Thème choisis</u></b> (session 2019-2020):<br>Les contrats de production et de fourniture de services informatiques.</h2>
                                        <p style="font-size: 18px">Le titulaire du diplôme BTS SIO doit être en mesure d’actualiser ses connaissances, de rechercher des informations pertinentes en fonction des situations professionnelles auxquelles il est confronté.<br>Les compétences de veille juridique doivent donc être intégrées dans la progression mise en place en formation.<br>Parce qu’une compétence est forcément située et transférable, ces compétences de veille sont développées lors de l’étude des thèmes.</p>
                                        <p><li><a href="https://www.droit-technologie.org/contentieux/contentieux-lies-aux-contrats-informatiques/" style="font-size: 16px">Contentieux lies aux contrats informatiques.</a></li><li><a href="http://www.cyberdroit.fr/themes/contrat-informatique/" style="font-size: 16px">Contrat informatique.</a></li><li><a href="https://www.legalis.net/jurisprudences/" style="font-size: 16px">Jurisprudence.</a></li></p><br><strong><a style="font-size:17px; color:red">Cliquez sur les images pour voir les veilles:</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/SFR.pdf" target="_blank" class="blog-img"><img src="images/sfr_free.png" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                            <div class="desc">
                                <span><small>2019 </small> | <small> SFR</span>
                                <h3><a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/SFR.pdf" target="_blank"><u>SFR contre FREE</u></a></h3>
                                <p style="font-size: 15px">La Cour de cassation donne raison à Free sur la subvention des téléphones portables contre SFR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                        <div class="blog-entry">
                            <a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/cometik.pdf" target="_blank" class="blog-img"><img src="images/cometik.png" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                            <div class="desc">
                                <span><small>2019 </small> | <small> cometik</span>
                                <h3><a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/cometik.pdf" target="_blank"><u>Cometik</u></a></h3>
                                <p style="font-size: 15px">Cour de Cassation arrêt du 12 septembre 2018 Mme X contre la société Cometik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/safe_&_web_company.pdf" target="_blank" class="blog-img"><img src="images/safe&web.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                            <div class="desc">
                                <span><small>2019 </small> | <small> safe & web company</span>
                                <h3><a data-section="juridique" data-nav-section="work" href="doc/veilles_juridiques/safe_&_web_company.pdf" target="_blank"><u>safe & web company</u></a></h3>
                                <p style="font-size: 15px">Cours de cassation Centre équestre de La Serre qui s’oppose a Safe & Web Company.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Me contacter -->
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Me contacter</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="flaticon-email"></i>
								</div>
								<div class="colorlib-text">
                                    <p style="font-size: 14px"><a href="mailto:contactjcurtis@gmail.com">contactjcurtis@gmail.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="flaticon-place"></i>
								</div>
								<div class="colorlib-text">
                                    <p style="font-size: 14px">Seine-Saint-Denis - France</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="flaticon-telephone"></i>
								</div>
								<div class="colorlib-text">
                                    <p style="font-size: 14px"><a href="tel://">06-23-67-73-59</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form method="post">
										<div class="form-group">
											<input type="text" name="nom" class="form-control" placeholder="Nom" required>
										</div>
										<div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Adresse mail" required>
										</div>
										<div class="form-group">
											<input type="text" name="subject" class="form-control" placeholder="Sujet" required>
										</div>
										<div class="form-group">
											<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Envoyer">
										</div>
									</form>
                                    <?php
                                    if (isset($_POST['message'])) {
                                        $position_arobase = strpos($_POST['email'], '@');
                                        if ($position_arobase === false)
                                            echo "<script type=\"text/javascript\">
                                                    Swal.fire(
                                                        'Attention',
                                                        'Votre adresse email ne comporte pas d\'arobase',
                                                        'error'
                                                    )
                                                </script>";
                                        else {
                                            $lines = explode("\n", $_POST['message']);
                                            $message="";
                                            if (!empty($lines) ) {
                                                $message.='<br>';
                                                foreach ( $lines as $line ) {
                                                    $message .= trim( $line ) .'<br>';
                                                }
                                            }
                                            sendEmail($_POST['email'], $_POST['nom'], $_POST['subject'], $message);
                                        }
                                    }
                                    ?>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>


    <!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

