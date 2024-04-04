<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetailsModel extends Model
{
    use HasFactory;

    protected $table = 'user_details';
    protected $primaryKey = 'id';


    //for factory


    // public function user()
    // {
    //     return $this->hasOne(User::class, 'eid');
    // }

        //for employee dashboard
    public function details()
    {
        return $this->belongsTo(User::class);
    }
    protected static function newFactory()
    {
        return \Database\Factories\UserDetailsModelFactory::new();
    }
}
