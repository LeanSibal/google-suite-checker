@extends('layouts.app')

@section('content')
<div class="title m-b-md mb-5">
    {{ config('app.name', 'Laravel') }}
    <form method="GET" action="{{ URL::to('/') }}">
        <div class="input-group">
            <input name="q" type="text" class="form-control" placeholder="Enter domain here ( e.g. http://www.example.com or john@appleseed.com )" value="{{ !empty( $url ) ? $url : '' }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
<div class="m-b-md mt-5">
    @if( empty( $domain ) && !empty( $url ) )
        <h1 class="text-danger"><strong>{{ $url }}</strong> is not a valid domain.</h1>
    @elseif( !empty( $domain ) && !empty( $is_google ) )
        <h1 class="text-success">The domain <strong>{{ $domain }}</strong> is using Google Suite.</h1>
    @elseif( !empty( $domain ) )
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
@endsection
