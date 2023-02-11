@extends('layouts.app')


    @section('main-content')


    <div class="container-fluid px-2">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Compagnia</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Numero di carrozze</th>
                    <th>Ritardo</th>
                    <th>Cancellato</th>
                    <th>Codice treno</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $trains as $train )
                    <tr>
                        <td>{{ $train->company}}</td>
                        <td>{{ $train->departure_station}}</td>
                        <td>{{ $train->arrival_station}}</td>
                        <td>{{ $train->departure_time}}</td>
                        <td>{{ $train->arrival_time}}</td>
                        <td>{{ $train->number_of_carriages}}</td>
                        <td>
                            @if ( $train->in_time == 1)
                            Si
                            @elseif ( $train->in_time == 0)
                            No
                            @endif
                        </td>
                        <td>
                            @if ( $train->is_delete == 1)
                            Si
                            @elseif ( $train->is_delete == 0)
                            No
                            @endif
                        </td>
                        <td>{{ $train->train_code}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    @endsection