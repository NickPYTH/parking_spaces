@extends('layouts.app')

@section('title_block')
Home
@endsection

@include('inc.header')

<div class="container">

<div class="card m-5 row">
  <div class="col-12 mt-3 mb-3">
    <p class="card-text">
    К сожалению вашего сектора ещё нет в нашем сервисе. Вы можете связаться с нами и добавить его.
    </p>
    <div class="row">
        <div class="col-6 offset-3"><p class="form-control text-center">nicksrnk@gmail.com</p></div>
    </div>
  </div>
</div>
    
</div>
@include('inc.footer')