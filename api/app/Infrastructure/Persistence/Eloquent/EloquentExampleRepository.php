<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\Exceptions\EntityNotFoundException;
use App\Domain\Objects\Example;
use App\Domain\Repositories\ExampleRepository;
use App\Infrastructure\Persistence\Eloquent\Factories\ExampleFactory;
use App\Infrastructure\Persistence\Eloquent\Models\ExampleDao;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EloquentExampleRepository implements ExampleRepository
{
    public function findById(int $id)
    {
        $response = DB::table(ExampleDao::TABLE_NAME)
            ->where(["id" => $id])->first();

        if (empty($response)) {
            throw new EntityNotFoundException("Mode does not exists: {$id}");
        }
        return $response;
    }
}
