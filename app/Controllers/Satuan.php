<?php
namespace App\Controllers;

//memanggil model
use App\Models\SatuanModel;

class Satuan extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->SatuanModel = new SatuanModel();
    }

    public function list()
    {
        //select data from table satuan
        $list = $this->SatuanModel->select('id, nama, titik_beku, titik_didih')->orderBy('nama')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('satuan_list', $output);
    }

    public function insert()
    {
        return view('satuan_insert');
    }

    public function insert_save()
    {
        $nama = $this->request->getVar('nama');
        $titik_beku = $this->request->getVar('titik_beku');
        $titik_didih = $this->request->getVar('titik_didih');

        //insert data ke table satuan
        $this->SatuanModel->insert([
            'nama' => $nama,
            'titik_beku' => $titik_beku,
            'titik_didih' => $titik_didih,
        ]);

        return redirect()->to('satuan');
    }

    public function update($id)
    {
        //select data satuan yang dipilih (filter by id)
        $data =  $this->SatuanModel->where('id', $id)->first();
        
        $output = [
            'data' => $data,
        ];

        return view('satuan_update', $output);
    }

    public function update_save($id)
    {
        $nama = $this->request->getVar('nama');

        //update data ke table satuan filter by id
        $this->SatuanModel->update($id, [
            'nama' => $nama,
        ]);

        return redirect()->to('satuan/');
    }

    public function delete($id)
    {   
        //delete data table satuan filter by id
        $this->SatuanModel->delete($id);
        return redirect()->to('satuan');
    }
}