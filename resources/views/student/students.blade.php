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
        <th scope="col">
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#addStudentModal">
                Add student
            </button>
        </th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td style="display:none">{{ $student->birthday }}</td>
            <td style="display:none">{{ $student->course }}</td>
            <td>
                <a href="#" class="btn btn-outline-primary view_btn">View</a>
                <a href="#" class="btn btn-outline-success edit_btn">Edit</a>
                <a href="#" class="btn btn-outline-danger delete_btn">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

<div>
<!----------------------------------------------- ADD STUDENT MODAL START ----------------------------------------------->
    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Add student</h5>
                </div>
                <div class="modal-body">
                    <form id="addStudentForm" class="text-left text-dark" style="font-weight:400;">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name:</label>
                            <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Number:</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Birthday:</label>
                            <input type="text" class="form-control" name="birthday" placeholder="Enter birthday(mm/dd/yyyy)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Course:</label>
                            <input type="text" class="form-control" name="course" placeholder="Enter course(e.g bscs)">
                        </div>
                        <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------------- ADD STUDENT MODAL END ----------------------------------------------->
</div>

<div>
<!----------------------------------------------- DELETE STUDENT MODAL START ----------------------------------------------->
    <div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-center" style="width:100%">Are you sure you want to delete this student?</h5>
                </div>
                <div class="modal-body">
                    <form class="text-center" id="deleteStudentForm">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <input type="hidden" id="studentDeleteId" name="studentDeleteId">
                        <button type="submit" class="btn btn-outline-success" style="width:40%;">Yes</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" style="width:40%;">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------------- DELETE STUDENT MODAL END ----------------------------------------------->    
</div>

<div>
<!----------------------------------------------- VIEW STUDENT MODAL START ----------------------------------------------->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" style="width:100%;" id="exampleModalLongTitle">Enrollee Info</h5>
        </div>
        <div class="modal-body">
            <div class="card">
                <ul class="list-group list-group-flush text-center">
                    <li id="showFirstName" class="list-group-item">First Name:</li>
                    <li id="showLastName" class="list-group-item">Last Name:</li>
                    <li id="showId" class="list-group-item">ID:</li>
                    <li id="showBirthday" class="list-group-item">Birthday:</li>
                    <li id="showCourse" class="list-group-item">Course:</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>
<!----------------------------------------------- VIEW STUDENT MODAL END ----------------------------------------------->
</div>

<div>
<!----------------------------------------------- EDIT STUDENT MODAL START ----------------------------------------------->    
    <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Edit student</h5>
                </div>
                <div class="modal-body">
                    <form id="editStudentForm"class="text-dark text-left">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Number:</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="Enter id number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Birthday:</label>
                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday(mm/dd/yyyy)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Course:</label>
                            <input type="text" class="form-control" id="course" name="course" placeholder="Enter course(e.g bscs)">
                        </div>
                        <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Save">
                    </form>
            </div>
        </div>
    </div>
<!----------------------------------------------- DELETE STUDENT MODAL END ----------------------------------------------->
</div>
<script src="{{asset('js/students.js')}}"></script>
@endsection