<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    /**
     * @OA\Post(
     * path="/api/auth/login",
     * operationId="authLogin",
     * tags={"Login"},
     * summary="User Login",
     * description="Login User Here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"username", "password"},
     *               @OA\Property(property="username", type="username"),
     *               @OA\Property(property="password", type="password")
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=201,
     *          description="Login Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Login Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */

 /**
     * 
     * @OA\Get(
     * path="/api/user/all",
     * tags={"user"},
     * description="get all users here",
     *     
     *   security={ {"bearer": {} }},
     * 
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */




    /**
     * 
     * @OA\Get(
     * path="/api/match/all",
     * tags={"match"},
     * description="get all matches here",
     *     
     *   security={ {"bearer": {} }},
     * 
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Get(
     * path="/api/match/show/{id}",
     * tags={"match"},
     * description="get specific matches here",
     *     
     *   security={ {"bearer": {} }},
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true,
     * ),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Post(
     * path="/api/match/add/",
     * tags={"match"},
     * description="add new match",
     *     
     *   security={ {"bearer": {} }},
     * @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"team1", "team2","date"},
     *               @OA\Property(property="team1", type="text"),
     *               @OA\Property(property="team2", type="text"),
     *               @OA\Property(property="date", type="date"),
     *            ),
     *        ),
     *    ),
     *            
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Put(
     * path="/api/match/update/{id}",
     * tags={"match"},
     * description="update ",
     *     
     *   security={ {"bearer": {} }},
     *       @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"team1", "team2","date"},
     *               @OA\Property(property="team1", type="text"),
     *               @OA\Property(property="team2", type="text"),
     *               @OA\Property(property="date", type="date"),
     *            ),
     *        ),
     *    ),
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */



     /**
     * 
     * @OA\Delete(
     * path="/api/match/delete/{id}",
     * tags={"match"},
     * description="delete ",
     *     
     *   security={ {"bearer": {} }},
     *  
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
 /**
     * 
     * @OA\Get(
     * path="/api//match/ditails/{id}",
     * tags={"match"},
     * description="get all match details here",
     *     
     *   security={ {"bearer": {} }},
     * 
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */        
     /**
     * 
     * @OA\Post(
     * path="/api/match/addMatchDitails/{id}",
     * tags={"match"},
     * description="add new match details",
     *     
     *   security={ {"bearer": {} }},
     * @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"playername", "position"},
     *               @OA\Property(property="playername", type="text"),
     *               @OA\Property(property="position", type="text"),
     *            ),
     *        ),
     *    ),
     *            
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */






  /**
     * 
     * @OA\Get(
     * path="/api/player/all",
     * tags={"player"},
     * description="get all players here",
     *     
     *   security={ {"bearer": {} }},
     * 
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Get(
     * path="/api/player/show/{id}",
     * tags={"player"},
     * description="get specific player here",
     *     
     *   security={ {"bearer": {} }},
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true,
     * ),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Post(
     * path="/api/player/add/",
     * tags={"player"},
     * description="add new player",
     *     
     *   security={ {"bearer": {} }},
     * @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "position"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="position", type="text"),
     *            ),
     *        ),
     *    ),
     *            
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Put(
     * path="/api/player/update/{id}",
     * tags={"player"},
     * description="update ",
     *     
     *   security={ {"bearer": {} }},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "position"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="position", type="text"),
     *            ),
     *        ),
     *    ),
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */



     /**
     * 
     * @OA\Delete(
     * path="/api/player/delte/{id}",
     * tags={"player"},
     * description="delete player",
     *     
     *   security={ {"bearer": {} }},
     *  
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */








/**
     * 
     * @OA\Get(
     * path="/api/position/all",
     * tags={"position"},
     * description="get all positions here",
     *     
     *   security={ {"bearer": {} }},
     * 
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Get(
     * path="/api/position/show/{id}",
     * tags={"position"},
     * description="get specific position here",
     *     
     *   security={ {"bearer": {} }},
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true,
     * ),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Post(
     * path="/api/position/add/",
     * tags={"position"},
     * description="add new position",
     *     
     *   security={ {"bearer": {} }},
     * @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"position"},
     *               @OA\Property(property="name", type="text"),
     *            ),
     *        ),
     *    ),
     *            
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */


    /**
     * 
     * @OA\Put(
     * path="/api/position/update/{id}",
     * tags={"position"},
     * description="update position",
     *     
     *   security={ {"bearer": {} }},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"position"},
     *               @OA\Property(property="position", type="text"),
     *            ),
     *        ),
     *    ),
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */



     /**
     * 
     * @OA\Delete(
     * path="/api/position/delte/{id}",
     * tags={"position"},
     * description="delete position",
     *     
     *   security={ {"bearer": {} }},
     *  
     * @OA\Parameter(
     *         name="id",
     *         in="query",
     *         required=true),
     *       @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */



}
