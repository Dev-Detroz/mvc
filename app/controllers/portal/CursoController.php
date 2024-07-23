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
            'title' => 'Curso',
            'curso' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Praesent at rhoncus orci. Aliquam malesuada nunc sit amet nisi tempus iaculis. 
                        Morbi interdum vel erat a sodales. Fusce auctor tempus volutpat.'
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