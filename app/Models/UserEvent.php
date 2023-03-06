<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 

class UserEvent extends Model
{
    use HasFactory; 

    protected $table = "user_events";
    protected $primaryKey = 'id';
    public $timestamps = true; 
    // protected $guarded = [];  

    protected $fillable = ['user_id', 'event_id', 'cost', 'select'];
}
