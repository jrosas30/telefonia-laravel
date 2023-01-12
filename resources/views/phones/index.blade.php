@extends('layouts.app1')
@section('celulares')
<div class="">
    <h1 class=" py-2 px-2">Reparticiones</h1>
    <table class="px-2">
        <tr>
            <th>Altas Reparticiones</th>
            <th>Reparticiones</th>
            <th>Unidades</th>
            <th>Destacamentos</th>
        </tr>

        @foreach ($altasReparticiones as $altaReparticion)
        <tr>
            <td>{{$altaReparticion->nombre}}</td>
        
        @endforeach
        @foreach ($reparticiones as $reparticion)
        <tr>
            <td>{{$reparticion->nombre}}</td>
        </tr>
        @endforeach

    </table>
    {{--
    <ul>
        @foreach ($altasR as $altasReps)

        <li class="px-2">{{$altasReps->nombre}}</li>

    @endforeach
    </ul> --}}
</div>
@endsection
