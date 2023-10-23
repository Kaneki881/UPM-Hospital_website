
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
      <!-- contact section -->
      <section id = "contact" class = "contact py">
        
            <div class = "contact-right text-white text-center bg-blue">
                <div class = "contact-head">
                    <h3 class = "lead">Contact Us</h3>
                    <p class = "text text-md">Nous sommes ici pour vous servir, et notre objectif est de répondre à vos besoins de manière rapide. </p>
                    
                </div>
                <form id="contact-form" method="POST">
    <div class="form-element">
        <input type="text" class="form-control" name="name" placeholder="Your name">
    </div>
    <div class="form-element">
        <input type="email" class="form-control" name="email" placeholder="Your email">
    </div>
    <div class="form-element">
        <textarea rows="5" name="message" placeholder="Your Message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-white btn-submit">
        <i class="fas fa-arrow-right"></i> Send Message
    </button>
</form>


            </div>
        </div>
        <div class = "container grid">
            <div class = "contact-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.6268289831164!2d-6.214682984112116!3d53.29621947996855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486709e0c9c80f8f%3A0x92f408d10f2277c2!2sREVO!5e0!3m2!1sen!2snp!4v1636264848776!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
<!-- end of contact section -->
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "Amine123456789";
$dbname = "rendezvous";

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $response['error'] = "Connexion échouée: " . $conn->connect_error;
    } else {
        $sql = "INSERT INTO `contact` (name, email, message) 
                VALUES ('$name', '$email', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            $response['success'] = "Message a été enregistré avec succès.";
        } else {
            $response['error'] = "Erreur lors de l'enregistrement du message : " . $conn->error;
        }

        $conn->close();
    }
} else {
    $response['error'] = "Invalid request method.";
}




?>








    </main>
		
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
                    <p class = "text text-md">Nous sommes ici pour vous servir, et notre objectif est de répondre à vos besoins de manière rapide..</p>
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