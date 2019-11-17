<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Reply $reply)
    {
        $reply->likes()->create([
            // 'user_id' => auth()->id();
            'user_id' => 1
        ]);

        return response('Created', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like, Reply $reply)
    {
        $reply->likes()->where('user_id', 1)->first()->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
