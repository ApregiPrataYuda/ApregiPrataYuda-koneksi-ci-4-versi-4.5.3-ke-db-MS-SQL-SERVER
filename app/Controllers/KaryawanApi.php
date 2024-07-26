<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\Models\KaryawanApiModel;

class KaryawanApi extends BaseController
{
    protected $KaryawanApiModel;
    use ResponseTrait;

    public function __construct() {
        $this->KaryawanApiModel = new KaryawanApiModel();
    }
    
    public function index()
    {
       // Mendapatkan semua data karyawan dari model
            $karyawan = $this->KaryawanApiModel->findAll();
                if ($karyawan) {
                    // Menghitung jumlah karyawan
            $count = count($karyawan);
            // Menyiapkan data respons
            $responseData = [
                'status' => true,
                'message' => 'Data karyawan berhasil ditemukan.',
                'total' => $count,
                'data' => $karyawan
            ];
            // Merespon dengan format JSON
            return $this->response->setJSON($responseData);
        }else {
            $count = count($karyawan);
            // Menyiapkan data respons
            $responseData = [
                'status' => true,
                'message' => 'Data karyawan berhasil ditemukan.',
                'total' => $count,
                'data' => $karyawan
            ];
        }
  
    }
}
