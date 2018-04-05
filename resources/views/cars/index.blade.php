@extends('layouts.master')

@section ('title');
 <!-- menjam -->
 Cars :
@endsection



@section ('content')
     
<div class="col-sm-8 blog-main">
    <ul>@foreach ($cars as $car)
   <li><a href="{{route('single-car',['id'=>$car->id])}}">{{$car->title}}</a>
   @endforeach
   </li>
   

    </ul>


   </div>
   @endsection
