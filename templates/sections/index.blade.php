@extends('default')

@section('title', 'Herramientas TIC')

@section('content')

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="container-fluid niveles">
        <div class="row">

            <div class="col-md-12 no-padding bloque-login">

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div id="videoPortada" class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowtransparency="true" allowfullscreen="" data-src="https://www.youtube.com/embed/Z0Ktx5mCXXc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1; modestbranding=0&amp;rel=0&amp;hl=es"></iframe>
                        <button class="videoPoster js-videoPoster" style="background-image: url('../img/poster_video_introduccion.jpg')">Reproducir video</button>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 text-left">

				<div class="logotipos">

				<!-- <div class="logotipos-unam">
					<img class="logo_login_unam" src="../img/logo-unam.svg" alt="UNAM">
					<img class="logo_login_unam" src="../img/logo-cch.svg" alt="CCH">
				</div> -->

				<hr class="separa_logotipos hidden-md hidden-sm hidden-xs">

				<div class="logotipos-cch">
          <img class="logos_cch" src="img/logo-unam.svg" alt="UNAM">
          <img class="logos_cch logos-unam-cch" src="img/logo-cch.svg" alt="CCH">
					<img class="logos_cch logos-planteles" src="../img/logo-cch-azcapotzalco.svg" alt="CCH Azcapotzalco">
					<img class="logos_cch" src="../img/logo-cch-naucalpan.svg" alt="CCH Naucalpan">
					<img class="logos_cch" src="../img/logo-cch-vallejo.svg" alt="CCH Vallejo">
					<img class="logos_cch" src="../img/logo-cch-oriente.svg" alt="CCH Oriente">
					<img class="logos_cch" src="../img/logo-cch-sur.svg" alt="CCH Sur">
				</div>

				</div>

					<hr class="separa_logotipos">

                    <h2 class="titulo_login">¡Bienvenido a la UNAM!</h2>
					<h2 class="leyenda-cch">Ya eres parte del Colegio de Ciencias y Humanidades</h2>
                    <p>Para poder ingresar al plantel, debes adquirir una serie de herramientas que te ayudarán a afrontar con éxito los retos que se avecinan, así que regístrate y pon mucha atención.</p>
                    @isset($error)
                    <div class="alert alert-danger" role="alert">Usuario o contraseña no validos</div>
                    @endisset
                    <form action="/" method="post">
                        <div class="form-group">
                            <!--	<label class="control-label">Alumno</label>-->

                            <input type="text" name="user" class="form-control input-lg" placeholder="Número de cuenta">

                            <div class="input-group input-group-lg">

                            <input type="text" class="date-picker form-control input-lg" data-date-language="es" data-date-start-view="decade" data-date-format="dd/mm/yyyy" data-date="01/01/1990" value="01/01/1990" name="password" placeholder="DD/MM/AAAA">
							<small class="visible-xs visible-sm visible-md">Escribe tu fecha de nacimiento con el siguiente formato: dd/mm/aaaa</small>

                            </div>
                        </div>

					<input class="boton-login" type="submit" value="Entrar">
                    </form>



                </div>

            </div>

            <div class="back-color"></div>

        </div>
    </div>

@endsection
