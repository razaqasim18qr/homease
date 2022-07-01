@extends('layouts.mail')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Your Have Hired {{ $servicetitle }} Service</h1>
                    <p>This service is offered by {{ $email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection