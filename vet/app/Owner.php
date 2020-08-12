<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "telephone",
        "email",
        "address_1",
        "address_2",
        "town",
        "postcode"
    ];
}
