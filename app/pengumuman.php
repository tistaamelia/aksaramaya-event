<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'pengumuman';

    public static function pengumuman()
    {
        return self::join('mentor', 'mentor.id', '=', 'pengumuman.mentor_id');
    }
}
