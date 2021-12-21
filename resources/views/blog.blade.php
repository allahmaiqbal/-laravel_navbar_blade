@extends('layout.app')

@section('title', "Blog")

@section('content')
    <div>
        <h1>I am bloge page. </h1>
        <h2>Data: {{ $data }}</h2>

        @include('components.alert', ['name' => 'Iqubal'])
    </div>
@endsection