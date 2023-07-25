<?php

namespace App\Controllers;

use App\Models\TokoModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new TokoModel();
    }
    public function index()
    {
        $all = $this->db->findAll();

        $data = [
            'barang' => $all
        ];

        return view('crud/view', $data);
    }
    public function tambah()
    {
        if (isset($_POST['id'])) {

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];

            $upload = [
                'id' => $id,
                'nama' => $nama,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $harga
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        } else {

            return view('crud/upload');
        }
    }
    public function edit($ie)
    {
        $id = $ie;
        $a = $this->db->find($id);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }
    public function editan()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $newid = $_POST['newid'];
        $newNama = $_POST['newNama'];
        $newkategori = $_POST['newkategori'];
        $newharga = $_POST['newharga'];
       

        $this->db->where('id', $id,'nama',$nama, 'kategori', $kategori, 'harga', $harga)
            ->set('id', $newid)
            ->set('nama', $newNama)
            ->set('kategori', $newkategori)
            ->set('harga', $newharga)
            
            ->update();
        return redirect()->to(base_url('/crud'));
    }
    public function hapus($ie)
    {
        $id = $ie;
        $this->db->delete($id);
        return redirect()->to("/crud");
    }
}
