@extends('default')

@section('title', 'Cuestionario')

@section('content')

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

    <div class="modal-content" style="padding: 0 !important;">

    <div class="container-fluid cuestionario">
    <div class="row">

        <div class="col-md-12 no-padding bloque-login">

            <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="videoWrapper videoWrapper169 js-videoWrapper">
            <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowtransparency="true" allowfullscreen="" data-src="https://www.youtube.com/embed/bJ9GLZ1b7xo?autoplay=1&amp; modestbranding=0&amp;rel=0&amp;hl=es"></iframe>
            <button class="videoPoster js-videoPoster" style="background-image: url(../img/poster_video_logro.jpg)">Reproducir video</button>
            </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 text-left">

            <h2 class="cuestionario_titulo">Actividad 9. Final</h2>
            <p class="cuestionario_sub">Cuéntanos que te pareció este recurso</p>

            @isset($error)
            <div class="alert alert-danger" role="alert">Debes de contestar todas las preguntas</div>
            @endisset

            <hr class="separa_general">

             <form id="cuestionario" action="/cuestionario" method="post">

            <label class="" for="p1">1. El recurso te permitió conocer herramientas nuevas para ti</label>
            <div class="form-group  form-field">
                <select name="p1" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p2">2. Fue claro el procedimiento para que obtuvieras tu correo institucional</label>
            <div class="form-group  form-field">
                <select name="p2" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p3">3. Identificaste los beneficios de tu correo institucional </label>
            <div class="form-group   form-field">
                <select name="p3" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p4">4. Aprendiste a realizar búsquedas confiables en Internet </label>
            <div class="form-group  form-field">
                <select name="p4" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p5">5. Sabes cómo compartir información desde tu correo institucional </label>
            <div class="form-group  form-field">
                <select name="p5" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p6">6. Las actividades te ayudaron a reforzar lo aprendido </label>
            <div class="form-group  form-field">
                <select name="p6" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p7">7. El diseño gráfico del recurso es agradable y facilita su uso </label>
            <div class="form-group  form-field">
                <select name="p7" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p8">8. Recomendarías este recurso </label>
            <div class="form-group  form-field">
                <select name="p8" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <label class="" for="p9">9. ¿Te aportó información nueva y relevante?</label>
            <div class="form-group  form-field">
                <select name="p9" class="star-rating" data-options='{"clearable":false, "showText":false, "maxStars": 5}'>
                    <option value="">Selecciona una calificación</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy bueno</option>
                    <option value="3">Promedio</option>
                    <option value="2">Malo</option>
                    <option value="1">Terrible</option>
                </select>
            </div>

            <input class="boton-enviar" type="submit" value="Finalizar">

        </form>


            </div>

        </div>

        <div class="back-color-final"></div>

    </div>
    </div>

    </div>
@endsection
