<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name'];
    protected $guard = ['web'];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }
}
