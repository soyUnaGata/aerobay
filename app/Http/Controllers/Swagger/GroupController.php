<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/groups",
 *      summary="Create new group",
 *      tags={"Group for drones"},
 * @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Drones"),
 *                      @OA\Property(property="description", type="string", example="Some description"),
 *                  )
 *              }
 *          )
 *      ),
 * @OA\Response(
 *          response="201",
 *          description="Group added successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Drones"),
 *                 @OA\Property(property="description", type="string", example="Some description"),
 *              )
 *          )
 *      ),
 * @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/groups",
 *       summary="List of groups",
 *       tags={"Group for drones"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Drones"),
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
 *        path="/api/groups/{group}",
 *        summary="Individual group",
 *        tags={"Group for drones"},
 * @OA\Parameter (
 *     description="ID of group",
 *     in="path",
 *     name="group",
 *     required=true,
 *     example=1
 *  ),
 * @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="Drones"),
 *                   @OA\Property(property="description", type="string", example="Some description"),
 *                )
 *               )
 *            )
 *        ),
 * @OA\Response(response="422", description="Validation errors")
 *    ),
 *
 * @OA\Put
 *    (
 *         path="/api/groups/{group}",
 *         summary="Update group data",
 *         tags={"Group for drones"},
 * @OA\Parameter (
 *      description="ID of group",
 *      in="path",
 *      name="group",
 *      required=true,
 *      example=1
 *   ),
 * @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="name", type="string", example="Drones"),
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
 *                     @OA\Property(property="name", type="string", example="Drones"),
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
 *        path="/api/groups/{group}",
 *        summary="Delete group",
 *        tags={"Group for drones"},
 * @OA\Parameter (
 *       description="ID of group",
 *       in="path",
 *       name="group",
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
class GroupController extends Controller
{

}
