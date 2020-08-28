<?php
namespace App\Model;

/**
 *
 */
class CuestionarioModel extends BaseModel{
  public function getSource(){
    return 'Cuestionario';
  }

  public function promedioPreguntas(){
      $sql = "SELECT ROUND(AVG( P1 ),1) AS P1, ROUND(AVG( P2 ),1) AS P2, ROUND(AVG( P3 ),1) AS P3, ROUND(AVG( P4 ),1) AS P4, ROUND(AVG( P5 ),1) AS P5, ROUND(AVG( P6 ),1) AS P6, ROUND(AVG( P7 ),1) AS P7, ROUND(AVG( P8 ),1) AS P8, ROUND(AVG( P9 ),1) AS P9
            FROM Cuestionario AS C
            LEFT JOIN Usuarios AS U ON C.Usuarios_id = U.id
            WHERE U.Tipo = 'A'AND Generacion = 2020 ";

            return $this->query($sql);
  }
}
