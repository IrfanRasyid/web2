<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function post_request()
    {
        //memanggil view
        return view('post_request');
    }

    public function post_response()
    {
        //data diambil dari view get_request
        $nama = $this->request->getVar('nama');
        $umur = $this->request->getVar('umur');
        //data dikirim ke view get_response
        if($umur >= 0 && $umur <= 5)
            $rentang = 'Bayi';
        if($umur >= 6 && $umur <= 12)
            $rentang = 'Anak';
            elseif($umur >= 13 && $umur <= 25)
            $rentang = 'Remaja';
            elseif($umur >= 26 && $umur <= 50)
            $rentang = 'Dewasa';
            elseif($umur >= 51)
            $rentang = 'Lansia';
        $output = [
            'nama' => $nama,
            'rentang' => $rentang,
        ];

        //memanggil view dengan membawa data output
        return view('post_response', $output);
    }

    public function get_request()
    {
        //memanggil view
        return view('get_request');
    }

    //$tanda diambil dari config/routes get_response/$1
    public function get_response($tanda,$warna)
    {   
        //data dikirim ke view get_response
        $output = [
            'tanda' => $tanda,
            'warna' => $warna,
        ];

        //memanggil view dengan membawa data output
        return view('get_response', $output);
    }
}