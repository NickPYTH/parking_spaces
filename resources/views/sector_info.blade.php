@extends('layouts.app')

@section('title_block')
Sector Information
@endsection

@include('inc.header')

<div class="container">

    @foreach ($data as $info)
        @include('inc.frame', ['data' => $info])
    @endforeach

</div>