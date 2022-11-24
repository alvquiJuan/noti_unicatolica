<?php

namespace App\Controllers;

use App\Models\NoticiasModel;

class Noticias extends BaseController
{
    public function index()
    {
        $modelo = model(NoticiasModel::class);

        $data = [
            'noticias'  => $modelo->getNoticias(),
            'titulo' => 'todas nuestras noticias',
        ];

        //aquí debe ir el procesamiento de datos

        return view('plantillas/header', $data)
            . view('noticias/vistazo',$data)
            . view('plantillas/footer');
    }

    public function view($ruta = null)
    {
        $modelo = model(NoticiasModel::class);

        $data['noticia'] = $modelo->getNoticias($ruta);
        $data['titulo'] = $data['noticia']['titulo'];

        return view('plantillas/header', $data)
        . view('noticias/noticia')
        . view('plantillas/footer');
    }
}