@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
        <h1>Offered Subjects</h1>
    </div>
    <table class="table text-center">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Subject</th>
        <th scope="col">Enrollees</th>
        <th scope="col">options</th>
        <th scope="col"><button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#addSubjectModal">
          Add subject
        </button>
          <!-- Modal -->
          <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Add subject</h5>
                </div>
                <div class="modal-body">
                <form class="text-left text-dark" style="font-weight:400;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject Name:</label>
                    <input type="email" class="form-control" id="subjectName" aria-describedby="emailHelp" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Capacity:</label>
                    <input type="password" class="form-control" id="capacity" placeholder="Enter capacity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room:</label>
                    <input type="email" class="form-control" id="room" aria-describedby="emailHelp" placeholder="Enter room">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Schedule:</label>
                    <input type="password" class="form-control" id="schedule" placeholder="Enter Schedule">
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
        <td>English</td>
        <td>35/50</td>
        <td>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewEnrollesModal">
            View
        </button>
        <!-- Modal -->
        <div class="modal fade" id="viewEnrollesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Current Enrollees</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table text-center">
                  <thead class="thead-dark">
                      <tr>
                      <th scope="col">Id Number</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Course</th>
                      <th scope="col">Option</a></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>18132751</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>BSCS</td>
                          <td>
                              <a href="" class="btn btn-outline-danger">Delete</a>
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
        <!-- Modal end -->
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#editSubjectModal">
            Edit
        </button>
        <!-- Modal -->
        <div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" style="width:100%" id="exampleModalLongTitle">Edit subject</h5>
              </div>
              <div class="modal-body">
                <form class="text-left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject Name:</label>
                    <input type="email" class="form-control" id="subjectName" aria-describedby="emailHelp" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Capacity:</label>
                    <input type="password" class="form-control" id="capacity" placeholder="Enter capacity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room:</label>
                    <input type="email" class="form-control" id="room" aria-describedby="emailHelp" placeholder="Enter room">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Schedule:</label>
                    <input type="password" class="form-control" id="schedule" placeholder="Enter schedule">
                  </div>
                  <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Save">
                </form>
              </div>
            </div>
          </div>
          <!-- Modal end -->
        </td>
        </tr>
    </tbody>
    </table>
  </div>  
</div>
@endsection