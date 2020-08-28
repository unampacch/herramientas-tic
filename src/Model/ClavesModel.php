<?php
namespace App\Model;

/**
 *
 */
class ClavesModel extends BaseModel{
  public function getSource(){
    return 'Claves';
  }

  public function obtenerClave($cuenta){
      return $this->select(
                    "Clave",[
                        "Usuario" => $cuenta
                    ]);
  }

}
