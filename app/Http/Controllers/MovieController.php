<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Db::table('movies')->get();
        return response()->json($movies);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::table('movies')->insert([$data]);
        return response()->json('Movie added successfully');
    }

    public function show($id)
    {
        $movie = Db::table('movies')
            ->where('id', $id)
            ->first();
        return response()->json($movie);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Db::table('movies')
            ->where('id', $id)
            ->update($data);
        return response()->json('Movie updated successfully');
    }

    public function destroy($id)
    {
        Db::table('movies')
            ->where('id', $id)
            ->delete();
        return response()->json('Movie deleted successfully');
    }
}
