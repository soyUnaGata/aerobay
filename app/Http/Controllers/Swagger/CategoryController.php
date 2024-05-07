<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/categories",
 *      summary="Create new category",
 *      tags={"Category"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Scaner"),
 *                      @OA\Property(property="description", type="string", example="Some description"),
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
 *                  @OA\Property(property="name", type="string", example="Scaner"),
 *                 @OA\Property(property="description", type="string", example="Some description"),
 *              )
 *          )
 *      ),
 *      @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/categories",
 *       summary="List of categories",
 *       tags={"Category"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Scaner"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *               )
 *              )
 *           )
 *       ),
 * @OA\Response(response="422", description="Validation errors")
 *   ),
 *
 * @OA\Get
 *   (
 *        path="/api/categories/{category}",
 *        summary="Individual category",
 *        tags={"Category"},
 *  @OA\Parameter (
 *     description="ID of category",
 *     in="path",
 *     name="category",
 *     required=true,
 *     example=1
 *  ),
 *  @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="Scaner"),
 *                   @OA\Property(property="description", type="string", example="Some description"),
 *                )
 *               )
 *            )
 *        ),
 * @OA\Response(response="422", description="Validation errors")
 *    ),
 *
 * @OA\Patch
 *    (
 *         path="/api/categories/{category}",
 *         summary="Update category data",
 *         tags={"Category"},
 * @OA\Parameter (
 *      description="ID of category",
 *      in="path",
 *      name="category",
 *      required=true,
 *      example=1
 *   ),
 *      @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="name", type="string", example="Scaner"),
 *                       @OA\Property(property="description", type="string", example="Some description"),
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
 *                     @OA\Property(property="name", type="string", example="Scaner"),
 *                     @OA\Property(property="description", type="string", example="Some description"),
 *                 )
 *                )
 *             )
 *         ),
 * @OA\Response(response="422", description="Validation errors")
 * ),
 *
 * @OA\Delete
 *   (
 *        path="/api/categories/{category}",
 *        summary="Delete category",
 *        tags={"Category"},
 * @OA\Parameter (
 *       description="ID of category",
 *       in="path",
 *       name="category",
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

class CategoryController extends Controller
{

}
