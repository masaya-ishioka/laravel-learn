<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    public function tasks() {
        // 下記は省略記載、本来は $this->hasMany('App\Models\Task', 'folder_id', 'id');
        return $this->hasMany('App\Models\Task');
    }
}
