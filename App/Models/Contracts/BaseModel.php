<?php
namespace App\Models\Contracts;

abstract class BaseModel implements ConnectionMethod
{
    protected $connection;
    protected $table;
    protected $primaryKey = 'id';
    protected $pageSize = 10;
    protected $fields = [];
}
