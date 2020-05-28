@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Management Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{ route('student.index') }}">View Students</a>
                    </div>
                    <div>
                        <a href="{{ route('subject.index') }}">View Subject</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
