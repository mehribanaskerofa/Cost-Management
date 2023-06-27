<?php

namespace App\Models;

use CodeIgniter\Model;

class Pay extends Model
{
    protected $table='pay';
    protected $primaryKey='id';

    protected $allowedFields=['amount','payment_id','currency_id','feedback','income','expense'];
    // Dates
    protected $useTimestamps = false;

    public function payment()
    {
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency','currency_id','id');
    }

}
