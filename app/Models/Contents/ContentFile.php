<?php

namespace App\Models\Contents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ContentFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
