<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Model\LogsModel;
use App\Model\CuestionarioModel;

Class AdminController extends BaseController{

    public function showBackend($request, $response){

        $valores      = array();
        $totalAlumnos = 0;
        $totalFinal   = 0;
        $totalInicio  = 0;
        $alumnos      = new LogsModel($this->container);
        $respuestas   = new CuestionarioModel($this->container);

        /*$sql = "SELECT DISTINCT URL FROM Logs WHERE Usuarios_id = 1";
        $r = $avanse->query($sql);*/

        $numtot   = $alumnos->cuentaAlumnos();
        $numter   = $alumnos->numeroTerminoPlantel();
        $numini   = $alumnos->numeroInicioPlantel();
        $valores['cuestionario'] = $respuestas->promedioPreguntas();



        for ($i=0; $i<5;$i++){
            $totalAlumnos += $numtot[$i]['Total'];
            $totalInicio  += $numini[$i]['Total'];
            $valores[self::plantel($numtot[$i]['Plantel'])] = $numtot[$i]['Total'];
            $valores['inicio'][self::plantel($numini[$i]['Plantel'])] = $numini[$i]['Total'];

            if(!empty($numter)){
                    $totalFinal += $numter[$i]['Total'];
                    $valores['avances'][self::plantel($numter[$i]['Plantel'])] = round((($numter[$i]['Total'] * 100) / $numtot[$i]['Total']), 1, PHP_ROUND_HALF_DOWN);
                    $valores['avances_num'][self::plantel($numter[$i]['Plantel'])] = $numter[$i]['Total'];
            }else{
                $valores['avances'][self::plantel($numtot[$i]['Plantel'])] = 0;
            }
        }

        $valores['total']  = $totalAlumnos;
        $valores['inicioTotal'] = $totalInicio;
        $valores['avancesTotal'] = round((($totalFinal * 100) / $totalAlumnos), 1, PHP_ROUND_HALF_DOWN) ;
        $valores['avancesTotal_num'] = $totalFinal;


        return $this->view->render($response,'admin/dashboard',compact('valores'));
        //return $this->view->render($response, 'admin/dashboard');

    }

    public function buscaAlumno($request, $response, $args){
        if (empty($args['cuenta']) && empty($request->getParam('cuenta'))) {
            return $this->view->render($response, 'admin/busqueda');
        }

        empty($args['cuenta']) ?  $cuenta = $request->getParam('cuenta') : $cuenta = $args['cuenta'];


        $valores   = array("/niveles/busqueda","/niveles/cuenta-cch","/niveles/navega-seguro","/niveles/organizate","/cuestionario");
        $stat      = new LogsModel($this->container);
        $logAlumno = $stat->buscaAlumnoLog($cuenta);

        if (!empty($logAlumno)) {
            $alumno['nombre']    = $logAlumno[0]['Nombre'];
            $alumno['apellidos'] = $logAlumno[0]['Apellidos'];
            $alumno['cuenta']    = $logAlumno[0]['Usuario'];
            $alumno['ingresos']  = $stat->numeroIngresos($cuenta);
            $alumno['plantel']   = self::plantel($logAlumno[0]['Plantel']);
            $alumno['genero']    = self::genero($logAlumno[0]['Sexo']);


            foreach ($valores as $item){
                if(self::buscar_en_array($item, $logAlumno) == false){
                    $alumno['termino'] = "No";
                    break;
                }else{
                    $alumno['termino']  = "Si";
                    $alumno['niveles'][] = $item;
                }
            }


        }else{
            //Usuario no encontrado
        }

        return $this->view->render($response, 'admin/alumno',  compact('alumno'));
    }


    public function descargarListas($request, $response){
        return $this->view->render($response, 'admin/descargas');
    }


    private function buscar_en_array($valor, $array) {
        if (in_array($valor, $array)) {
            return true;
        }

        foreach ($array as $item) {
            if (is_array($item) && array_search($valor, $item))
            return true;
        }

        return false;
    }

    private function plantel($id){
        switch($id){
            case 47202: return "Azcapotzalco";
                break;
            case 47203: return "Naucalpan";
                break;
            case 47204: return "Vallejo";
                break;
            case 47205: return "Oriente";
                break;
            case 47206: return "Sur";
                break;
        }
    }

    private function genero($id){
        switch($id){
            case 1: return "Hombre";
                break;
            case 2: return "Mujer";
                break;
        }
    }
}
