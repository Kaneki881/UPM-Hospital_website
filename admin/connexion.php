
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
    <link rel = "stylesheet" href = "nom.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "admin.css">
  <!-- Inline CSS -->

 
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
   <style>
        /* Your custom CSS code goes here */

        /* For example, you can add styles for the body element */
        section#body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #17f;
}

        /* Add custom styles for the Connexion section */
        section#connexion {
            padding: 120px; /* Reduced padding */
            background-color: #f5f5f5;
        }

        section#connexion h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            padding: 15px 0px;
            
        }

        section#connexion form {
            display: flex;
            flex-direction: column;
            border-radius: 5px;
            margin: 50px 425px;
            padding: 40px 40px;
            outline: 0;
            border: 1px ;
            border-radius: 6px;
            width: 800px;

        }

        section#connexion label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        section#connexion input[type="text"],
        section#connexion input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        section#connexion input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        section#connexion input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.Erreur {
            color: #f00;
            font-size: 16px;
            font-weight: bold;
            margin: 50px 625px;
            
            
        }

        /* Just remove the background-color from header.bg-blue */
        header.bg-blue {
            background-color: transparent;
        }
    </style>
</head>
<body>
    

  <!-- header -->
  <header class="header bg-blue">
    <nav class="navbar bg-blue">
        <div class="container flex">
            <a href="index.html" class="navbar-brand">
              
            </a>
            <button type="button" class="navbar-show-btn">
                <img src="images/ham-menu-icon.png">
            </button>

            <div class="navbar-collapse bg-white">
                <button type="button" class="navbar-hide-btn">
                    <img src="images/close-icon.png">
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../index.html" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../a_propos.html" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="../rendez_vous.php" class="nav-link">Rendez-vous</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Docteur.php" class="nav-link">Docteurs</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="search-bar">
                   
                    <!-- Ajouter le bouton Espace Professionnels ici -->
                    <a href="connexion.php" class="btn btn-white">Espace Professionnels</a>
                </div>
            </div>
        </div>
    </nav>

<!-- end of header -->

<main>
    <!-- connexion section -->
    <section id="connexion" class="connexion py">
        <h1>Connexion</h1>
        <?php 
            if(isset($erreur)) {
                echo "<p class='Erreur'>".$erreur."</p>";
            }
        ?>
        <form id="login-form" action="" method="POST">
            <!--on ne mets plus rien au niveau de l'action, pour pouvoir envoyer les données dans la même page -->
            <label>Adresse Mail</label>
            <input type="text" name="username">
            <label>Mots de Passe</label>
            <input type="password" name="password">
            <input type="submit" value="Valider" name="boutton-valider">
        </form>
    </section>
    <!-- end of connexion section -->
</main>


		
		<footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        
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


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#login-form').submit(function(e) {
        e.preventDefault();
        $('#login-form button[type="submit"]').attr('disabled', true).val('Logging in...');
        if ($(this).find('.alert-danger').length > 0)
            $(this).find('.alert-danger').remove();
        $.ajax({
            url: 'ajax.php?action=login',
            method: 'POST',
            data: $(this).serialize(),
            error: err => {
                console.log(err);
                $('#login-form button[type="submit"]').removeAttr('disabled').val('Valider');
            },
            success: function(resp) {
                if (resp == 1) {
                    location.href = 'index.php?page=home';
                } else if (resp == 2) {
                    location.href = 'voting.php';
                } else {
                    $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>');
                    $('#login-form button[type="submit"]').removeAttr('disabled').val('Valider');
                }
            }
        });
    });
</script>
</html>