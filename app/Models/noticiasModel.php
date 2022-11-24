<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{
    protected $table = 'noticias';

    public function getNoticias($ruta = false)
    {
        if ($ruta==false){
            return $this->findAll(); 
            //equivale a: SELECT * FROM 'noticias';
        }
        return $this->where(['ruta' => $ruta])->first();
        //equivale a: SELECT * FROM 'noticias' WHERE ruta like %parámetro% LIMIT 1;
    
    }

}

