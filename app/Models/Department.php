<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'department_id';
    
    protected $casts = [
        'department_id' => 'string', 
    ];

    
    protected $fillable = [
        'department_id',
        'department_name',
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }

    public function subDepartments()
    {
        return $this->hasMany(SubDepartment::class, 'department_id');
    }
}
