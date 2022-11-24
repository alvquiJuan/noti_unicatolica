<?php

namespace App\controllers;

class Paginas extends BaseController
{
    public function index()
    {
        return view('hola');
    }

    public function view($pagina='home')
    {
        if (! is_file(APPPATH.'Views/paginas/'.$pagina.'.php')) {
            // falla si no hay un archivo con ese nombre
            throw new \CodeIgniter\Exceptions\PageNotFoundException($pagina);
            
        }
        
        $data['titulo']= ucfirst($pagina);
        $data['cuerpo']="texto de muestra";
        $data['titulo']= ucfirst($pagina);
        return view('plantillas/header',$data).
        view('paginas/'.$pagina).
        view('plantillas/footer');

    }
    
}
