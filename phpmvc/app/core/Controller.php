<?php

class Controller {
public function view($view, $sata = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}