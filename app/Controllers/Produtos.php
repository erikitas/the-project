<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{

    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function listar()
    {
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }
}