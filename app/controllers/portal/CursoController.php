<?php

namespace app\controllers\portal;


use app\controllers\ContainerController;

class CursoController extends ContainerController
{

    public function index()
    {

    }

    public function show($request)
    {
        $this->view([
            'curso' => 'PHP MVC'
        ], 'portal.curso');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

}