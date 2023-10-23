<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital Oasis</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    
  <!-- header -->
  <header class = "header bg-blue">
	<nav class = "navbar bg-blue">
		<div class = "container flex">
			<a href = "index.html" class = "navbar-brand">
				<img src = "images/logoo1.jpg" alt = "site logo">
			</a>
			<button type = "button" class = "navbar-show-btn">
				<img src = "images/ham-menu-icon.png">
			</button>

			<div class = "navbar-collapse bg-white">
				<button type = "button" class = "navbar-hide-btn">
					<img src = "images/close-icon.png">
				</button>
				<ul class = "navbar-nav">
					<li class = "nav-item">
						<li class = "nav-item">
						<a href = "index.html" class = "nav-link">Accueil</a>
					</li>
					<li class = "nav-item">
						<a href = "a_propos.html" class = "nav-link">A propos</a>
					</li>
					<li class = "nav-item">
						<a href = "rendez_vous.php" class = "nav-link">Rendez-vous</a>
					</li>
					<li class = "nav-item">
						<a href = "Docteur.php" class = "nav-link">Docteurs</a>
					</li>
					<li class = "nav-item">
						<a href = "contact.php" class = "nav-link">Contact</a>
					</li>
				</ul>
			</div> 
		</div>
	</nav>
	
<main>

<!-- rendez-vous -->
<main>
	<div class="container">
		<form class="form-signup" method="post">
			<h1>Pointer un rendez vous</h1>
			<h6><p><strong>SVP saisire vous information pour pointer votre rendez-vous</strong></p></h6>
			</br></br></br></br></br></br>
			<h2>Remplisser ce formulaire pour pointer un rendez vous : </h2>
			<div class="form-group">
				<label for="prenom"><strong>Prenom  :</strong></label>
					<div>
						 <input type="name" class="form-control" name="prenom" placeholder="Votre Prenom">
					</div>
			</div></br>
			<div class="form-group">
				<label for="nom"><strong>Nom  :</strong></label>
					<div>
						 <input type="name" class="form-control" name="nom" placeholder="Votre Nom">
					</div></br>
			</div></br>
			<div class="form-group">
				<label for="cne"><strong>CNE  :</strong></label>
					<div>
						 <input type="name" class="form-control" name="cne" placeholder="Votre CNE ">
					</div>
			</div></br>
			<div class="form-group">
				<label for="gender"> <strong>Genre</strong> </label>
				<div>
					<label for="male" class="radio-inline"><input type="radio" name="genre" id="male"> homme</label>
					<label for="female" class="radio-inline"><input type="radio" name="genre" id="female"> femme</label>
				</div></br>
			</div></br>
			<div class="form-group">
				<label for="email"><strong>Email  :</strong></label>
					<div>
						 <input type="email" class="form-control" name="email" placeholder="exemple@gmail.com">
					</div></br>
			</div></br>
			<div class="form-group">
				<label for="phone"><strong>Numéro de téléphone  :</strong></label>
					<div>
						<input type="tel" class="form-control" name="tele" placeholder="Numéro de téléphone">
					</div>
			</div></br>
			<div class="form-group">
				<label for="date"><strong>Date souhaitée  :</strong></label>
					<div>
						<input type="date" class="form-control" name="datee">
					</div>
			</div></br>
			<div class="form-group">
				<label for="time"><strong>Heure souhaitée  :</strong></label>
					<div>
						<input type="time" class="form-control" name="heure">
					</div></br>
			</div></br>
			<div>
				<label for="doctor"><strong>Docteur souhaité :</strong></label>
				<div>
					<select id="doctor" name="docteur" required>
						<option value=""><strong>Sélectionnez un docteur</strong></option>
						<option value="Dr. Dupont"><strong>Dr. ZAKARIA</strong></option>
						<option value="Dr. Martin"><strong>Dr. AHMED</strong></option>
						<option value="Dr. Durand"><strong>Dr. AMIN</strong></option>
					</select>
				</div></br>
			</div></br>
			<div class="form-group">
				<label for="motif"><strong>Motif de la consultation  :</strong></label>
					<div>
						<input type="message-box" class="form-control" name="message">
					</div>
			</div></br>
			<div class="form-group">
				<label>
					<input type="checkbox" name="check">
					<strong>J'autorise l'Hôpital Oasis à me contacter par e-mail ou par téléphone pour confirmer mon rendez-vous.</strong>
				</label>
			</div></br>
			<input type="submit" class="submit" name="submit" value="Submit"> </br></br></br>
			
			<?php
	  require_once 'rendez_vous_f.php';
      if (isset($_POST['submit'])) {
        
		
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$numTelephone = $_POST['tele'];

		// Create a new patient instance
	
		$servername = "localhost";
		$username = "root";
		$password = "Amine123456789";
		
		$dbname = "rendezvous";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connexion échouée: " . $conn->connect_error);
		}
		$sql = "INSERT INTO `patient_list` (name,Prenom,contact_no) 
	VALUES ('$nom','$prenom','$numTelephone')";
	if ($conn->query($sql) === TRUE) {
		echo "</br> patient a été enreistrer avec succès.</br>";
} 	
	else {
		echo "</br> Erreur lors de l'enregistrement du patient : </br>" . $conn->error;
}
		// Do something with the patient object, such as storing it in a database or displaying the data
		
		
		
		
		
		
		$prenom = $_POST['prenom'];
	    $nom = $_POST['nom'];
	    $cne = $_POST['cne'];
	    $genre = $_POST['genre'];
	    $email = $_POST['email'];
		$tele = $_POST['tele'];
		$datee = $_POST['datee'];
		$heure = $_POST['heure'];
		$docteur = $_POST['docteur'];
		
		$servername = "localhost";
		$username = "root";
		$password = "Amine123456789";
		
		$dbname = "rendezvous";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connexion échouée: " . $conn->connect_error);
		}
		$sql = "INSERT INTO `rendez-vous` (Prenom,Nom,CNE,Genre,Email,Tele,Date,Heure,Docteur) 
	VALUES ('$prenom','$nom','$cne','$genre','$email','$tele','$datee','$heure','$docteur')";
	
	if ($conn->query($sql) === TRUE) {
		echo "</br>Le rendez-vous a été enreistrer avec succès.</br>";
} 	
	else {
		echo "</br> Erreur lors de l'enregistrement du rendez-vous: </br>" . $conn->error;
}
} 
    ?>
			
		</form>
	</div>

	</main>
	 <!-- footer  -->
	 <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "images/logo.png">
                    </div>
                    <p class = "text text-md">À l'Hôpital Oasis, nous mettons l'accent sur la prise en charge globale de nos patients. Que ce soit pour une consultation de routine, une intervention chirurgicale ou un suivi post-opératoire, notre équipe multidisciplinaire travaille en collaboration pour fournir des soins personnalisés et adaptés à chaque individu.</p>
                    <address>
                        Medic Clinic <br>
                        69 Deerpark Rd, Mount Merrion <br>
                        Co. Dublin, A94 E9D3 <br>
                        Ireland
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        <li><a href = "#" class = "text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <p class = "text text-md">Nous sommes ici pour vous servir, et notre objectif est de répondre à vos besoins de manière rapide.</p>
                    <ul class = "appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class = "fas fa-envelope"></i>
                            <span>revomedic@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class = "footer-links">
                <ul class = "flex">
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->
</body>
</html>