@extends('layouts.app')

@section('title_block')
Home
@endsection

@include('inc.header')

<div class="container">

    @foreach ($data as $info)
        @include('inc.frame', ['data' => $info])
    @endforeach

    
</div>
@include('inc.footer')