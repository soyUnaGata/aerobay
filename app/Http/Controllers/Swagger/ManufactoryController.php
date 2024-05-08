<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/manufactory",
 *      summary="Add new manufactory",
 *      tags={"Manufactory"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="MODSTER"),
 *                  )
 *              }
 *          )
 *      ),
 *      @OA\Response(
 *          response="201",
 *          description="Category added successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="MODSTER"),
 *              )
 *          )
 *      ),
 *      @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/manufactory",
 *       summary="List of manufactories",
 *       tags={"Manufactory"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="MODSTER"),
 *               )
 *              )
 *           )
 *       ),
 * @OA\Response(response="422", description="Validation errors")
 *   ),
 *
 * @OA\Get
 *   (
 *        path="/api/manufactory/{manufactory}",
 *        summary="Individual manufactory",
 *        tags={"Manufactory"},
 *  @OA\Parameter (
 *     description="ID of manufactory",
 *     in="path",
 *     name="manufactory",
 *     required=true,
 *     example=1
 *  ),
 *  @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="MODSTER"),
 *                )
 *               )
 *            )
 *        ),
 * @OA\Response(response="422", description="Validation errors")
 *    ),
 *
 * @OA\Put
 *    (
 *         path="/api/manufactory/{manufactory}",
 *         summary="Update manufactory data",
 *         tags={"Manufactory"},
 * @OA\Parameter (
 *      description="ID of manufactory",
 *      in="path",
 *      name="manufactory",
 *      required=true,
 *      example=1
 *   ),
 *      @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="name", type="string", example="MODSTER"),
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
 *                     @OA\Property(property="name", type="string", example="MODSTER"),
 *                 )
 *                )
 *             )
 *         ),
 * @OA\Response(response="422", description="Validation errors")
 * ),
 *
 * @OA\Delete
 *   (
 *        path="/api/manufactory/{manufactory}",
 *        summary="Delete manufactory",
 *        tags={"Manufactory"},
 * @OA\Parameter (
 *       description="ID of manufactory",
 *       in="path",
 *       name="manufactory",
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
class ManufactoryController extends Controller
{

}
