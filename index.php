<?php

require_once __DIR__ . '/Model.php';

class MahasiswaController {
    
    public function index() {
        $model = new MahasiswaModel();

        $daftar = $model->semua();

        include __DIR__ . '/View.php';
    }
}


$controller = new MahasiswaController();
$controller->index();
