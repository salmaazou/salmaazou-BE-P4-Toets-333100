<?php

class PoundForPound extends BaseController
{
    private $PoundForPoundModel;
   

    public function __construct() {
        $this->PoundForPoundModel = $this->model('PoundForPoundModel');
    }

    public function index() {
        $poundForPound = $this->PoundForPoundModel->getAll();
        // var_dump($poundForPound);
        $data = [
            'PoundForPound' => $poundForPound
        ];
        $this->view('PoundForPound/index', $data);
    }
}

