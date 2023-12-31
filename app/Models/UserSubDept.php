<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubDept extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'sub_dept_id');
    }    

}
