@extends('layouts.mdb')

@section('content')


welcome to product siste.


@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
@endif

@endsection