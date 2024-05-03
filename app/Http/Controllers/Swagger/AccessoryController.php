<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/accessories",
 *      summary="Create new accessory",
 *      tags={"Accessory"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer Cat 3 Mini"),
 *                      @OA\Property(property="description", type="string", example="Some description"),
 *                      @OA\Property(property="price", type="float", example=350),
 *                      @OA\Property(property="discount", type="float", example=10),
 *                      @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                      @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                      @OA\Property(property="weight", type="string", example="1200g"),
 *                      @OA\Property(property="color", type="string", example="Black"),
 *                      @OA\Property(property="type", type="string", example="Camera"),
 *                      @OA\Property(property="category_id", type="integer", example=5),
 *                      @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                  )
 *              }
 *          )
 *      ),
 *      @OA\Response(response="201", description="Accessory added successfully"),
 *      @OA\Response(response="422", description="Validation errors")
 *  )
 */
class AccessoryController extends Controller
{

}
