@extends('layouts.main')

@section('main')

    @loop
        <h1>{{ Loop::title() }}</h1>
        {{ Loop::content() }}

        {{ __('Behoort tot') }} {{ the_taxonomies() }}

        <a href="{{ Loop::link() }}">
            {{ Loop::thumbnail() }}
        </a>

    @endloop

@stop