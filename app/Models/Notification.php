<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['warehouse_id', 'user_id', 'self', 'read', 'message'];

}
