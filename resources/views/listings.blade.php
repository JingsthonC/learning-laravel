@extends('layout')

@section('content')  <!-- take note that the section derictives must always be the same value as what on the yields directive -->

<h1>{{$headings}}</h1>

@unless (count($listings) == 0 )
    

@foreach ($listings as $listing)
    <h2><a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p>{{$listing['description']}}</p> 
@endforeach

@else
<p>No Listings Found</p>
@endunless

@endsection