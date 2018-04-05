@extends('layouts.master')

@section ('title');
        {{$car->title}} 
@endsection

@section ('content')
<div class="col-sm-8 blog-main">

          <div class="blog-post">
    
       <h2>Information about car :</h2>
       <p >Name: {{$car->title}}</p>
        <p>Producer: {{$car->producer}}</p>
        <p>Number of doors: {{$car->number_of_doors}}</p>
</div>
</div>

 @endsection