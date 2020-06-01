@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
        <h2>Search Subject Name</h2>
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <form id="subjectSearchForm">
            {{ csrf_field() }}
            {{ method_field('get') }}
            <div class="input-group input-group-lg">
                <input id="searchBar" type="text" class="form-control" placeholder="type here">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-outline-secondary" value="Search">
                </div>
            </div>
        </form>
    </div>
    <table id="tb" class="table text-center" style="width:100%; margin-top:50px; display:none;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Subject Name</th>
                <th scope="col">Enrolled</th>
                <th scope="col">Room</th>
                <th scope="col">Schedule</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody id="table">
        </tbody>
    </table>
</div>


<div>
<!----------------------------------------------- STUDENT INFORMATION MODAL START ----------------------------------------------->
    <div class="modal fade" id="studentInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark text-center" style="width:100%;" id="exampleModalLongTitle">Search results</h5>
                </div>
                <div class="modal-body">
                    <form id="studentInfoForm" class="text-left text-dark" style="font-weight:400;">
                        {{ csrf_field() }}
                        <input type="hidden" id="enrollSubjectId" name="enrollSubjectId">
                        <div class="form-group">
                            <label for="id">Student Id:</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id number">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Student Birthday</label>
                            <input type="text" class="form-control" name="birthday" placeholder="Enter birthday">
                        </div>
                        <input type="submit" class="btn btn-outline-success" style="width:100%;" value="Enroll">
                    </form>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------------- STUDENT INFORMATION MODAL END ----------------------------------------------->
</div>
<script src="{{asset('js/enroll.js')}}"></script>
@endsection