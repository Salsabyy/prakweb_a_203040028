<?php

class Mahasiswa extends controller {
    public function index()
    {
        $data['judul'] = 'DAftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header' $data);
        $this->view('mahasiswa/index' $data);
        $this->view('templates/foooter');
    }
}