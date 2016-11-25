@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <p>Your age is @age([1995, 7, 3])</p>
                    <p>Your age is {{ Carbon\Carbon::createFromDate(1992, 9, 7)->age }}</p>
                    <p>{{ $married }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
