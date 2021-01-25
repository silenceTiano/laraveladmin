<?php

namespace App\Admin\Repositories;

use App\Models\Test1 as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Test1 extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
