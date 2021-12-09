<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_response extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function is_correct()
    // {
    //     dd($this->question_id);
    //     return $this->qustion_id;
    // }
}
