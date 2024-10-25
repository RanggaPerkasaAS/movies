<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Support\Facades\Log;
use DB;

class DashboardController extends Controller
{
    public function chart(){

        // Get all movies
        $movies = Movies::all();

        // Initialize arrays for genres and movie titles
        $genreCounts = [];
        $genreMovies = [];

        foreach ($movies as $movie) {
            $genres = explode(',', $movie->genres);
            foreach ($genres as $genre) {
                $genre = trim($genre); 
                // Count genres
                if (!isset($genreCounts[$genre])) {
                    $genreCounts[$genre] = 0; 
                    $genreMovies[$genre] = []; 
                }
                $genreCounts[$genre]++; 
                $genreMovies[$genre][] = $movie->title;
            }
        }

        $moviesByDate =  DB::table('movies')
            ->select(DB::raw('count(*) as count, date_uploaded'))
            ->groupBy('date_uploaded')
            ->orderBy('date_uploaded')
            ->get(); // Execute the query and get the results
        
        // Prepare the data for the chart
        $dates = $moviesByDate->pluck('date_uploaded');
        $counts = $moviesByDate->pluck('count');

        return view('admin.dashboard', compact('genreCounts', 'genreMovies', 'dates', 'counts'));
    }

}
