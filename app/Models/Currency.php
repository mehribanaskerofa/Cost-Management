<?php

namespace App\Models;

use CodeIgniter\Model;

class Currency extends Model
{
    protected $table='currency';
    protected $primaryKey='id';

    protected $allowedFields=['name'];
    // Dates
    protected $useTimestamps = false;

}
