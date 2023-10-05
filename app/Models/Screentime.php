<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screentime extends Model
{
    use HasFactory;
	
	protected $fillable = [
	'screentime',
	];
}
