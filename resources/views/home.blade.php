<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ( $trains as $train )
                  
                
                <div class="col-12 col-md-6 col-lg-4 py-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Company: {{ $train->company}}
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-start">Departure Station: {{ $train->departure_station}}</h5>
                          <p class="card-text text-start">Arrival Station: {{ $train->arrival_station}}</p>
                          <p class="card-text text-start">Departure time: {{ $train->departure_time}}</p>
                          <p class="card-text text-start">Arrival time: {{ $train->arrival_time}}</p>
                          <p class="card-text text-start">Number of carriages: {{ $train->number_of_carriages}}</p>
                          <p class="card-text text-start">Delay: {{ $train->in_time}}</p>
                          <p class="card-text text-start">Deleted: {{ $train->is_delete}}</p>
                          <a href="#" class="btn btn-primary">BUY TICKET</a>
                        </div>
                        <div class="card-footer text-muted">
                          CODE Train: {{ $train->train_code}}
                        </div>
                      </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </main>

</body>

</html>
