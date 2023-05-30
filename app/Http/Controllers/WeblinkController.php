<?php

namespace App\Http\Controllers;

use App\Http\Resources\Weblink as ResourcesWeblink;
use App\Models\Weblink;
use Illuminate\Http\Request;

class WeblinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weblinks = Weblink::all();
        // return $this->sendResponse(
        //     ResourcesWeblink::weblink($weblinks),
        //     'Posts fetched'
        // );
        return response()->json($weblinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weblink  $weblink
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weblinks = Weblink::find($id);
        // if (is_null($weblinks)) {
        //     return $this->sendError('Post does not exist');
        // }
        // return $this->sendRequest(new ResourcesWeblink($weblinks), 'Post fetched');
        return response()->json($weblinks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weblink  $weblink
     * @return \Illuminate\Http\Response
     */
    public function edit(Weblink $weblink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weblink  $weblink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weblink $weblink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weblink  $weblink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weblink $weblink)
    {
        //
    }
}
