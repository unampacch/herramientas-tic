@extends('default')

@section('title', 'Busqueda')

@section('content')

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<nav class="cd-stretchy-nav">
    <a class="cd-nav-trigger" href="#0">
			<span aria-hidden="true"></span>
		</a>
    <ul>
        <li><a href="/niveles"><span>Inicio</span></a></li>
        <li><a href="/niveles/cuenta-cch"><span>Cuenta</span></a></li>
        <li><a href="/niveles/navega-seguro"><span>Navega</span></a></li>
        <li><a href="/niveles/busqueda" class="active"><span>Busca</span></a></li>
        <li><a href="/niveles/organizate"><span>Organiza</span></a></li>
    </ul>
    <span aria-hidden="true" class="stretchy-nav-bg"></span>
</nav>

<div class="container-fluid no-margin">
    <div class="row">

        <div class="col-sm-12 project project-3 nivel-portada">
            <div class="project-hover">
                <div class="glyph-icon flaticon-medical"></div>
                <h2>Salte<br class="hidden-xs"> del rincón</h2>
                <p>Conoce sitios seguros<br class="hidden-xs"> y confiables</p>
            </div>

            <a class="page-scroll" href="#actividades"><button class="scroll texto-icono">Scroll</button></a>
        </div>


        <div class="col-sm-8 col-sm-offset-2" id="actividades">
		<div class="wow animated fadeIn" data-wow-duration="2s">
            <div class="videoWrapper videoWrapper169 js-videoWrapper">
                <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowtransparency="true" allowfullscreen="" data-src="https://www.youtube.com/embed/f5XXbjiTF-o?autoplay=1&amp; modestbranding=0&amp;rel=0&amp;hl=es"></iframe>
                <button class="videoPoster js-videoPoster" style="background-image: url(../img/poster_video_busqueda.jpg)">Reproducir video</button>
            </div>
		</div>
        </div>

        <div class="col-sm-6 col-sm-offset-3">
            <p>¡Ahora es tiempo de poner manos a la obra! Te invitamos a realizar las siguientes actividades, así que lee con atención las indicaciones.</p>
        </div>

        <div class="col-sm-9 linea_busqueda_izq">
		</div>

        <div class="col-sm-6 col-sm-offset-3">
		<div class="wow animated fadeIn" data-wow-duration="2s">
            <div class="actividad actividad_busqueda_numero">Actividad 4</div>
            <h2 class="actividad_titulo">Búsqueda de información confiable</h2>
            <p>¿Podrás resolver un reto mayor?, para verificar que ya sabes identificar recursos confiables de los que no lo son, con base en el análisis de su URL, realiza la siguiente actividad.</p>

          <p class="hidden-md hidden-sm hidden-xs">Organiza la siguiente lista de sitios arrastrando solo los confiables a la caja:
					</p>

					<div class="col-md-12 no-padding ejercicio-arrastrar hidden-xs hidden-sm hidden-md">

					<div class="col-sm-12 col-md-4 texto-dragable">

					<p id="drag1" draggable="true" ondragstart="drag(event)">www.rua.unam.mx</p>

					<p id="drag2" draggable="true" ondragstart="drag(event)">www.rincondelvago.com</p>

					<p id="drag3" draggable="true" ondragstart="drag(event)">www.descargacultura.unam.mx</p>

					<p id="drag4" draggable="true" ondragstart="drag(event)">www.monografias.com</p>

					<p id="drag5" draggable="true" ondragstart="drag(event)">ru.ameyalli.dgdc.unam.mx</p>

					<p id="drag6" draggable="true" ondragstart="drag(event)">www.areaciencias.com</p>

					<p id="drag7" draggable="true" ondragstart="drag(event)">www.objetos.unam.mx</p>

					<p id="drag8" draggable="true" ondragstart="drag(event)">www.ejemplode.com</p>

					<p id="drag9" draggable="true" ondragstart="drag(event)">www.artehistoria.com</p>

					<p id="drag10" draggable="true" ondragstart="drag(event)">www.tarea-facil.com</p>

					</div>

					<div class="col-sm-12 col-md-8">

					<div id="link-dragable" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

					</div>

					</div>

				<p class="visible-md visible-sm visible-xs">Selecciona de la siguiente lista los sitios confiables:
				</p>

			<div class="checkbox-mobile visible-md visible-sm visible-xs">

				<div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
							www.rua.unam.mx
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-remove"></i></span>
							www.rincondelvago.com
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
							www.descargacultura.unam.mx
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-remove"></i></span>
							www.monografias.com
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
							ru.ameyalli.dgdc.unam.mx
						</label>
					</div>

				</div>

				<div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-remove"></i></span>
							www.areaciencias.com
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
							www.objetos.unam.mx
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-remove"></i></span>
							www.ejemplode.com
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
							www.artehistoria.com
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span class="cr"><i class="cr-icon glyphicon glyphicon-remove"></i></span>
							www.tarea-facil.com
						</label>
					</div>

				</div>

				</div>

		</div>
        </div>


		<div class="col-sm-9 col-sm-push-3 linea_busqueda_der">
		</div>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="media">
				<div class="media-body">
					<p class="texto-plagio">Es importante que recuerdes que, si recuperas información, imágenes o videos de fuentes electrónicas, libros o revistas debes citar a los autores. Cuando tomas frases o ideas de otras personas y las haces pasar como propias, estás cometiendo <strong>plagio</strong> y es un delito, por ello es importante aprender a utilizar las fuentes y a parafrasear la información que necesitas, es decir, que uses tus propias palabras para explicarte. Revisa el siguiente documento para que sepas cómo puedes citar y dar crédito a los autores de la información que utilizas.</p>
				</div>
			<div class="media-right hidden-xs hidden-sm">
				<a href="../docs/citas_bibliografias_tic.pdf" class="boton_descarga" target="_blank"><span>Descarga</span><span>PDF</span></a>
			</div>
			<div class="center-block visible-xs visible-sm">
				<a href="../docs/citas_bibliografias_tic.pdf" class="boton_descarga" target="_blank"><span>Descarga</span><span>PDF</span></a>
			</div>
			</div>
		</div>

    <div class="col-sm-9 linea_busqueda_izq">
    </div>

    <div class="col-sm-6 col-sm-offset-3">
      <div class="wow animated fadeIn" data-wow-duration="2s">
        <h2 class="actividad_titulo">Biblioteca digital</h2>
        <p>Uno de los sitios confiables que la universidad te ofrece es el servicio de biblioteca digital (Bidi-UNAM) que puedes visitar ingresando a <a href="http://www.dgb.unam.mx" target="_blank">http://www.dgb.unam.mx</a> ó <a href="http://bidi.unam.mx"
            target="_blank">http://bidi.unam.mx</a></p>
        <p>La Bidi-UNAM es un servicio para toda la comunidad universitaria y puede consultarse desde cualquier computadora dentro del Campus Universitario. Para hacer consultas desde tu casa o cualquier conexión externa, debes contar con tu Clave de
          Acceso Remoto.</p>
        <p>A continuación te explicamos cómo obtenerla:</p>
      </div>
    </div>

    <div class="col-sm-8 col-sm-offset-2">
      <div class="wow animated fadeIn" data-wow-duration="2s">
        <div class="videoWrapper videoWrapper169 js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowtransparency="true" allowfullscreen="" data-src="https://www.youtube.com/embed/elgLWpRgahs?autoplay=1&amp; modestbranding=0&amp;rel=0&amp;hl=es"></iframe>
          <button class="videoPoster js-videoPoster" style="background-image: url(../img/poster_video_bidi_unam.jpg)">Reproducir video</button>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-sm-offset-3">
      <div class="wow animated fadeIn" data-wow-duration="2s">

        <p>Es importante que consideres los siguientes aspectos para hacer la consulta de los recursos en la Bidi-UNAM:</p>

        <ul class="list-bullet-3">
          <li>Los textos pueden ser revisados en línea o puedes descargarlos. Algunos textos en línea pueden estar disponibles por un periodo de tiempo específico (p.ej. 21 días, 30 días, etc.).</li>
          <li>Para descargar algunos textos de acuerdo con el formato en el que están, pueden solicitarte instalar algún lector de PDF, de eBooks o ePufs. En la mayoría de los casos ahí mismo se te indica cómo descargarlos en tu dispositivo.</li>
          <li>Algunas colecciones te muestran cómo citar el documento. Recuerda que cuando hagas una consulta debes evitar hacer <strong>copy paste</strong> porque la Dirección General de Bibliotecas puede bloquear tu cuenta por considerarse un plagio.</li>
        </ul>

        <div class="col-lg-10 col-md-12 col-sm-12">
          <img src="../img/bidi-digital/biblioteca-digital.jpg" class="img-responsive img-shadow" alt="Biblioteca digital">
        </div>

        <div class="col-lg-2 col-md-12 col-sm-12">
          <p>La Bidi-UNAM es una fuente confiable de donde puedes obtener información para enriquecer tus clases y hacer tus tareas <strong>¡Visítala!</strong></p>
        </div>

      </div>
    </div>

    <div class="col-sm-9 col-sm-push-3 linea_busqueda_der">
    </div>

    <div class="col-sm-6 col-sm-offset-3">
      <div class="wow animated fadeIn" data-wow-duration="2s">
        <div class="actividad actividad_busqueda_numero">Actividad 5</div>
        <h2 class="actividad_titulo">Es hora de entrar a la Biblioteca Digital</h2>
        <p>Dirígete a la sección de <strong>Libros Electrónicos para Bachillerato</strong> y en el área de “Ciencias Biológicas, Químicas y de la Salud” busca los dos libros de Química que aparecen en los siguientes recuadros (usa los filtros por materia y
          escuela) y completa la información que se te pide:</p>
      </div>
    </div>

    <div class="col-sm-6 col-sm-offset-3">

      <form name="formulario" id="bidi-digital" class="row col-lg-12 formulario actividad-bidi" action="/" method="post">

        <div class="row">

          <div class="col-lg-12">
            <p class="titulo-libro">Introducción a la química y el ambiente. 1ª. Edición</p>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Autor</span>
              <input id="input1" type="text" class="input-minimal" required />
              <div class="retro text-center">Mosqueira, S.</div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Materia / Edición</span>
              <input id="input2" type="text" class="input-minimal" required />
              <div class="retro text-center">Química, 2006</div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Editorial</span>
              <input id="input3" type="text" class="input-minimal" required />
              <div class="retro text-center">Grupo Editorial Patria</div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-12">
            <p class="titulo-libro">Química Orgánica. 8ª Edición</p>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Autor</span>
              <input id="input4" type="text" class="input-minimal" required />
              <div class="retro text-center">McMurry, John</div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Materia / Edición</span>
              <input id="input5" type="text" class="input-minimal" required />
              <div class="retro text-center">Química, 2012</div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="back-frase-w-100">
              <span class="frase-writing">Editorial</span>
              <input id="input6" type="text" class="input-minimal" required />
              <div class="retro text-center">Cengage Learning Editores</div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-12">
            <button name="submit" class="btn btn-primary btn-retro btn-lg btn-block submit" type="submit" >Revisa las respuestas </button>
          </div>
          <!-- <div id="dialog" title="Rellena todos los campos">Rellena todos los campos</div> -->
        </div>
      </form>

      <div class="row">
        <div class="col-lg-12">
          <p>Recuerda que en la Bidi-UNAM puedes encontrar de manera muy ágil títulos de acuerdo a la asignatura que necesites.</p>
        </div>
      </div>

    </div>

		<div class="col-sm-9 linea_busqueda_izq">
		</div>

        <div class="col-sm-6 col-sm-offset-3">
		<div class="wow animated fadeIn" data-wow-duration="2s">
            <div class="actividad actividad_busqueda_numero">Actividad 6</div>
            <h2 class="actividad_titulo">Descarga de materiales</h2>
            <p>De la siguiente lista, elige tres enlaces, ingresa a ellos y descarga en el dispositivo que estás utilizando, el material específico que se te pide. Si los recursos no son descargables, realiza una captura de pantalla y guárdala como archivo
                de imagen.</p>

            <p>Una vez que tengas las tres descargas en tu dispositivo, puedes pasar al siguiente nivel. </p>

            <div class="panel-group wrap acordeones" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel accordion">
                    <div class="panel-heading active" role="tab" id="head-1">
                        <h3 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" class="">
						 Portal académico del CCH
						</a>
					  </h3>
                    </div>
                    <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="head-1" aria-expanded="true" style="">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/logo-portal-cch.png" alt="Portal académico del CCH"></p>

                            <p><strong>Liga:</strong> <a href="https://portalacademico.cch.unam.mx" target="_blank">https://portalacademico.cch.unam.mx</a></p>

                            <p><strong>Obtén:</strong> Captura de pantalla del Ejercicio 1 resuelto.</p>

                            <p><strong>Ruta:</strong> Objetos de aprendizaje > Histórico- Social > Historia ¿Qué y Para qué? > Concepto de Historia</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-2">
                        <h3 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
						 Revista ¿Cómo ves?
						</a>
						</h3>
                    </div>
                    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-2">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/logo-como-ves.png" alt="¿Cómo ves?"></p>

                            <p><strong>Liga:</strong> <a href="http://www.comoves.unam.mx" target="_blank">http://www.comoves.unam.mx</a></p>

                            <p><strong>Obtén:</strong> Artículo en PDF “Hasta el agua pura es pura química”, de Martín Bonfil Olivera.</p>

                            <p><strong>Ruta:</strong> Escribe el nombre del artículo en el buscador de la revista que se encuentra en la parte superior del lado derecho.</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-3">
                        <h3 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
						Red Universitaria de Aprendizaje
						</a>
						</h3>
                    </div>
                    <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-3">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/logo-rua.jpg" alt="RUA"></p>

                            <p><strong>Liga:</strong> <a href="https://www.rua.unam.mx/portal/" target="_blank">https://www.rua.unam.mx/portal/</a></p>

                            <p><strong>Obtén:</strong> Captura de pantalla del recurso del nivel dos de Números naturales (operaciones básicas por orden de prioridad).</p>

                            <p><strong>Ruta:</strong> Colegio de Ciencias y Humanidades > Primer semestre > Ver asignaturas > Matemáticas 1 > Ver unidades > Unidad 1 > Recursos para aprender > Ver los 33 recursos > Lecciones de aritmética.</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-4">
                        <h3 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
					Descarga cultura
					</a>
					</h3>
                    </div>
                    <div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-4">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/logo-descarga-cultura-2.png" alt="Descarga Cultura"></p>

                            <p><strong>Liga:</strong> <a href="https://descargacultura.unam.mx/app1" target="_blank">https://descargacultura.unam.mx/app1</a></p>

                            <p><strong>Obtén:</strong> Descarga del audio "Al volver" de Amado Nervo.</p>

                            <p><strong>Ruta:</strong> En el buscador de la página señalada escribe la palabra "Cuento". De los resultados, elige "Al volver" y descárgalo.</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-5">
                        <h3 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
					BBC Learning english. Unit 1: English in a Minute
					</a>
					</h3>
                    </div>
                    <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-5">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/bbc_learning_logo_2.png" alt="BBC Learning"></p>

                            <p><strong>Liga:</strong> <a href="http://www.bbc.co.uk/learningenglish/english/course/eiam/unit-1/session-4" target="_blank">http://www.bbc.co.uk/learningenglish/english/course/eiam/unit-1/session-4</a></p>

                            <p><strong>Obtén:</strong> Documento en PDF.</p>

                            <p><strong>Ruta:</strong> Localiza y escucha el video de la Actividad 1: Activity 1. Five ways to use hard > Descarga el PDF que trae el texto de la lección.</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-6">
                        <h3 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
					Lyrics
					</a>
					</h3>
                    </div>
                    <div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-6">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive" src="../img/logos/logo-lyrics.png" alt="Lyrics"></p>

                            <p><strong>Liga:</strong> <a href="https://es.lyricstraining.com/fr/" target="_blank">https://es.lyricstraining.com/fr/</a></p>

                            <p><strong>Obtén:</strong> Captura de pantalla de una canción elegida.</p>

                            <p><strong>Ruta:</strong> Ir a la web > Elige una canción y juega en el nivel principiante > Pulse aquí
para jugar > Quizás en otro momento.</p>

                        </div>
                    </div>
                </div>

                <div class="panel accordion">
                    <div class="panel-heading" role="tab" id="head-7">
                        <h3 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
					Retos TIC
					</a>
					</h3>
                    </div>
                    <div id="collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-7">
                        <div class="panel-body body-accordion">

							<p><img class="img-responsive logo-acordeon" src="../img/logos/logo-retos-tic.png" alt="Retos TIC"></p>

                            <p><strong>Liga:</strong> <a href="http://retos.educatic.unam.mx" target="_blank">http://retos.educatic.unam.mx</a></p>

                            <p><strong>Obtén:</strong> Captura de pantalla del ejercicio sin resolver.</p>

                            <p><strong>Ruta:</strong> Procesamiento y administración de la información > Ingresar como invitado
> Edita un texto sobre fósiles vivientes.</p>

                        </div>
                    </div>
                </div>


            </div>
            <!-- termina accordion -->
		</div>
        </div>


        <div class="col-sm-12 bloque_siguiente_organiza">
		<div class="wow animated bounce infinite" data-wow-duration="2s">
            <a href="/niveles/organizate">
                <div class="col-sm-6 col-sm-offset-3 interior_bloque_siguiente bloque_organiza con-padding">
                    <div class="glyph-icon flaticon-shapes"></div>
                    <div class="titulo_siguiente">Organízate y comparte</div>
                    <p class="siguiente_nivel">Ir al siguiente nivel</p>
                </div>
            </a>
		</div>
        </div>

			    <div id="incorrecto" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3 class="modal-title">¡Incorrecta!</h3>
                    </div>
                    <div class="modal-body interior_incorrecto">

						<p>Vuelve a revisar este nivel para aclarar las dudas que pudieras tener al respecto.</p>
						<p>Observa que los sitios www.rincondelvago.com y www.monografias.com no están avalados por ninguna empresa ni institución educativa, además tampoco cumplen con los criterios de confiablidad de la información, pues muchas veces no se identifica al autor, ni su respaldo académico y en su mayoría no muestran fuentes actualizadas ni vigentes e incluso llegan a tener faltas de ortografía.</p>

                </div>
            </div>
        </div>
		</div>

        <div id="correcto" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-correcto">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3 class="modal-title">¡Correcta!</h3>
                    </div>
                    <div class="modal-body interior_correcto">

                        <p>Muy bien, ya sabes identificar recursos confiables de los que no lo son con base en el análisis de su URL.</p>
						<p>En estos casos los sitios son avalados por la UNAM (.unam.mx).</p>

						<p><a href="../docs/sitios_confiables.pdf" target="_blank" class="text-center">A continuación te presentamos un listado de sitios confiables que puedes utilizar<br>
						<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
						</a></p>

                    </div>

                    </div>
                </div>
            </div>



        @endsection
