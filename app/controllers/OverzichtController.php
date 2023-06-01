<?php
// OverzichtController.php (Controller)

// require_once 'models/OverzichtModel.php';

class OverzichtController extends BaseController
{
    private $overzichtModel;

    public function __construct()
    {
        $this->overzichtModel = $this->model('OverzichtModel');
    }

    public function index()
    {
        $examinatoren = $this->overzichtModel->getExaminatoren();
       
        // Laad de view
        $data = [
            
            'examinatoren' => $examinatoren
        ];
        $this->view('overzicht/index', $data);
    }
}
?>
