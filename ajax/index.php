<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Hiking</title>
</head>
<body class="body__backgraund" >
<?php 

	include ('reg.php');
 
 ?>

	<header class="header">
		<!-- гамбургер -->
		<nav class="navbar navbar-light bg-light fixed-top hamburger">
		  <div class="container-fluid hamburger__inner">
		    <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
		    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
		      <div class="offcanvas-header">
		        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hiking<br>Adventure</h5>
		        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		      </div>
		      <div class="offcanvas-body">
		        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
		          <li class="nav-item">
		            <a class="nav-link active" aria-current="page" href="#" onclick="return slowScroll('.header',-10)" >Главная</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="#" onclick="return slowScroll('.places',-10)">Места</a>
		          </li>
							<li class="nav-item">
								<a class="nav-link" href="#" onclick="return slowScroll('.promo-main',0)">Промо</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" onclick="return slowScroll('.tours-main',10)">Туры</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" onclick="return slowScroll('.contact',0)">Контакты</a>
							</li>

		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>
		<!-- гамбургер конец-->
		<div class="container-flue header__inner">
			<div class="row body__margin">
				<div class="col-lg-2 body__padding ">
					<div class="header__logo">
						<img src="./img/log.png" alt="лого">
					</div>
				</div>
				<div class="col-lg-8 col-xl-7 body__padding ">
					<nav class="header__navig">
						<ul class="head-menu ">
							<li><a class="head-menu__item " href="" target="_blank">Главная</a></li>
							<li><a class="head-menu__item" href="" onclick="return slowScroll('.places',-10)">Места</a></li>
							<li><a class="head-menu__item" href="" onclick="return slowScroll('.promo-main',0)">Промо</a></li>
							<li><a class="head-menu__item" href="" onclick="return slowScroll('.tours-main',10)">Туры</a></li>
							<li><a class="head-menu__item" href="" onclick="return slowScroll('.contact',0)">Контакты</a></li>
       			 		</ul>
					</nav>

				</div>
				<div class="col-lg-2  col-xl-3 body__padding ">
					<div class="block-social block-social__inner">
						<img class="block-social__item"src="./img/Instagram2.png" alt="Instagram">
						<img class="block-social__item"src="./img/Facebook2.png" alt="Facebook">
						<img class="block-social__item"src="./img/Twitter.png" alt="Twitter">
					</div>
				</div>
			</div>
			<div class="row body__margin">
				<div class="col-6 body__padding "><div class="header__discover">DISCOVER</div></div>
				<div class="col-6 body__padding "></div>
			</div>
			<div class="wraper" id="wraper_id">
				<div class="row body__margin">
					<div class="col body__padding">
						<div class="header__text">Поход это отличная тренировка с низким воздействием. Исследования показывают, что он предлагает множество физических и психических тренировок. Походы это тренировки на свежем воздухе, приносящие пользу, помимо живописного и веселого.
						</div>
					</div>
				</div>


				<!--  -->
				<div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
				  <div class="modal-dialog  modal-dialog-centered ">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalScrollableTitle">DISCOVER</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	1.Начните с малого и выберите правильный маршрут для вашего уровня физической подготовки<br>2.Ознакомьтесь с тропой<br>3.Проверьте погоду<br>4.Сообщите кому-нибудь, где вы будете<br>5.Упакуйте 10 предметов первой необходимости<br>6.Носите правильную обувь и носки<br>7.Правильно оденьтесь
				      </div>

				    </div>
				  </div>
				</div>

				<!--  -->
				<div class="row body__margin ">
					<div class="col body__padding">
						<div class="bd-example header__button ">
							<button class="header__button-style" type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollable" >
							Читать
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section class="places">
			<div class="container-flue places__inner">
				<div class="row body__margin">
					<div class="col-12 places__title"><div>МЕСТА</div></div>
				</div>
				<div class="row body__margin">
					<div class="col-12 body__padding"><div class="places__red-block"></div></div>
				</div>
				<div class="row body__margin">
					<div class="col-lg-4 body__padding">
						<div class="col-lg-12  body__padding"><div class="places__img"><img src="img/Forma 2.png" alt="горы"></div></div>
						<div class="col-lg-12  body__padding"><div class="places__item">ГОРЫ</div></div>
						<div class="col-lg-12 body__padding"><div class="places__mountes-text">Походы в горы Кавказа<br>с максимальным<br>комфортом</div></div>
					</div>
					<div class="col-lg-4 body__padding">
						<div class="col-lg-12 body__padding"><div class="places__img"><img src="img/Forma 3.png" alt="заполярье"></div></div>
						<div class="col-lg-12 body__padding"><div class="places__item">ЗАПОЛЯРЬЕ</div></div>
						<div class="col-lg-12 body__padding"><div class="places__arktica-text">Экспедиции на север</div></div>

					</div>
					<div class="col-lg-4 body__padding">
						<div class="col-lg-12 body__padding"><div class="places__img"><img src="img/Forma 1.png" alt="лес"></div></div>
						<div class="col-lg-12 body__padding"><div class="places__item">ЛЕСА</div></div>
						<div class="col-lg-12 body__padding"><div class="places__forest-text">Походы по туристическим<br>местам Карелии</div></div>

					</div>

				</div>
			</div>

		</section>
		<section class="promo">
			<div class="container-flue">
				<div class="row body__margin">
					<div class="col-lg-8 offset-lg-4 body__padding"><div class="promo__text promo__text-inner  ">   <div class="promo-main">ВСЕ<br>В ПОХОД</div>   </div></div>
				</div>
				<div class="row body__margin">
					<div class="col-lg-8 offset-lg-4 body__padding"><div class="promo__text-discount promo__discount-inner  ">Клуб разработал систему скидок на участие в походах!!!</div></div>
				</div>
				<div class="row body__margin">
					<div class="col-lg-8 offset-lg-4 body__padding">
						<!-- блок -->
						<div class="modal fade" id="exampleModalScrollable2" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
						  <div class="modal-dialog  modal-dialog-centered ">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalScrollableTitle">DISCOVER</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
								<strong>Детская скидка – 20%</strong>.Скидка для детей, которые участвуют в туре в сопровождении взрослых.<br>
								Скидка предоставляется детям, возраст которых на момент участия в туре от 7 до 14 лет включительно.<br><br>
								<strong>Повторная скидка – 10%</strong>.Скидка туристам, которые идут с нами в поход второй или третий раз.<br>
								Вам с нами понравилось отдыхать и хочется повторить? Тогда вам обязательно положена скидка!<br><br>
								<strong>Накопительная скидка – 15%</strong>.Скидка нашим самым постоянным туристам, которые идут с нами в поход четвертый раз и более.
						      </div>

						    </div>
						  </div>
						</div>
						<!--  блок-->


						<!-- кнопка начало -->
						<div class="promo__button-inner bd-example">
							<div class="promo__button " type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2">Подробней</div>


						</div>
						<!-- кнопка конец-->
					</div>
				</div>
			</div>

		</section>
		<section class="aventure">
			<div class="container-flue">
				<div class="row body__margin">
					<div class="col-12 body__padding aventure__tittle">
						<div class="aventure__tittle-inner">AVENTURE</div>
					</div>
					<div class="col-12 body__padding aventure__text">
						<div class="aventure__text-inner" >ЯРКИЕ ВПЕЧАТЛЕНИЯ</div>
					</div>

				</div>
				<div class="row body__margin justify-content-end">
					<div class="col-6 body__padding ">
						<div class="aventure__discount-text aventure__discount-inner" >10<div>%</div></div>
					</div>
				</div>
				<div class="row body__margin justify-content-end">
					<div class="col-6 body__padding ">
						<div class="aventure__discount-text2 aventure__discount2-inner" >скидка</div>
					</div>
				</div>
				<div class="row body__margin justify-content-end">
					<div class="col-6 body__padding ">
						<div class="aventure__discount-text3 aventure__discount3-inner" >СЕМЬЯМ</div>
					</div>
				</div>

			</div>
		</section>
		<section class="tours">
			<article class="tours-background">
				<div class="container-flue">
					<div class="row body__margin">
						<div class="col-12 body__padding tours__discover-tittle">
							<div class="tours__discover-inner">DISCOVER</div>
						</div>
						<div class="col-12 body__padding tours__text">
							<div class="tours__test-inner">Присоeдиняйтесь!!!</div>
						</div>
						<div class="col-12 body__padding tours__tours-tittle tours-main">
							<div class="tours__tours-inner  ">ТУРЫ</div>
						</div>
					</div>
				</div>
			</article>
			<article class="polar-background ">
				<div class="container-flue">
					<div class="row body__margin">
						<div class="col-12 body__padding tours__polar-tittle" >
							<div class="tours__polar-tittleInner ">Заполярье</div>
						</div>
						<div class="col-12 body__padding tours__polar-text">
							<div class="tours__polar-textInner">Экспедиции по крайнему Северу.</div>
						</div>
						<div class="col-12 body__padding">
							<div class="tours__lables-wrap">
								<div class="tours__lables-inner">
									<a target="_blank" href="https://www.google.com/maps/place/%D0%A1%D0%B0%D1%81%D1%81%D0%B5%D0%BD-%D0%91%D1%8E%D0%BD%D1%81%D0%BE%D0%B2+%D0%9B%D0%B0%D0%BD%D0%B4/@78.4642591,17.3777157,8.75z/data=!4m5!3m4!1s0x459dc158c926be69:0x7fa42a4fa1f28b63!8m2!3d78.4457239!4d17.6179517?hl=ru-RU"><img class="tours-ShapeGPS"src="./img/ShapeGPS.png" alt="GPS"></a>
								</div>
								<div class="tours__lables-inner bd-example">
									<img type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollableBERG" class="tours-ShapeSnow"src="./img/ShapeSnow.png" alt="снег">
								</div>
												<!--  -->
								<div class="modal fade" id="exampleModalScrollableBERG" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
								  <div class="modal-dialog  modal-dialog-centered ">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalScrollableTitle">Погодные условия</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">
								      	На климат архипелага Шпицберген влияет его географическое расположение между 74 ° и 81 ° северной широты. Средняя температура июля колеблется от +4 до +6 °C, января — от −12 до −16 °C. ... Шпицберген — место встречи холодного полярного воздуха с мягким и влажным морским воздухом с юга
								      </div>

								    </div>
								  </div>
								</div>

									<!--  -->
									<!--  -->
								<div class="modal fade" id="exampleModalScrollableNUMBER_5" tabindex="-1" aria-labelledby="exampleModalScrollableTitle5" style="display: none;" aria-hidden="true">
								  <div class="modal-dialog  modal-dialog-centered ">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalScrollableTitle5">Ближайшие заезды</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">

								      	5.02.2022г.<br>
								      	5.06.2022г<br>
								      	20.07.2022г<br>
								      </div>

								    </div>
								  </div>
								</div>							<!--  -->
								<div class="tours__lables-inner">
									<img type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollableNUMBER_5"class="tours-Shape5"src="./img/Shape5.png" alt="5">
								</div>
							</div>

						</div>

						<div class="col-12  body__padding">
							<!-- блок -->
							<div class="modal fade" id="exampleModalScrollable3" tabindex="-1" aria-labelledby="exampleModalScrollableTitle3" style="display: none;" aria-hidden="true">
							  <div class="modal-dialog  modal-dialog-centered ">
							    <div class="modal-content accept-task1 ">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalScrollableTitle3">DISCOVER</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
										<!-- начало формы -->
										<form name="contact0" action="" class="row g-3" method="POST" >
											<div class="col-12">
												<label for="name" class="form-label ">ФИО</label>
												<input type="text" class="form-control enter_mail0" id="name0" name="name0"placeholder="ФИО">
											</div>
										  <div class="col-12">
										    <label for="inputEmail0" class="form-label">Email</label>
										    <input type="email" class="form-control enter_mail0" id="inputEmail0" name="inputEmail0">
										  </div>
											<div class="col-12">
										    <label for="inputState0" class="form-label">Дата тура</label>
										    <select id="inputState0" class="form-select enter_mail0" name="inputState0">
										     		<option selected>05.02.2022г</option>
										      		<option>05.02.2022г</option>
													<option>20.07.2022г</option>
										    </select>
										  </div>

										  <div class="col-12">
										    <label for="inputState02" class="form-label"></label>
										    <select id="inputState02" class="form-select enter_mail0" name="inputState02">
										      <option selected>1 взрослый</option>
										      <option>2 взрослых</option>
													<option>3 взрослых</option>
													<option>4 взрослых</option>
													<option>более 4-х человек</option>
										    </select>
										  </div>


										  <div class="col-12">
										    <button type="button" class="btn btn-primary juerry_button0" >Бронировать</button>
										  </div>
										</form>
									
										<!-- конец формы -->
							      </div>
							    </div>
							  </div>
							</div>
							<!-- блок конец -->
							<div class="tours__button-inner bd-example">
								<div class="tours__button" type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollable3">Записаться</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<article class="karelia-background karelia">
				<div class="container-flue">
					<div class="row body__margin">
						<div class="col-12 body__padding tours__karelia-tittle">
							<div class="tours__karelia-tittleInner ">Карелия</div>
						</div>
						<div class="col-12 body__padding tours__karelia-text">
							<div class="tours__karelia-textInner">Туристические маршруты Северного</div>
						</div>
						<div class="col-12 body__padding tours__karelia-text">
							<div class="tours__karelia-textWrap">Приладожья</div>
						</div>

						<!--1  -->
						<div class="col-12 body__padding ">
							<div class="tours__lables-wrap karelia__wrap">
								<div class="tours__lables-inner">
									<a target="_blank" href="https://www.google.com/maps/place/%D0%9F%D0%B5%D1%81%D1%87%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9+%D0%9F%D0%BB%D1%8F%D0%B6+%D0%9A%D0%BE%D0%B9%D0%BE%D0%BD%D1%81%D0%B0%D0%B0%D1%80%D0%B8/@61.2900519,30.1078058,13.5z/data=!4m5!3m4!1s0x4699ea3124b04b79:0xb8b0705444b7e231!8m2!3d61.2795967!4d30.1023352?hl=ru-RU"><img class="tours-ShapeGPS"src="./img/ShapeGPS.png" alt="GPS"></a>
								</div>
								<div class="tours__lables-inner bd-example">
									<img type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollableKarel" class="tours-ShapeRain"src="./img/ShapeRain.png" alt="дождь">
								</div>
												<!--  -->
								<div class="modal fade" id="exampleModalScrollableKarel" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
								  <div class="modal-dialog  modal-dialog-centered ">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalScrollableTitle">Погодные условия</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">
											 Территория Карелии относится к зоне избыточного увлажнения, среднегодовое количество атмосферных осадков возрастает в направлении с севера на юг и составляет 550—750 мм. Максимальное среднемесячное количество осадков приходится на июль — август и составляет 80—90 мм. ... В марте — июле облачность не превышает 6,5 баллов.
								      </div>

								    </div>
								  </div>
								</div>

									<!--  -->
									<!--  -->
								<div class="modal fade" id="exampleModalScrollableNUMBER_3" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
								  <div class="modal-dialog  modal-dialog-centered ">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalScrollableTitle">Ближайшие заезды</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">

								      	03.05.2022г.<br>
								      	05.06.2022г<br>
								      	20.07.2022г<br>
								      </div>

								    </div>
								  </div>
								</div>							<!--  -->
								<div class="tours__lables-inner">
									<img type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollableNUMBER_3"class="tours-Shape3"src="./img/Shape3.png" alt="3">
								</div>
							</div>

						</div>
						<!--2  -->
						<div class="col-12  body__padding">
							<!-- блок -->
							<div class="modal fade " id="exampleModalScrollable4" tabindex="-1" aria-labelledby="exampleModalScrollableTitle4" style="display: none;" aria-hidden="true">
								<div class="modal-dialog  modal-dialog-centered ">
									<div class="modal-content accept-task2">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalScrollableTitle4">DISCOVER</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form name="contact1" action="" class="row g-3" method="POST">
												<div class="col-12">
													<label for="name1" class="form-label">ФИО</label>
													<input type="text" class="form-control enter_mail1" id="name1" name="name1" placeholder="ФИО">
												</div>
												<div class="col-12">
													<label for="inputEmail1" class="form-label">Email</label>
													<input type="email" class="form-control enter_mail1" id="inputEmail1" name="inputEmail1">
												</div>
												<div class="col-12">
													<label for="inputState1" class="form-label">Дата тура</label>
													<select id="inputState1" class="form-select enter_mail1" name="inputState1">
														<option selected>05.02.2022г</option>
														<option>05.02.2022г</option>
														<option>20.07.2022г</option>
													</select>
												</div>

												<div class="col-12">
													<label for="inputState12" class="form-label"></label>
													<select id="inputState12" class="form-select enter_mail1" name="inputState2">
														<option selected>1 взрослый</option>
														<option>2 взрослых</option>
														<option>3 взрослых</option>
														<option>4 взрослых</option>
														<option>более 4-х человек</option>
													</select>
												</div>


												<div class="col-12">
													<button type="button" class="btn btn-primary juerry_button1">Бронировать</button>
												</div>
											</form>
											
										</div>
									</div>
								</div>
							</div>
							<!-- блок конец -->
							<div class="karelia__buttom-inner bd-example">
								<div class="tours__button-karelia" type="button"data-bs-toggle="modal" data-bs-target="#exampleModalScrollable4">Записаться</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<article class="contact-background">
				<div class="container-flue contact">
					<div class="row body__margin">
						<div class="col-12 body__padding contact__tittle">
							<div class="contact__tittle-inner ">Наши контакты</div>
						</div>
						<div class="col-12 body__padding contact__text">
							<div class="contact__text-inner ">г.Москва, ул 3-я Строителей</div>
						</div>
						<div class="col-12 body__padding contact__text">
							<div class="contact__text-inner contact__wrap ">тел.8 (495) 000 - 00 - 00</div>
						</div>
						<div class="col-12 body__padding">
							<form name="contact2" class="input-group mb-3 contact__input-inner" method="POST" action="">
								<input type="text" class="form-control d-none" value="Выслать предложения" id="name2" name="name2" >
								<input type="email" class="form-control enter_mail" placeholder="Email"    id="inputEmail2" name="inputEmail2">

								<button class="btn btn-outline-secondary juerry_button2" type="button">Отправить</button>
							
							</form>
							<!--  -->
	
							<!--  -->
						</div>
					</div>


				</div>
			</article>
		</section>

	</main>
	<footer class="footer-background">
		<div class="footer__inner">
			<ul class="footer__list">
				<li>В ПОХОД</li>
				<li class="list__inner"><a class="list__size" href="" onclick="return slowScroll('.header',-10)">Главная</a></li>
				<li class=" list__interval"><a class="list__size" href="" onclick="return slowScroll('.places',-10)">Места</a></li>
				<li class="list__interval"><a class="list__size" href="" onclick="return slowScroll('.tours-main',10)">Туры</a></li>
				<li class=" list__interval"><a class="list__size" href="" onclick="return slowScroll('.contact',0)">Контакты</a></li>
				<li class=" list__interval"><a class="list__size" href="http://www.freepik.com" >Designed by Freepik</a></li>
			</ul>
			
		</div>


	</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		function slowScroll(id, w) {
			$("html, body").animate({
				scrollTop: $(id).offset().top - (w)
			}, 500);
			return false;
		}
		
		
	    $('.juerry_button0').click(function () {
			let name0 = document.forms.contact0.name0.value.length;
			let email0 = document.forms.contact0.inputEmail0.value.indexOf('@');
			if ((email0 == -1 ) || (name0<3)) {
			alert("Данные не корректные");
			}

			else {


		      	var name = $('#name0').val();
		      	var email = $('#inputEmail0').val();
		      	var inputState0 = $('#inputState0').val();
		      	var inputState02 = $('#inputState02').val();
		      	$.ajax({
		        	url: 'reg.php',
			        type: 'POST',
			        cache: false,
			        data: {'name0' : name, 'inputEmail0' : email, 'inputState0':inputState0 , 'inputState02': inputState02},
			        dataType: 'html',
			        success: function(data) {
			          if(data == 'Готово') {
			          	
			            $('.juerry_button0').text('Заявка принята');
			           	$('.enter_mail0').replaceWith("<input class='form-control' type='email' placeholder='' aria-label='Disabled input example' disabled>");
			           	$('.accept-task1').empty();
			           	$('.accept-task1').html("<div class='modal-header'><h5 class='modal-title' id='exampleModalScrollableTitle4'>Заявка принята</h5><button type='button' class='btn-close'data-bs-dismiss='modal' aria-label='Close'></button></div>");

			          } 
			        }
		      	});
      		}

	    });
// ___
	    $('.juerry_button1').click(function () {
			let name1 = document.forms.contact1.name1.value.length;
			let email1 = document.forms.contact1.inputEmail1.value.indexOf('@');
			if ((email1 == -1 ) || (name1<3)) {
			alert("Данные не корректные");
			}

			else {


		      	var name = $('#name1').val();
		      	var email = $('#inputEmail1').val();
		      	var inputState0 = $('#inputState1').val();
		      	var inputState02 = $('#inputState12').val();
		      	$.ajax({
		        	url: 'reg.php',
			        type: 'POST',
			        cache: false,
			        data: {'name0' : name, 'inputEmail0' : email, 'inputState0':inputState0 , 'inputState02': inputState02},
			        dataType: 'html',
			        success: function(data) {
			          if(data == 'Готово') {
			          	
			            $('.juerry_button1').text('Заявка принята');
			           	$('.enter_mail1').replaceWith("<input class='form-control' type='email' placeholder='' aria-label='Disabled input example' disabled>");
			           	$('.accept-task2').empty();
			           	$('.accept-task2').html("<div class='modal-header'><h5 class='modal-title' id='exampleModalScrollableTitle4'>Заявка принята</h5><button type='button' class='btn-close'data-bs-dismiss='modal' aria-label='Close'></button></div>");

			          } 
			        }
		      	});
      		}

	    });

// ____
		
	
	    $('.juerry_button2').click(function () {
			let name2 = document.forms.contact2.name2.value.length;
			let email2 = document.forms.contact2.inputEmail2.value.indexOf('@');
			if ((email2 == -1 ) || (name2<3)) {
			alert("Данные не корректные");
			}

			else {


		      	var name = $('#name2').val();
		      	var email = $('#inputEmail2').val();


		      	$.ajax({
		        	url: 'reg.php',
			        type: 'POST',
			        cache: false,
			        data: {'name' : name, 'inputEmail4' : email},
			        dataType: 'html',
			        success: function(data) {
			          if(data == 'Готово') {
			          	
			            $('.juerry_button').text('Все готово');
			           	$('.enter_mail').replaceWith("<input class='form-control' type='email' placeholder='Заявка принята' aria-label='Disabled input example' disabled>");
			          } 
			        }
		      	});
      		}

	    });

	
   
     
	</script>
</body>
</html>
