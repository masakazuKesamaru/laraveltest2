<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // テーブル名を明示したい場合
    protected $table = 'members';

    // 複数代入する属性を指定 (ホワイトリスト) - もしくは $guarded を使う
    protected $fillable = [
        'name',
        'age',
        'gender',
    ];

    
}
