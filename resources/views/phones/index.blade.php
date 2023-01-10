@extends('layouts.app1')
@section('celulares')
<div class="">
    <h1 class=" py-2 px-2">Celulares</h1>
    <ul>
        @foreach ($altasR as $altasReps)

        <li class="px-2">{{$altasReps->nombre}}</li>

        @endforeach
    </ul>
</div>
@endsection
