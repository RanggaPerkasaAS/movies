<?php

namespace App\Console;

use App\Models\Movies;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
       $schedule->call(function(){
        $response = Http::get('https://yts.mx/api/v2/list_movies.json');

        if ($response->successful()) {
            $movies = $response->json()['data']['movies'];

            foreach ($movies as $movieData) {
                $movie = Movies::where('imdb_code', $movieData['imdb_code'])->first();

                if ($movie) {
                    if ($movie->is_edited) {
                        continue;
                    }

                    $movie->update([
                        'title' => $movieData['title'],
                        'title_long' => $movieData['title_long'],
                        'url' => $movieData['url'],
                        'slug' => $movieData['slug'],
                        'year' => $movieData['year'],
                        'rating' => $movieData['rating'],
                        'runtime' => $movieData['runtime'],
                        'genres' => implode(',', $movieData['genres']),
                        'summary' => $movieData['summary'],
                        'description' => $movieData['description_full'],
                        'synopsis' => $movieData['synopsis'],
                        'language' => $movieData['language'],
                        'background_image' => $movieData['background_image'],
                        'mpa_rating' => $movieData['mpa_rating'] ? : 0,
                        'date_uploaded' => $movieData['date_uploaded'],
                    ]);
                }else{
                    Movies::create([
                        'id' => $movieData['id'],
                        'title' => $movieData['title'],
                        'title_long' => $movieData['title_long'],
                        'url' => $movieData['url'],
                        'imdb_code' => $movieData['imdb_code'],
                        'slug' => $movieData['slug'],
                        'year' => $movieData['year'],
                        'rating' => $movieData['rating'],
                        'runtime' => $movieData['runtime'],
                        'genres' => implode(',', $movieData['genres']),
                        'summary' => $movieData['summary'],
                        'description' => $movieData['description_full'],
                        'synopsis' => $movieData['synopsis'],
                        'language' => $movieData['language'],
                        'background_image' => $movieData['background_image'],
                        'mpa_rating' => $movieData['mpa_rating'] ? : 0,
                        'date_uploaded' => $movieData['date_uploaded'],
                        'is_edited' => false
                    ]);
                }
            }
        }else {
            Log::error('filed to fetch movies from API!');
        }
       })-> everyFifteenMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
