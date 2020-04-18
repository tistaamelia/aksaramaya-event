<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pelatihan extends Model
{
    protected $table = 'pelatihan';

    public static function jadwal_pelatihan()
    {
        return self::join('mentor', 'mentor.id', '=', 'pelatihan.id')->where('pelatihan.waktu_pelatihan', '>=', DB::raw('now()'))->where('pelatihan.waktu_pelatihan', '<=', DB::raw('now() + interval 3 day'));
    }

    public static function jadwal_pelatihan_tgl()
    {
        return self::jadwal_pelatihan()->select('pelatihan.waktu_pelatihan');
    }
}
