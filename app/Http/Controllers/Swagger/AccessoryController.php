<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/accessories",
 *      summary="Create new accessory",
 *      tags={"Accessory"},
 * @OA\RequestBody(
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
 *                      @OA\Property(property="amount", type="integer", example=15),
 *                      @OA\Property(property="category_id", type="integer", example=5),
 *                      @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                  )
 *              }
 *          )
 *      ),
 * @OA\Response(
 *          response="201",
 *          description="Accessory added successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer Cat 3 Mini"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *                  @OA\Property(property="price", type="float", example=350),
 *                  @OA\Property(property="discount", type="float", example=10),
 *                  @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                  @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                  @OA\Property(property="weight", type="string", example="1200g"),
 *                  @OA\Property(property="color", type="string", example="Black"),
 *                  @OA\Property(property="type", type="string", example="Camera"),
 *                  @OA\Property(property="amount", type="integer", example=15),
 *                  @OA\Property(property="category_id", type="integer", example=5),
 *                  @OA\Property(property="manufacturer_id", type="integer", example=1),
 *              )
 *          )
 *      ),
 * @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/accessories",
 *       summary="List of accessories",
 *       tags={"Accessory"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer Cat 3 Mini"),
 *                   @OA\Property(property="description", type="string", example="Some description"),
 *                   @OA\Property(property="price", type="float", example=350),
 *                   @OA\Property(property="discount", type="float", example=10),
 *                   @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                   @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                   @OA\Property(property="weight", type="string", example="1200g"),
 *                   @OA\Property(property="color", type="string", example="Black"),
 *                   @OA\Property(property="type", type="string", example="Camera"),
 *                   @OA\Property(property="amount", type="integer", example=15),
 *                   @OA\Property(property="category_id", type="integer", example=5),
 *                   @OA\Property(property="manufacturer_id", type="integer", example=1),
 *               )
 *              )
 *           )
 *       ),
 * @OA\Response(response="422", description="Validation errors")
 *   ),
 *
 * @OA\Get
 *   (
 *        path="/api/accessories/{accessory}",
 *        summary="Individual accessory",
 *        tags={"Accessory"},
 * @OA\Parameter (
 *     description="ID of accessory",
 *     in="path",
 *     name="accessory",
 *     required=true,
 *     example=1
 *  ),
 * @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                    @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer Cat 3 Mini"),
 *                    @OA\Property(property="description", type="string", example="Some description"),
 *                    @OA\Property(property="price", type="float", example=350),
 *                    @OA\Property(property="discount", type="float", example=10),
 *                    @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                    @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                    @OA\Property(property="weight", type="string", example="1200g"),
 *                    @OA\Property(property="color", type="string", example="Black"),
 *                    @OA\Property(property="type", type="string", example="Camera"),
 *                    @OA\Property(property="amount", type="integer", example=15),
 *                    @OA\Property(property="category_id", type="integer", example=5),
 *                    @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                )
 *               )
 *            )
 *        ),
 * @OA\Response(response="422", description="Validation errors")
 *    ),
 *
 * @OA\Put
 *    (
 *         path="/api/accessories/{accessory}",
 *         summary="Update accessory data",
 *         tags={"Accessory"},
 * @OA\Parameter (
 *      description="ID of accessory",
 *      in="path",
 *      name="accessory",
 *      required=true,
 *      example=1
 *   ),
 * @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer Cat 3 Mini"),
 *                       @OA\Property(property="description", type="string", example="Some description"),
 *                       @OA\Property(property="price", type="float", example=350),
 *                       @OA\Property(property="discount", type="float", example=10),
 *                       @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                       @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                       @OA\Property(property="weight", type="string", example="1200g"),
 *                       @OA\Property(property="color", type="string", example="Black"),
 *                       @OA\Property(property="type", type="string", example="Camera"),
 *                       @OA\Property(property="amount", type="integer", example=15),
 *                       @OA\Property(property="category_id", type="integer", example=5),
 *                       @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                   )
 *               }
 *           )
 *       ),
 * @OA\Response(
 *             response="201",
 *             description="Ok",
 *             @OA\JsonContent(
 *                 @OA\Property(property="data", type="array", @OA\Items(
 *                     @OA\Property(property="id", type="integer", example=1),
 *                     @OA\Property(property="title", type="string", example="Analog FPV camera Foxeer"),
 *                     @OA\Property(property="description", type="string", example="Some description edited  and added"),
 *                     @OA\Property(property="price", type="float", example=350),
 *                     @OA\Property(property="discount", type="float", example=10),
 *                     @OA\Property(property="image_url", type="string", example="https://www.dronesdirect.co.uk/Images/CP.ZM.00000136.01_1_12679407_Supersize.jpg?v=8"),
 *                     @OA\Property(property="dimensions", type="string", example="152 x 152 x 82 mm"),
 *                     @OA\Property(property="weight", type="string", example="1200g"),
 *                     @OA\Property(property="color", type="string", example="Black"),
 *                     @OA\Property(property="type", type="string", example="Camera"),
 *                     @OA\Property(property="amount", type="integer", example=15),
 *                     @OA\Property(property="category_id", type="integer", example=5),
 *                     @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                 )
 *                )
 *             )
 *         ),
 * @OA\Response(response="422", description="Validation errors")
 * ),
 *
 * @OA\Delete
 *   (
 *        path="/api/accessories/{accessory}",
 *        summary="Delete accessory",
 *        tags={"Accessory"},
 * @OA\Parameter (
 *       description="ID of accessory",
 *       in="path",
 *       name="accessory",
 *       required=true,
 *       example=1
 *    ),
 * @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="message", type="string", example="Done"),
 *            )
 *        ),
 * @OA\Response(response="422", description="Something went wrong")
 *    ),
 */
class AccessoryController extends Controller
{

}
