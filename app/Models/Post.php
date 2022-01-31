<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image'
    ];
    //Получение связанной таблицы user
    //Ставтья принадлежит 1 пользователю

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function setNewDateAttribute($date)
//    {
//        $this->attributes["created_at"] = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
//    }
    public function getStandDateAttribute($date)
    {
        return $this->created_at->format('d-m-Y');
    }

    public function getDatePostHumansAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getShortContentAttribute()
    {
        return mb_substr($this->content, 0, 30) . "...";
    }


}
