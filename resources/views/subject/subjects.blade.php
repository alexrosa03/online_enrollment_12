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
        <th scope="col"><a href="" class="btn btn-outline-light">Add Subject</a></th>
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
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#editSubjectModal">
            Edit
        </button>
        </td>
        </tr>
    </tbody>
    </table>
</div>
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
<!-- Modal -->
<div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection