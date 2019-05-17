@extends('layouts.app')

@section('content')
<div class="title m-b-md mb-5">
    {{ config('app.name', 'Laravel') }}
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter domain here ( e.g. http://www.example.com )">
        <div class="input-group-append">
            <a class="btn btn-primary" href="#">Search</a>
        </div>
    </div>
</div>
<div class="m-b-md mt-5">
    <h1 class="text-success">The domain <strong>fileinvite.com</strong> is using Google Suite.</h1>
    <h4 class="mt-5">MX Records</h4>
    <ul>
        <li><h6>aspmx2.<strong>googlemail</strong>.com</h6></li>
        <li><h6>aspmx3.<strong>googlemail</strong>.com</h6></li>
        <li><h6>aspmx4.<strong>googlemail</strong>.com</h6></li>
        <li><h6>aspmx5.<strong>googlemail</strong>.com</h6></li>
        <li><h6>aspmx.l.<strong>google</strong>.com</h6></li>
        <li><h6>alt1.aspmx.l.<strong>google</strong>.com</h6></li>
        <li><h6>alt2.aspmx.l.<strong>google</strong>.com</h6></li>
    </ul>
</div>
@endsection
