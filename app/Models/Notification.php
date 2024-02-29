<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'user_notifications';
    protected $fillable = ['warehouse_id', 'user_id', 'self', 'read', 'message'];

}
