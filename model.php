<?php

class MahasiswaModel {

    private $data = [];

    public function __construct() {
        $this->data = [
            ['prodi' => 'Teknik Informatika', 'nama' => 'Renanda Aprilia'],
            ['prodi' => 'Teknik Informatika', 'nama' => 'Azril Nasywa'],
            ['prodi' => 'Sistem Informasi',   'nama' => 'Lamine Yamal'],
            ['prodi' => 'Sistem Informasi',   'nama' => 'Alexsander The Great'],
            ['prodi' => 'Teknik Komputer',    'nama' => 'Gibran Rakabuming'],
            ['prodi' => 'Teknik Komputer',    'nama' => 'Lionel Messi']
        ];
    }

    public function semua() {
        return $this->data;
    }

    public function cari($i) {
        if (isset($this->data[$i])) {
            return $this->data[$i];
        }
        return null;
    }
}
