
	<?php include 'head1.php';?>  
	<meta name="description" content="Контакт - Ауто школа 15 ЈАНУАР ">
	<meta name="keywords" content="Ауто школа, ауто школа 15 јануар, научите возити, часови вожње, ауто, ауто школа Бања Лука, вожња, тестови, полагање возачког, 
		  auto škola, auto škola 15 januar, naučite voziti, časovi vožnje, auto, auto škola Banja Luka, vožnja, testovi, polaganje vozačkog">
	<title>Контакт - Ауто школа 15 ЈАНУАР</title>

	<?php include 'head2.php';?>
	<?php include 'header.php';?>


	<div class="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Почетна</a></li>
				<li>Контакт</li>
			</ul>
		</div>
	</div>
	<main id="page-main">
		<div class="container-indent">
			<div class="container">
				<h1 class="tt-title-lg text-center title-sub-page">Контакт</h1>
				<div class="row offset-2 offset-bottom-250">
					<div class="col-xs-12 col-sm-9">
						<div class="row">
							<div class="col-xs-12 col-lg-4 pull-right">
								<h3 class="tt-title-md">Ауто школа <br> 15 ЈАНУАР</h3>
								<div class="list-addess">
									<div class="item">
										<i class="icon icon-placeholder-for-map"></i>
										<h6>Адреса</h6>
										<p>
										Краља Алфонса XIII бр. 39,<br> 78000 Бања Лука
										</p>
									</div>
									<div class="item">
										<i class="icon icon-phone-call"></i>
										<h6>Телефон</h6>
										<p>
											051/961-160 <br> 065/520-830 <br> 065/534-740</span>
										</p>
									</div>

								</div>
							</div>
							<div class="divider hidden-lg"></div>
							<div class="col-xs-12 col-lg-7">
								<h2 class="tt-title-md">Пишите нам</h2>
								<div class="text-sm color-dark">
									Ако имате било каквих питања, попуните форму и пошаљите нам поруку. Одговорићемо у најбржем могућем року.
								</div>
				<?php 
               		function verify_my_email($field) {
                			$field = filter_var($field, FILTER_SANITIZE_EMAIL);
                			if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                				return true;
                			} else {
                				return false;
                			}
                	}
					

                	$to_email = 'pdragan96@gmail.com';
                	$subject = 'Контакт:'.$_POST['name'];
                	$message = 'Порука послата са сајта';
                	$name = $_POST['name'];
                	$email = $_POST['email'];
			        $telefon = $_POST['tel'];
                	$message1 = $_POST['message'];
			        $formcontent="$message \n Ime i Prezime: $name \n Email: $email \n Telefon: $telefon \n Poruka: $message1";
                	$headers = 'From:'.$email;
                	//check if the email address is invalid $secure_check
                    $secure_checking = verify_my_email($email);
                    if(isset($_POST['submit-form'])){
                        if ($secure_checking != false){
                            mail($to_email, $subject, $formcontent, $headers);
                            echo '<div class="alert alert-success" role="alert">';
                            echo "Хвала Вам.";
                            echo '</div>';
                        }
                        else{
                            echo '<div class="alert alert-danger" role="alert">';
                            echo "Invalid input";
                            echo '</div>';
                        }
						$script = file_get_contents('js/vendor/form/reload.js');
						echo "<script>".$script."</script>";
                    }
					
                ?>

								<form id="contactform" class="form-default" method="post" action="">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Име и Презиме*">
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="E-mail*">
									</div>
									<div class="form-group">
										<input type="text" name="tel" class="form-control" placeholder="Телефон*">
									</div>
									<div class="form-group">
										<textarea  name="message" class="form-control" rows="9" placeholder="Порука"></textarea>
									</div>
								<!--	<div class="successform">Your message was sent successfully!</div> 
									<button class="btn" type="submit" name="submit">Пошаљи Поруку</button>-->
									<input type="submit" name="submit-form" value="Пошаљи" class="btn" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- map -->
		<div id="googleMap" class="google-map"></div>
		<!-- /map -->
	</main>
	


	<?php include_once 'footer.php';?>