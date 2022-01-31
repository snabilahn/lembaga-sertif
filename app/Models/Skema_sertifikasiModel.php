<?php 

namespace App\Models;

use CodeIgniter\Model;

class Skema_sertifikasiModel extends Model 
{
    // memanggil nama tabel dari database
    protected $table      = 'skema_sertifikasi';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
}
