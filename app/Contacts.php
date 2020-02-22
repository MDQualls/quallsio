<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'contact_name', 'contact_email', 'contact_category', 'contact_message', 'ip_address',
    ];
}
