<?php

class Enrutador extends Controlador
{
    //Bienvenido al desarrollo de tu propio Aplicativo con las mejores practicas que un ecosistema pueda presentar 
    public function __construct()
    {
        $this->sesionModelo = $this->modelo('Sesion');
        $this->validarModelo = $this->modelo('Validar');
    }

    public function index()
    {
        $this->vista("login/login");
    }
}

 