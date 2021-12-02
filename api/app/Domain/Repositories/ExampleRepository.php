<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Objects\Example;
use Illuminate\Support\Collection;

interface ExampleRepository
{
    public function findById(int $id);
}
