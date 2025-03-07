<?php
//Đừng có đụng dô đụng dô không cần thay đổi gì hết
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
}
?>