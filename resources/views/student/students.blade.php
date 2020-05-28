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
        <th scope="col"><button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#addStudentModal">
          Add student
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Add student</h5>
                </div>
                <div class="modal-body">
                <form class="text-left text-dark" style="font-weight:400;">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name:</label>
                    <input type="email" class="form-control" id="subjectName" aria-describedby="emailHelp" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name:</label>
                    <input type="password" class="form-control" id="capacity" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Number:</label>
                    <input type="email" class="form-control" id="room" aria-describedby="emailHelp" placeholder="Enter id number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Birthday:</label>
                    <input type="password" class="form-control" id="schedule" placeholder="Enter birthday(mm/dd/yyyy)">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Course:</label>
                    <input type="password" class="form-control" id="schedule" placeholder="Enter course(e.g bscs)">
                </div>
                <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Add">
                </form>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>18132751</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewStudentModal">
          View
        </button>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#editStudentModal">
          Edit
        </button>
            <a href="" class="btn btn-outline-danger">Delete</a>
        </td>
        </tr>
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" style="width:100%;" id="exampleModalLongTitle">Enrollee Info</h5>
        </div>
        <div class="modal-body">
            <div class="card">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">First name: John</li>
                    <li class="list-group-item">Last name: Doe</li>
                    <li class="list-group-item">Id #: 00000000</li>
                    <li class="list-group-item">Birthday: mm/dd/yyyy</li>
                    <li class="list-group-item">Course: xxxx</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Edit student</h5>
        </div>
        <div class="modal-body">
        <form class="text-dark text-left">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name:</label>
            <input type="email" class="form-control" id="subjectName" aria-describedby="emailHelp" placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name:</label>
            <input type="password" class="form-control" id="capacity" placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ID Number:</label>
            <input type="email" class="form-control" id="room" aria-describedby="emailHelp" placeholder="Enter id number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Birthday:</label>
            <input type="password" class="form-control" id="schedule" placeholder="Enter birthday(mm/dd/yyyy)">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Course:</label>
            <input type="password" class="form-control" id="schedule" placeholder="Enter course(e.g bscs)">
        </div>
        <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Save">
        </form>
        </div>
    </div>
</div>
<!-- Modal end -->
@endsection