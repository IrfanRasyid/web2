<?php
namespace App\Models;
use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table = 'kota';
    protected $allowedFields = ['prov_id', 'nama'];
}