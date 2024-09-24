<?php
namespace App\Models\Contracts;

interface ConnectionMethod
{
    # Create
    public function create(String $query);

    # Read
    public function select(String $query);

    # Update
    public function update(String $query);

    # Delete
    public function delete(String $query);
}