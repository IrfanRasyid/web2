<?php
namespace App\Models;
use CodeIgniter\Model;

class SatuanModel extends Model
{
    protected $table = 'satuan';
    protected $allowedFields = ['nama', 'titik_beku', 'titik_didih'];
}