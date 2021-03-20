		<div class="social-networks-share">
			<h1 style="text-align:center" > Подијели на друштвеним мрежама: </h1>
			<div class="sharethis-inline-share-buttons" ></div>
		</div>
		<!-- Footer -->
		<footer id="tt-footer" class="index-offset">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-3 col-logo">
						<a  class="tt-logo" href="index.php">
						<img class="logo-icon" src="images/logo-icon.png" alt="">
						<img class="logo-letter" src="images/logo-letter.png" alt="">
						<span class="logo-text" style="font-size:29px;">15 ЈАНУАР</span>
						<span class="slogan-text"><span> АУТО ШКОЛА</span></span>
						</a>
						<div class="tt-footer-box-info">
						Нудимо професионалне услуге које имају за циљ да вам пруже самопоуздање да положите возачки испит и безбједно возите на путевима.
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-list">
						<div class="row ">
							<div class="col-xs-12 col-sm-6 extra-indent">
								<h6 class="tt-foter-title">Информације</h6>
								<ul class="tt-footer-list">
									<li><a href="about.php#cjenovnik">Цјеновник</a></li>
									<li><a href="program.php">Програм</a></li>
									<li><a href="about.php#testovi">Online тестови </a></li>
									<li><a href="faq.php">Честа питања</a></li>
									<li><a href="contact.php">Контакт</a></li>
								</ul>
							</div>
							<!--
							<div class="col-xs-12 col-sm-6 extra-indent">
								<h6 class="tt-foter-title">Cutomer Service</h6>
								<ul class="tt-footer-list">
									<li><a href="faq.php">Search Terms</a></li>
									<li><a href="faq.php">Site Map</a></li>
									<li><a href="faq.php">Privacy</a></li>
									<li><a href="faq.php">Terms of Use</a></li>
									<li><a href="contact.php"> Контакт </a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-md-12 col-lg-3 col-promo">
						<!-- tt-social-icon -->
						<ul class="tt-social-icon">
							<li><a href="https://www.facebook.com/autoskola15januar/" target="blank"><i class="icon-facebook-logo"></i></a></li>
						</ul>
						<!-- /tt-social-icon -->
						<!-- tt-baner-01 -->
						<div class="tt-baner-01">
							<a class="tt-logo-banner" href="index.php">
							<img class="logo-icon" src="images/logo-icon.png" alt="">
							<img class="logo-letter" src="images/logo-letter.png" alt="">
							<span class="logo-text" style="font-size:25px;margin-top:5px">15 ЈАНУАР</span>
							<span class="slogan-text"><span> АУТО ШКОЛА </span></span>
							</a>
							<address>
								<span class="tel">
								<a href="#"><i class="icon-phone-call"></i>051/961-160 <br> 
								 <i class="icon-phone-call"></i> 065/520-830</a>
								</span>
								<span>Краља Алфонса XIII бр. 39,<br>78000 Бања Лука</span>
							</address>
						</div>
						<!-- /tt-baner-01 -->
					</div>
					<div class="col-md-12">
						<div class="tt-footer-copyright">
							Copyright © 2020, Сва права задржана.
							Садржај ових страница не смије се преносити без дозволе и без навођења извора. <br>
							Веб развој БитЛаб д.о.о.
						</div>
					</div>
					<div class="back-to-top">
						<i class="icon-down-arrow"></i>
					</div>
				</div>
			</div>
		</footer>
		<!-- /Footer -->
		<!-- External JavaScripts -->
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/vendor/slick.min.js"></script>
		<script src="js/vendor/jquery.parallax-scroll.js"></script>
		<script src="js/vendor/imagesloaded.pkgd.min.js"></script>
		<script src="js/vendor/countdown/jquery.plugin.min.js"></script>
		<script src="js/vendor/countdown/jquery.countdown.min.js"></script>
		<script src="js/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<script src="js/custom.js"></script>
		<!-- Modal (ORDER PACKAGE) -->
		<div class="modal  fade"  id="ModalOrderPackage01" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content ">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-cancel"></span></button>
					</div>
					<div class="modal-body layout-01">
						<h6 class="tt-title">Пријава</h6>

				<?php
                	function sanitize_my_email($field) {
                		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
                		if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                			return true;
                		} else {
                			return false;
                		}
                	}

                	$to_email = 'pdragan96@gmail.com';
                	$subject = 'Пријава:'.$_POST['name'];
                	$message = 'Пријава за полагање';
                	$name = $_POST['name'];
                	$email = $_POST['email'];
			        $telefon = $_POST['tel'];
                	$message1 = $_POST['message'];
			        $formcontent="$message \n Ime i Prezime: $name \n Email: $email \n Telefon: $telefon \n Poruka: $message1";
                	$headers = 'From:'.$email;
                	//check if the email address is invalid $secure_check
                    $secure_check = sanitize_my_email($email);
                    if(isset($_POST['submit-form'])){
                        if ($secure_check != false){
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

						<form id="form-default-01" class="form-default-02" method="post"  action="">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Име и презиме">
							</div>
							<div class="form-group">
								<input type="text" name="tel" class="form-control" placeholder="Телефон">
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="E-mail">
							</div>

							<div class="form-group">
								<textarea  name="message" class="form-control" rows="4" placeholder="Порука"></textarea>
							</div>
							<div class="text-center">
								<input type="submit" name="submit-form" value="Пошаљи" class="btn" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- / Modal (ORDER PACKAGE) -->

	</body>
</html>