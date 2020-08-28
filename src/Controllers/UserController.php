<?php

namespace App\Controllers;
use App\Model\UsersModel;

Class UserController extends BaseController{

    public function show($request, $response){

        return $this->view->render($response, 'index');
    }

    public function users($request, $response){
        $users = new UsersModel($this->container);
        $all = $users->select(array('id','nombre'));

        return $this->view->render($response,'users',compact('all'));
    }

}
