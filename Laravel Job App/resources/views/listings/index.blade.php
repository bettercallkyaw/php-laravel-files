@extends('layouts.master')

@section('title','all listings')

@section('content')

@include('partials.hero')

@include('partials.search')

@if (Session::has('successMsg'))
    <div class="alert alert-success">{{ Sessiong::get('successMsg') }}</div>
@endif

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($listings)===0)

@foreach($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach

@else
<p>No listing found</p>
@endunless

</div>
@endsection


