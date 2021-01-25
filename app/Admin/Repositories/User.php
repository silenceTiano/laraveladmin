<?php

namespace App\Admin\Repositories;

//use App\User as Model;

use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class User extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
