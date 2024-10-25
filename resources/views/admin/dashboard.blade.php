@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Genre Distribution</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="genreChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Movie Uploads Over Time</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="columnChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('genreChart').getContext('2d');

            const data = {
                labels: {!! json_encode(array_keys($genreCounts)) !!},
                datasets: [{
                    label: 'Movie Count by Genre',
                    data: {!! json_encode(array_values($genreCounts)) !!},
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                    ]
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    const genre = tooltipItem.label;
                                    const movieTitles = {!! json_encode($genreMovies) !!}[genre] || [];
                                    return [
                                        genre + ': ' + tooltipItem.raw,
                                        'Movies: ' + movieTitles.join(', ')
                                    ];
                                }
                            }
                        }
                    }
                }
            };

            new Chart(ctx, config);

            // Bar chart
            const ctxColumn = document.getElementById('columnChart').getContext('2d');
            const columnChart = new Chart(ctxColumn, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($dates) !!}, // Ensure the dates are correctly passed
                    datasets: [{
                        label: 'Number of Movies',
                        data: {!! json_encode($counts) !!}, // Ensure the counts are correctly passed
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Number of Movies'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Upload Date'
                            }
                        }
                    },
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
