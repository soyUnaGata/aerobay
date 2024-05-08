<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/manufactures",
 *      summary="Add new manufacture",
 *      tags={"Manufacture"},
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
 *          description="Manufacture added successfully",
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
 *       path="/api/manufactures",
 *       summary="List of manufactures",
 *       tags={"Manufacture"},
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
 *        path="/api/manufactures/{manufacture}",
 *        summary="Individual manufacture",
 *        tags={"Manufacture"},
 *  @OA\Parameter (
 *     description="ID of manufacture",
 *     in="path",
 *     name="manufacture",
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
 *         path="/api/manufactures/{manufacture}",
 *         summary="Update manufacture data",
 *         tags={"Manufacture"},
 * @OA\Parameter (
 *      description="ID of manufacture",
 *      in="path",
 *      name="manufacture",
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
 *        path="/api/manufactures/{manufacture}",
 *        summary="Delete manufacture",
 *        tags={"Manufacture"},
 * @OA\Parameter (
 *       description="ID of manufacture",
 *       in="path",
 *       name="manufacture",
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
class ManufactureController extends Controller
{

}
