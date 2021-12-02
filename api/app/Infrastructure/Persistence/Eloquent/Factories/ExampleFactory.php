<?php


namespace App\Infrastructure\Persistence\Eloquent\Factories;


use App\Domain\Objects\Example;

class ExampleFactory implements FactoryInterface
{
    public function build(object $data): Example
    {
        $mode = new Example();
        $mode->setName($data->name);
        $mode->setId((int)$data->id);
        return $mode;
    }
}
