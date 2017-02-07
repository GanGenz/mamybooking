@extends('layouts.app')

@section('content')

<!-- @include('flash::message') -->

<div class="container">
   @foreach($car as $cars)
        {{$cars->id}}
   @endforeach

</div>
@endsection
