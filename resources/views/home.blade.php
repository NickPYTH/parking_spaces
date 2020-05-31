@extends('layouts.app')

@section('title_block')
Home
@endsection

@include('inc.header')

<div class="container">

    @foreach ($data as $info)
        @include('inc.frame', ['free_spaces' => $info, 'image_location' => $image_location])
    @endforeach

</div>