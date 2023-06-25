<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey = 'nim'; // Kolom yang menjadi primary key


    public function getAllAsisten()
    {
        return $this->findAll();
    }


    protected $allowedFields = ['nim', 'nama', "praktikum", "ipk"];
    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'praktikum' => $record['praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }


    public function ambil($nim)
    {

        return $this->where(['nim' => $nim])->first();
    }

    public function hapus($nim)
    {
        $this->where(['nim' => $nim])->delete();
    }

    public function ubah($nim, $data)
    {
        $this->update($nim, $data);
    }
}
