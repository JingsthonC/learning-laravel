@extends('layout')

@section('content')  <!-- take note that the section derictives must always be the same value as what on the yields directive -->

<h2>
    {{$listing['title']}}
</h2>
<p>
    {{$listing['description']}}
</p> 

@endsection