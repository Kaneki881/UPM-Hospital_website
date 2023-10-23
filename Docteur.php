<?php include 'admin/db_connect.php'; 

?>

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
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header  class="header bg-blue fixed-header">
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
    </header>
    <main>
    <section class="page-section doctors-section" >
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <?php 
                        $where = "";
                        if(isset($_GET['sid']) && $_GET['sid'] > 0)
                        $where = " where  (REPLACE(REPLACE(REPLACE(specialty_ids,',','\",\"'),'[','[\"'),']','\"]')) LIKE '%\"".$_GET['sid']."\"%' ";
                        $cats = $conn->query("SELECT * FROM doctors_list ".$where." order by id asc");
                        while($row=$cats->fetch_assoc()):
                        ?>
                        <div class="doctor-info">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img class="doctor-image" src="assets/img/<?php echo $row['img_path'] ?>" alt="Doctor Image">
                                </div>
                                <div class="col-md-6">
                                    <p class="doctor-name"><?php echo "Dr. ".$row['name'].', '.$row['name_pref'] ?></p>
                                    <p class="doctor-email"><small>Email: <b><?php echo $row['email'] ?></b></small></p>
                                    <p class="doctor-address"><small>Clinic Address: <b><?php echo $row['clinic_address'] ?></b></small></p>
                                    <p class="doctor-contact"><small>Contact #: <b><?php echo $row['contact'] ?></b></small></p>
                                    <p class="schedule-link">
                                        <small><a href="javascript:void(0)" class="view_schedule" data-id="<?php echo $row['id'] ?>" data-name="<?php echo "Dr. ".$row['name'].', '.$row['name_pref'] ?>"><i class='fa fa-calendar'></i> Schedule</a></b></small>
                                    </p>
                                </div>
                                <div class="col-md-3 text-center align-self-end-sm">
                                    <a class="btn-outline-primary btn mb-4 set-appointment" href="rendez_vous.php?id=<?php echo $row['id'] ?>&name=<?php echo urlencode("Dr. ".$row['name'].', '.$row['name_pref']) ?>">Set Appointment</a>
                                </div>
                            </div>
                        </div>
                        <hr class="divider" style="max-width: 60vw">
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

        <footer id="footer" class="footer text-center">
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

        <style>
    /* Custom styles for the doctors section */
    .doctors-section {
        margin-top: 80px; /* Adjust the margin-top value to match the height of your fixed header */
        padding-top: 0;
        background-color: #f5f5f5;
    }

    .doctor-info {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
    }

    .doctor-image {
        margin-top: 80px;
        max-width: 20%;
        height: auto;
    }

    .doctor-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .doctor-email,
    .doctor-address,
    .doctor-contact {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .schedule-link a {
        color: #007bff;
    }

    .set-appointment {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    .fixed-header {
    position: fixed;
    
   
    
    
}
/* Add margin to the page content to prevent content from being hidden behind the fixed header */
.page-section {
    margin-top: 150px; /* Adjust the margin-top value to match the height of your fixed header */
    padding-top: 0; /* Reset padding-top if not needed */
}

</style>
    </main>

    <script src="js/script.js"></script>
    <script>
        $('.view_schedule').click(function(){
			uni_modal($(this).attr('data-name')+" - Schedule","view_doctor_schedule.php?id="+$(this).attr('data-id'))
		})
       $('.set_appointment').click(function(){
       	if('<?php echo isset($_SESSION['login_id']) ?>' == 1)
			uni_modal("Set Appointment with "+$(this).attr('data-name'),"set_appointment.php?id="+$(this).attr('data-id'),'mid-large')
		else{
			uni_modal("Login First","connexion.php")
		}
		})
    </script>
</body>

</html>