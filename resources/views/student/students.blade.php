@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
        <h1>Enrolled Students</h1>
    </div>
    <table class="table text-center">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id Number</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">options</th>
        <th scope="col"><a href="" class="btn btn-outline-light">Add Student</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>18132751</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="" class="btn btn-outline-primary">View</a>
            <a href="" class="btn btn-outline-success">Edit</a>
            <a href="" class="btn btn-outline-danger">Delete</a>
        </td>
        </tr>
    </tbody>
    </table>
</div>

@endsection