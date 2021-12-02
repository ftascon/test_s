<?php

namespace App\Presentation\Api\Controllers;


use App\Application\Requests\PersistTeamRequest;
use App\Domain\Commands\Team\CreateTeamCommandRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse([], JsonResponse::HTTP_OK);
    }
}
