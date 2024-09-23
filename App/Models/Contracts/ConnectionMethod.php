<?php


interface ConnectionMethod
{
    # Create
    public function create();

    # Read
    public function get();

    # Update
    public function update();

    # Delete
    public function delete();
}