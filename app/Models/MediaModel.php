<?php 

namespace App\Models;

use CodeIgniter\Model;

class MediaModel extends Model 
{
    // memanggil nama tabel dari database
    protected $table      = 'media';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
}
