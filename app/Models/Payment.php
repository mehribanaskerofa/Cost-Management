<?php

namespace App\Models;

use CodeIgniter\Model;

class Payment extends Model
{
    protected $table='payment_type';
    protected $primaryKey='id';

    protected $allowedFields=['payment'];
    // Dates
    protected $useTimestamps = false;

}
