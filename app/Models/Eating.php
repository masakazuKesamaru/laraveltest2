<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eating extends Model
{
    use HasFactory;

    protected $table = 'eatings';

    protected $fillable = [
        'type',
        'result',
        'time',
        'date',
        'member_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);  // member_logs テーブルの member_id が、members テーブルの id に対応
    }
}
