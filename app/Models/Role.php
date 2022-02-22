<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use Spatie\Permission\Traits\HasRoles;


class Role extends Model
{
    use HasFactory, HasRoles;
    
    protected $fillable = ['name', 'guard_name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_has_permissions');
    }

}
