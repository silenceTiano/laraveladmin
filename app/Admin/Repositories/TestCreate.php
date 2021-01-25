<?php

namespace App\Admin\Repositories;

use App\Models\TestCreate as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TestCreate extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
