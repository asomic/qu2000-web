<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IS_FEATURED = 1;

    const IS_NOT_FEATURED = 2;
}
