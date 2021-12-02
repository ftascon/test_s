<?php

namespace App\Infrastructure\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class ExampleDao extends Model
{
    const TABLE_NAME = "example";
    protected $table = ExampleDao::TABLE_NAME;
    public $timestamps = true;
}
