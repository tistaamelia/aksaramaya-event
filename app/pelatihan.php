<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pelatihan extends Model
{
    protected $table = 'pelatihan';

    public static function jadwal_pelatihan_mentor()
    {
        return self::join('mentor', 'mentor.id', '=', 'pelatihan.mentor_id')->orderBy('pelatihan.waktu_pelatihan', 'asc');
    }

    public static function jadwal_pelatihan()
    {
        return self::join('mentor', 'mentor.id', '=', 'pelatihan.mentor_id')->where('pelatihan.waktu_pelatihan', '>=', DB::raw('now()'))->where(DB::raw('date(pelatihan.waktu_pelatihan)'), '<=', DB::raw('date(now()) + interval 3 day'))->orderBy('pelatihan.waktu_pelatihan', 'asc');
    }

    public static function jadwal_pelatihan_tgl()
    {
        return self::jadwal_pelatihan()->select('pelatihan.waktu_pelatihan');
    }
}
