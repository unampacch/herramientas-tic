<?php
namespace App\Model;

/**
*
*/
class LogsModel extends BaseModel{

    public function getSource(){
        return 'Logs';
    }

    public function buscaAlumnoLog($numCuenta){

        $sql = "SELECT Usuarios.Nombre, Usuarios.Apellidos, Usuarios.Usuario, Usuarios.Plantel, Usuarios.Sexo, Logs.Url
                FROM Usuarios
                LEFT JOIN Logs ON Usuarios.id = Logs.Usuarios_id
                WHERE Usuarios.Usuario = '".$numCuenta."'
                AND Usuarios.Tipo = 'A' AND Generacion = 2020
                GROUP BY Logs.Url";

        return $this->query($sql);
    }

    /* Obtiene el numero de ingresos de un
       alumno en el sistema
    */
    public function numeroIngresos($numCuenta){

        $sql = "SELECT COUNT(Logs.Accion) as ingresos
            FROM Logs
            LEFT JOIN Usuarios ON Usuarios.id = Logs.Usuarios_id
            WHERE Accion = 'Inicio' AND Generacion = 2020
            AND Usuarios.Usuario = '".$numCuenta."'";

        return $this->query($sql);
    }


    public function numeroTerminoPlantel(){
        $sql = "SELECT COUNT( DISTINCT Logs.Usuarios_id) AS Total, Usuarios.Plantel AS Plantel
                 FROM Usuarios
                 INNER JOIN Logs ON Usuarios.id = Logs.Usuarios_id
                 WHERE Logs.Url LIKE '/final'
                 AND Usuarios.Tipo ='A' AND Generacion = 2020
                 GROUP BY Usuarios.Plantel";

        return $this->query($sql);
    }

    public function cuentaAlumnos(){
        $sql = "SELECT COUNT(id) AS Total, Plantel FROM Usuarios WHERE Tipo = 'A' AND Generacion = 2020 GROUP BY Plantel";
        return $this->query($sql);
    }

    public function numeroInicioPlantel(){
        $sql = "SELECT COUNT( DISTINCT Logs.Usuarios_id) AS Total, Usuarios.Plantel AS Plantel
                 FROM Usuarios
                 LEFT JOIN Logs ON Usuarios.id = Logs.Usuarios_id
                 WHERE Logs.Accion LIKE 'Inicio'
                 AND Usuarios.Tipo ='A' AND Generacion = 2020
                 GROUP BY Usuarios.Plantel";

        return $this->query($sql);
    }


}
