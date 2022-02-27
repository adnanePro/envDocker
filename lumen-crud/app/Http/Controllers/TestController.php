<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CrudActions;
use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    const MODEL = Test::class;
    use CrudActions;

    /** @OA\Info(title="My First API", version="0.1") */
    /**
* @OA\Post(
 *  method ="login",

 *  path="/test",

 *  operationId="testId",

 *  summary="test Api Swager",

 *  @OA\Parameter(name="email",

 *    in="query",

 *    required=true,

 *    @OA\Schema(type="string")

 *  ),
 * 
 *  @OA\Parameter(name="password",

 *    in="query",

 *    required=true,

 *    @OA\Schema(type="string")

 *  ),

 *  @OA\Response(response="200",

 *    description="Validation Response",

 *  ),
 
 *  @OA\Response(response="401",

 *    description="Il manque des informations d'authentification valides",

 *  )
 * 

 * )

 */
    public function test(){

    }
}
