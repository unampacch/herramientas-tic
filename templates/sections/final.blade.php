@extends('default')

@section('title','Felicidades')

@section('content')

<div id="preloader">
<div id="status">&nbsp;</div>
</div>

	<div class="container-fluid nivel-gracias">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-sm-12">

				<img class="imagen-gracias img-responsive" src="/img/muchas-gracias.png" alt="Muchas gracias">

				<div class="col-lg-4 col-lg-offset-4">

				<h2 class="titulo_gracias">¡Gracias por realizar las actividades!</h2>

			  </div>

				<div class="col-lg-4 col-lg-offset-4 text-left">

					<!-- <hr class="separa_nivel_4"> -->

					<p>Como te habrás dado cuenta, el correo institucional también puede ayudarte a compartir información con tus amigos y compañeros de manera segura. Es importante que sepas que:</p>

					<ul class="list-bullet-4">
						<li>Puedes enviar correos con archivos adjuntos de hasta 10 MG.</li>
						<li>Con OneDrive tienes hasta un Terabyte para almacenar información.</li>
						<li>Cuentas con protección de antivirus y antispam.</li>
						<li>Puedes utilizar la <a href="https://onedrive.live.com/about/es-CL/download/ " target="_blank">app de OneDrive</a> en tus dispositivos móviles.</li>
					</ul>

					<p>Por eso y mucho más, no dudes en utilizarlo. Aprovecha todos sus beneficios.</p>

				</div>
                <!-- @isset($clave)
    				<div class="col-md-4 col-md-offset-4 bloque-codigo-inscripcion">
    					<p>Tu código para continuar tu inscripción es el siguiente:</p>

    					<div class="alert alert-warning">
    					<input type="text" value="{{$clave}}">
    					</div>

    					<small>Recuerda guardarlo en un lugar seguro, se te solicitará para continuar con tu proceso de inscripción </small>

						<div class="bloque-escolares">

								<hr class="hr-escolares">

								<p>Para obtener tu tira-horario ingresa a:</p>

								<p>
								<a href="http://escolares.cch-sur.unam.mx/2018/" target="_blank">http://escolares.cch-sur.unam.mx/2018/</a>
								</p>

								<p>Después haz clic en <strong>INGRESAR</strong> en la esquina superior derecha. Ingresa tu número de cuenta y fecha de nacimiento. Después deberás capturar tus datos y hacer clic en <strong>C. ESCOLAR</strong> localizado en el menú. Se desplegará un submenú, en donde dice <strong>TIRA/HORARIO</strong>, ahí podrás imprimir o descargar un <strong>PDF</strong> con tu tira.</p>

								<p>Cualquier duda comunícate a los teléfonos de control escolar o en su correo electrónico:</p>
								<p><span class="naranja">5622-9286</span> | <a href="mailto: estudiantiles.sur@cch.unam.mx">estudiantiles.sur@cch.unam.mx</a></p>

						</div>

    				</div>
                @endisset -->

				<div class="col-md-4 col-md-offset-4 bloque-regresar-inicio">
					<a class="boton-salir" href="/salir">IR AL INICIO</a>
				</div>

		</div>

		<div class="back-color-gracias"></div>

	</div>
	</div>

@endsection
