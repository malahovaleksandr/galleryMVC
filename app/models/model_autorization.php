<?php

use Illuminate\Database\Eloquent\Model;
// название всех классов не по psr - 2 должны быть в CamelCase
class Model_autorization extends Model {

    protected $table = 'users';
    public $timestamps = false;

    protected function get_data()
    {

    }

}


