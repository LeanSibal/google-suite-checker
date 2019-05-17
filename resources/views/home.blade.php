@extends('layouts.app')

@section('content')
<div class="title m-b-md mb-5">
    {{ config('app.name', 'Laravel') }}
    <form method="GET" action="{{ URL::to('/') }}">
        <div class="input-group">
            <input name="q" type="text" class="form-control" placeholder="Enter domain here ( e.g. http://www.example.com )" value="{{ !empty( $url ) ? $url : '' }}">
            <div class="input-group-append">
                <a class="btn btn-primary" href="#">Search</a>
            </div>
        </div>
    </form>
</div>
@if( !empty( $domain ) )
<div class="m-b-md mt-5">
    @if( !empty( $is_google ) )
        <h1 class="text-success">The domain <strong>{{ $domain }}</strong> is using Google Suite.</h1>
    @else
        <h1 class="text-danger">The domain <strong>{{ $domain }}</strong> is not using Google Suite.</h1>
    @endif

    @if( !empty( $mx_records ) )
    <h4 class="mt-5">MX Records</h4>
    <ul>
        @foreach( $mx_records as $mx_record )
        <li><h6>{!! $mx_record !!}</h6></li>
        @endforeach
    </ul>
    @endif
</div>
@endif
@endsection
