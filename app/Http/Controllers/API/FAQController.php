<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\FAQ;

class FAQController extends Controller
{
    private $json = [];
    private $http_code = 500;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Example:
     * ```
     * {
     *     "data": {
     *         [
     *             {"id": 1, "title": "FAQ 1", "data": "Content here.", "created_at": "-", "updated_at": "-"},
     *             {"id": 2, "title": "FAQ 2", "data": "Content here.", "created_at": "-", "updated_at": "-"},
     *             {"id": 3, "title": "FAQ 3", "data": "Content here.", "created_at": "-", "updated_at": "-"}
     *         ]
     *     }
     * }
     * ```
     *
     * Uses HTTP code 204 if the resource is empty.
     * Uses HTTP Code 200 if the resource returns data.
     */
    public function index()
    {
        $data = FAQ::all();

        if (! count($data))
        {
            $this->json['data'] = [];
            // HTTP Code 204: No Content
            $this->http_code = 204;
        }
        else
        {
            $this->json['data'] = $data;
            // Http Code 200: OK
            $this->http_code = 200;
        }

        return response()->json($this->json, $this->http_code);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * Example:
     * ```
     * {
     *     "data": {"id": 1, "title": "FAQ 1", "data": "Content here.", "created_at": "-", "updated_at": "-"}
     * }
     * ```
     *
     * Uses HTTP code 201 if the input is accepted. 
     */
    public function store(Request $request)
    {
        $input = $request->only(['title', 'data']);

        $data = new FAQ;
        $data->title = $input['title'];
        $data->data = $input['data'];
        $data->save();

        $this->json['data'] = $data;
        // Http Code 201: Created
        $this->http_code = 201;

        return response()->json($this->json, $this->http_code);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Example:
     * ```
     * {
     *     "data": {"id": 1, "title": "FAQ 1", "data": "Content here.", "created_at": "-", "updated_at": "-"}
     * }
     * ```
     *
     * Uses HTTP code 404 if the resource is not found.
     * Uses HTTP Code 200 if the resource returns data.
     */
    public function show($id)
    {
        $data = FAQ::find($id);

        if (! count($data))
        {
            $this->json['data'] = [];
            // Http Code 404: Not Found
            $this->http_code = 404;
        }
        else
        {
            $this->json['data'] = $data;
            // Http Code 200: OK
            $this->http_code = 200;
        }

        return response()->json($this->json, $this->http_code);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Example:
     * ```
     * {
     *     "data": {"id": 1, "title": "FAQ 1", "data": "Content here.", "created_at": "-", "updated_at": "-"}
     * }
     * ```
     *
     * Uses HTTP code 404 if the resource is not found.
     * Uses HTTP Code 200 if the resource returns data.
     */
    public function update(Request $request, $id)
    {
        $input = $request->only(['title', 'data']);
        $data = FAQ::find($id);

        if (! count($data))
        {
            $this->json['data'] = [];
            // Http Code 404: Not Found
            $this->http_code = 404;
        }
        else
        {
            $data->title = $input['title'];
            $data->data = $input['data'];
            $data->save();

            $this->json['data'] = $data;
            // Http Code 200: OK
            $this->http_code = 200;
        }

        return response()->json($this->json, $this->http_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Example:
     * ```
     * {
     *     "data": {"id": 1, "title": "FAQ 1", "data": "Content here.", "created_at": "-", "updated_at": "-"}
     * }
     * ```
     *
     * Uses HTTP code 404 if the resource is not found.
     * Uses HTTP Code 200 if the resource returns data.
     */
    public function destroy($id)
    {
        $data = FAQ::find($id);

        if (empty($data))
        {
            $this->json['data'] = [];
            // Http Code 404: Not Found
            $this->http_code = 404;
        }
        else
        {
            $data->delete();
            $this->json['data'] = $data;
            // Http Code 200: OK
            $this->http_code = 200;
        }

        return response()->json($this->json, $this->http_code);
    }
}
