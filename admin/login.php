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

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
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


  <main id="main" class=" bg-dark">
  		<div id="login-left">
  			<div class="logo">
  				<span class="fa fa-laptop-medical"></span>
  			</div>
  		</div>
  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>