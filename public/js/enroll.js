$(document).ready(function () {
    $('#subjectSearchForm').on('submit', function (e) {
        e.preventDefault();
        search = document.getElementById('searchBar').value;
        $.ajax({
            type: "GET",
            url: "/enroll/"+search,
            success: function (response) {
                var showtable = document.getElementById('tb');
                var table = document.getElementById('table');
                var subjects = '';

                for(var i = 0; i < response.length; i++){
                    if(response[i]['enrollees'] < response[i]['capacity']){
                        subjects += '<tr> <td style="display:none;">'+ response[i]['id'] + '</td> <td>'+ response[i]['name'] + '</td> <td>'+ response[i]['enrollees'] + '/' + response[i]['capacity'] +'</td> <td>'+ response[i]['room'] +'</td> <td>' + response[i]['schedule'] + '</td> <td> <a href="#" class="enroll_btn btn btn-outline-success">Enroll</a> </td></tr>'
                    }else{
                        subjects += '<tr> <td>'+ response[i]['name'] + '</td> <td>'+ response[i]['enrollees'] + '/' + response[i]['capacity'] +'</td> <td>'+ response[i]['room'] +'</td> <td>' + response[i]['schedule'] + '</td> </tr>'
                    }
                        
                }

                table.innerHTML = subjects;
                showtable.style.display = "table";
                
                $('.enroll_btn').on('click', function(){
                    $('#studentInfoModal').modal('show');
                    
                    $tr = $(this).closest('tr');
            
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
            
                    $('#enrollSubjectId').val(data[0]);
                });

                $('#studentInfoForm').on('submit', function(e){
                    e.preventDefault();
            
                    var subjectId = $('#enrollSubjectId').val();
                    $.ajax({
                        type: "POST",
                        url: "/subjects/edit/"+subjectId,
                        data: $('#studentInfoForm').serialize(),
                        success: function (response) {
                            console.log(response);
                            $('#studentInfoModal').modal('hide');
                            alert("You have been Enrolled");
                            //location.reload();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                  });

            },
            error: function(error){
                console.log(error)
            }
        }); 
    });
});