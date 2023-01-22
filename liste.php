<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
			  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
				  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>

    </body>

    <!--nav-->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">AMAZON WEB SERVICES</a>
		  
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
				  <a class="nav-link" href="form.html">Formulaire <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="liste.html">Liste</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			  </ul>
			  <!--<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>-->
			</div>
		  </nav>
<!--FIN nav-->

        <!--recuperation des données-->

        <?php
        $user='root';
        $pass='';
        $db='membersdata';
        $db=new mysqli('localhost',$user,$pass,$db) or die("connexion impossible");

        $sql= "select * from members";
		//sort($sql, SORT_NATURAL | SORT_FLAG_CASE);

        $resulta= mysqli_query($db,$sql) or die("mauvais requête");
		

        echo "<table style='margin-top:10%; background-color:whitesmoke; border: 1px solid black'>";
        echo "<thead style='border:1px solid black'><tr><th style='border:1px solid black' >Numéro</th><th style='border:1px solid black'>Nom</th><th style='border:1px solid black' >Prénom</th><th style='border:1px solid black' >Adresse Mail</th><th style='border:1px solid black' >Téléphone</th></tr></thead>";
        while($row=mysqli_fetch_assoc($resulta)){
		echo "<tbody style='border:1px solid black'><tr><td style='border:1px solid black'>{$row['Idmembers']}</td><td style='border:1px solid black'>{$row['nom']}</td><td style='border:1px solid black'>{$row['prenom']}</td><td style='border:1px solid black'>{$row['email']}</td><td style='border:1px solid black'>{$row['tel']}</td></tr></tbody>";
			
		}
		echo "</table>";
            # code...
        ?>
        <!--Fin de la recupération-->


    <!--DEBUT DU FOOTER OU PIED DE PAGE-->
			<footer class="container-fluid bg-grey py-5">
				<div class="container">
				   <div class="row">
					  <div class="col-md-6">
						 <div class="row">
							<div class="col-md-6 ">
							   <div class="logo-part">
								  <img src="https://africamutandi.com/wp-content/uploads/2022/06/capture-decran-2022-06-14-a-17-38-16.png" class="w-50 logo-footer" >
								 
							   </div>
							</div>
							<div class="col-md-6 px-4">
							   <h6> A Propos de nous</h6>
							   <p>Labellisée Grande Ecole du Numérique, Ashoka, EPIC, Simplon est un réseau de Fabriques solidaires et inclusives 
								proposant des formations gratuites aux métiers techniques du numérique
								C et à l’étranger. Les formations sont accessibles 
								avec tous.te.s sans aucun pré-requis de diplôme avec peu ou pas de pré-requis techniques.
								La pédagogie active est au coeur de nos formations : projets concrets, autonomie, travaux en 
								groupe, entraide." 5% de théorie, 80% de pratique, 15% soft skills..</p>
							   <a href="#" class="btn-footer"> More Info </a><br>
							   <a href="#" class="btn-footer"> Contact Us</a>
							</div>
						 </div>
					  </div>
					  <div class="col-md-6">
						 <div class="row">
							<div class="col-md-6 px-4">
							   <h6> Utile</h6>
							   <div class="row ">
								  <div class="col-md-6">
									 <ul>
										<li> <a href="form.html"> Formulaire </a> </li>
										<li> <a href="liste.html"> Liste de Présence</a> </li>
									 </ul>
								  </div>
							   </div>
							</div>
							<div class="col-md-6 ">
							   <h6> Newsletter</h6>
							   <div class="social">
								  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							   </div>
							   <form class="form-footer my-3">
								  <input type="text"  placeholder="search here...." name="search">
								  <input type="button" value="Go" >
							   </form>
							   <p>Build by SIMPLON</p>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
				</footer>
				<!--FIN DU FOOTER OU PIED DE PAGE-->
    </html>