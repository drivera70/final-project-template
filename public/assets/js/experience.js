
$(document).ready(function () {
    $.ajax({
        url: `http://localhost:8888/experience`,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $('#jobs-container').html('')
            $.each(data, function (key, value) {
                $('#jobs-container').append(`
                    <div class="new-job-container">
                        <span class="job">
                            <span class="bold">Title:</span> ${value['title']}
                            <br>   
                            <span class="bold">Company:</span> ${value['company']}
                            <br>
                            <span class="bold">Years Worked:</span> ${value['years_worked']}
                            <br>
                            <span>----------------------------</span>
                        </span>
                    </div>`)
            });
        } 
    });



});




//<span>
//<a href="posts-update-view/${value['id']}" class="btn btn-primary">edit</a>
//<a href="posts-delete-view/${value['id']}" class="btn btn-danger">delete</a>
//</span>

