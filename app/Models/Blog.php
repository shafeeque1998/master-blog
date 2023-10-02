<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Blog extends Model{

    use HasFactory;

    protected $fillable = [
        'heading',
        'content',
        // Add other fields you want to be fillable here
    ];

    protected $guarded = [];

    protected static function booted(){
        
        parent::booted();

        // Generate and set a UUID before saving
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }


}
