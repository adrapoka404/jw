<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableContact extends Model
{
    use HasFactory;

    protected $fillable = ['contact_name', 'contact_lastname', 'contact_email', 'contact_phone', 'contact_subject', 'contact_comments'];
}
