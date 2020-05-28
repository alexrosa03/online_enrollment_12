@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
        <h2>Search Subject Name</h2>
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <form action="/" method="">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="type here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-outline-secondary" value="Search">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection