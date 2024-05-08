<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/subcategory",
 *      summary="Add new subcategory (filter)",
 *      tags={"Subcategory|Filter"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                      @OA\Property(property="value", type="string", example="MicroSD Cards"),
 *                  )
 *              }
 *          )
 *      ),
 *      @OA\Response(
 *          response="201",
 *          description="Subcategory (filter) added successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                  @OA\Property(property="value", type="string", example="MicroSD Cards"),
 *              )
 *          )
 *      ),
 *      @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/subcategory",
 *       summary="List of subcategories (filters)",
 *       tags={"Subcategory|Filter"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                  @OA\Property(property="value", type="string", example="MicroSD Cards"),
 *               )
 *              )
 *           )
 *       ),
 * @OA\Response(response="422", description="Validation errors")
 *   ),
 *
 * @OA\Get
 *   (
 *        path="/api/subcategory/{subcategory}",
 *        summary="Individual subcategory (filter)",
 *        tags={"Subcategory|Filter"},
 *  @OA\Parameter (
 *     description="ID of subcategory",
 *     in="path",
 *     name="subcategory",
 *     required=true,
 *     example=1
 *  ),
 *  @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                   @OA\Property(property="value", type="string", example="MicroSD Cards"),
 *                )
 *               )
 *            )
 *        ),
 * @OA\Response(response="422", description="Validation errors")
 *    ),
 *
 * @OA\Put
 *    (
 *         path="/api/subcategory/{subcategory}",
 *         summary="Update subcategory (filter) data",
 *         tags={"Subcategory|Filter"},
 * @OA\Parameter (
 *      description="ID of subcategory",
 *      in="path",
 *      name="subcategory",
 *      required=true,
 *      example=1
 *   ),
 *      @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                       @OA\Property(property="value", type="string", example="MicroSD Cards"),
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
 *                     @OA\Property(property="name", type="string", example="HD Camera Accessory Type"),
 *                     @OA\Property(property="value", type="string", example="MicroSD Cards"),
 *                 )
 *                )
 *             )
 *         ),
 * @OA\Response(response="422", description="Validation errors")
 * ),
 *
 * @OA\Delete
 *   (
 *        path="/api/subcategory/{subcategory}",
 *        summary="Delete subcategory (filter)",
 *        tags={"Subcategory|Filter"},
 * @OA\Parameter (
 *       description="ID of subcategory",
 *       in="path",
 *       name="subcategory",
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
class SubcategoryController extends Controller
{
}
