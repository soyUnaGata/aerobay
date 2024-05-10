<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post
 * (
 *      path="/api/drones",
 *      summary="Create new drone",
 *      tags={"Drone"},
 * @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="GEPRC DoMain3.6 HD DJI O3 Freestyle Drone FPV PNP"),
 *                      @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast."),
 *                      @OA\Property(property="price", type="float", example=619),
 *                      @OA\Property(property="discount", type="float", example=10),
 *                      @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                      @OA\Property(property="amount", type="integer", example=15),
 *                      @OA\Property(property="class_id", type="integer", example=5),
 *                      @OA\Property(property="manufacturer_id", type="integer", example=1),
 *                  )
 *              }
 *          )
 *      ),
 * @OA\Response(
 *          response="201",
 *          description="Drone added successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="GEPRC DoMain3.6 HD DJI O3 Freestyle Drone FPV PNP"),
 *                  @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast."),
 *                  @OA\Property(property="price", type="float", example=619),
 *                  @OA\Property(property="discount", type="float", example=10),
 *                  @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                  @OA\Property(property="amount", type="integer", example=15),
 *                  @OA\Property(property="class_id", type="integer", example=5),
 *                  @OA\Property(property="manufacturer_id", type="integer", example=1),
 *              )
 *          )
 *      ),
 * @OA\Response(response="422", description="Validation errors")
 *  ),
 *
 * @OA\Get
 *  (
 *       path="/api/drones",
 *       summary="List of drones",
 *       tags={"Drone"},
 * @OA\Response(
 *           response="201",
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="string", example="GEPRC DoMain3.6 HD DJI O3 Freestyle Drone FPV PNP"),
 *                   @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast."),
 *                   @OA\Property(property="price", type="float", example=619),
 *                   @OA\Property(property="discount", type="float", example=10),
 *                   @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                   @OA\Property(property="amount", type="integer", example=15),
 *                   @OA\Property(property="class_id", type="integer", example=5),
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
 *        path="/api/drones/{drone}",
 *        summary="Individual drone",
 *        tags={"Drone"},
 * @OA\Parameter (
 *     description="ID of drone",
 *     in="path",
 *     name="drone",
 *     required=true,
 *     example=1
 *  ),
 * @OA\Response(
 *            response="201",
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="array", @OA\Items(
 *                    @OA\Property(property="id", type="integer", example=1),
 *                    @OA\Property(property="title", type="string", example="GEPRC DoMain3.6 HD DJI O3 Freestyle Drone FPV PNP"),
 *                    @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast."),
 *                    @OA\Property(property="price", type="float", example=619),
 *                    @OA\Property(property="discount", type="float", example=10),
 *                    @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                    @OA\Property(property="amount", type="integer", example=15),
 *                    @OA\Property(property="class_id", type="integer", example=5),
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
 *         path="/api/drones/{drone}",
 *         summary="Update drone data",
 *         tags={"Drone"},
 * @OA\Parameter (
 *      description="ID of drone",
 *      in="path",
 *      name="drone",
 *      required=true,
 *      example=1
 *   ),
 * @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="title", type="string", example="GEPRC DoMain3.6 HD DJI O3 Freestyle Drone FPV PNP"),
 *                       @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast."),
 *                       @OA\Property(property="price", type="float", example=619),
 *                       @OA\Property(property="discount", type="float", example=10),
 *                       @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                       @OA\Property(property="amount", type="integer", example=15),
 *                       @OA\Property(property="class_id", type="integer", example=5),
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
 *                     @OA\Property(property="description", type="string", example="Der GEPRC 3.6DoMain ist die neueste Generation der Freestyle FPV-Drohnen, die von GEPRCs Expertenteam entwickelt wurde. Mit einer umfassenden technologischen Evolution und tiefgreifendem Verständnis für Freestyle Quadcopter ist die 3.6DoMain die Traum-FPV-Drohne, die Du schon immer gesucht hast. edited  and added"),
 *                     @OA\Property(property="price", type="float", example=619),
 *                     @OA\Property(property="discount", type="float", example=10),
 *                     @OA\Property(property="image_url", type="string", example="https://cdnc.meilon.de/img/product/ge/gep-gp106233/gep-gp106233-4d8227_m.jpg"),
 *                     @OA\Property(property="amount", type="integer", example=15),
 *                     @OA\Property(property="class_id", type="integer", example=5),
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
 *        path="/api/drones/{drone}",
 *        summary="Delete drone",
 *        tags={"Drone"},
 * @OA\Parameter (
 *       description="ID of drone",
 *       in="path",
 *       name="drone",
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
class DronesController extends Controller
{

}
