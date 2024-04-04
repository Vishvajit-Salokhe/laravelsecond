<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\User;

class LeaveModel extends Model
{
    use HasFactory;


    protected $table = 'leave';

    protected $primaryKey = 'id';

    public function leaveDetails(){
        return $this->belongsTo(User::class);
    }
}
