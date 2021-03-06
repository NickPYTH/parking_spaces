@extends('layouts.app')

@section('title_block')
Home
@endsection

@include('inc.header')

<div class="container">

<div class="card m-5 row">
  <div class="col-12 mt-3">
    <p class="card-text mb-3">
    Распознавание машин на кадре видео является классической задачей распознавания объектов. Существует множество подходов на основе машинного обучения, которые могли бы использоваться для распознавания.
    нам нужно самое простое решение, которое будет работать как надо и потребует наименьшее количество обучающих данных. Не обязательно, чтобы это был самый новый и быстрый алгоритм. <p class="card-text">Однако конкретно в нашем случае Mask R-CNN — разумный выбор, несмотря на то, что он довольно новый и быстрый.
    Архитектура Mask R-CNN разработана таким образом, что она распознаёт объекты на всём изображении, эффективно тратя ресурсы, и при этом не использует подход скользящего окна. Другими словами, она работает довольно быстро. С современным GPU мы сможем распознавать объекты на видео в высоком разрешении на скорости в несколько кадров в секунду. Для нашего проекта этого было достаточно.</p>
 
    </p>
  </div>
</div>

    
</div>
@include('inc.footer')