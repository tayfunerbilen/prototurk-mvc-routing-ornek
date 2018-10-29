<?php

class Controller
{

    public function view($name, $data = [])
    {
        extract($data);
        require __DIR__ . '/view/' . strtolower($name) . '.php';
    }

    public function model($name)
    {
        require __DIR__ . '/model/' . strtolower($name) . '.php';
        return new $name();
    }

}