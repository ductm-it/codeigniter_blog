<?php namespace App\Services;
class BaseService {
    //validate
    public $validation;
    function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
}

?>