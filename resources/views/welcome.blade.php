@extends('layouts.base')

@section('content')
    <div class="row" id="root">

        <component :is="current"></component>

        <button @click="switchToRegions">Regions</button>
        <button @click="switchToClubs">Clubs</button>

    </div>
@endsection