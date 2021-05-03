<?php

namespace tutoAPI\Controllers;

use tutoAPI\Models\TutoManager;
use tutoAPI\Models\Tuto;
use tutoAPI\Controllers\abstractController;

class tutoController extends abstractController
{

    public function show($id)
    {

        // Données issues du Modèle

        $manager = new TutoManager();

        $tuto = $manager->find($id);

        // Template issu de la Vue

        return $this->jsonResponse($tuto, 200);
    }

    public function index()
    {

        $tutos = [];

        // TODO: liste des tutos

        return $this->jsonResponse($tutos, 200);
    }

    public function add()
    {

        // Ajout d'un tuto

        $tuto = [];

        // TODO: ajout d'un tuto

        return $this->jsonResponse($tuto, 200);
    }


}
