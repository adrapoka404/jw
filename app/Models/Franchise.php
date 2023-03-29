<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = ['information_name', 'information_lastname', 'information_email', 'information_phone', 'information_country','information_city','information_work', 'information_company','information_capital','information_comments'];
}
