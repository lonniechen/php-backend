<?php

require_once 'SQLRepo.php';

abstract class DatabaseInterface
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new SQLRepo();
    }
}
