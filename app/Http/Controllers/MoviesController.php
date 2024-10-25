<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index(){

        $data_movies = DB::table('movies')
        -> select('movies.*')
        -> orderBy('created_at', 'desc')->simplePaginate(5);
        return view('admin.movies', compact('data_movies'),['title' => 'Movies']);
    }

    public function addMovies(){
        return view('admin.addmovies', ['title' => 'Add Movies']);
    }

    public function insert(Request $request){
        Movies::create($request->all());
        return redirect()->route('movies')->with('success', 'data berhasil ditambahkan!');
    }

    public function findData($id){
        
        $data = Movies::find($id);
        return view('admin.editmovies', compact('data'));
    }

    public function updateData(Request $request, $id){
        $findData = Movies::find($id);

        if (!$findData) {
            return redirect()->back()->with('error', 'Blog post not found');
        }

        $findData->update(array_merge($request->all(), ['is_edited' => true]));
        return redirect()->route('movies')->with('success', 'data berhasil diedit!');
    }

    public function deleteData($id){
        $findData = Movies::find($id);

        if (!$findData) {
            return redirect()->back()->with('error', 'Blog post not found');
        }

        $findData->delete();
        return redirect()->route('movies')->with('success', 'data berhasil dihapus!');

    }
}
