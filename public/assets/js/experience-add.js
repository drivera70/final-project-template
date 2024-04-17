$(document).ready(function () {

    $('#form-id').on('submit', function (e) {
        e.preventDefault();
        const title = $('#title').val();
        const company = $('#company').val();
        const years_worked = $('#years').val();
        const description = $('#description').val();

        const data = {
            title,
            company,
            years_worked,
            description,
        }
        $.ajax({
            url: `http://localhost:8888/experience`,
            type: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                console.log(data)
                window.location.replace("/");
            },
            //error: function (data){
                //console.log(data.responseJSON)
                //$('#title-error').html('')
                //$('#description-error').html('')
                //$('#title').removeClass('error-border')
                //$('#description').removeClass('error-border')
                //if (data.responseJSON?.titleRequired) {
                    //$('#title').addClass('error-border')
                    //$('#title-error').append(` <span class='error-text'>${data.responseJSON?.titleRequired}</span>`)
                //}
                //if (data.responseJSON?.descriptionShort) {
                    //$('#title').addClass('error-border')
                    //$('#title-error').append(` <span class='error-text'>${data.responseJSON?.titleShort}</span>`)
                //}
                //if (data.responseJSON?.descriptionRequired) {
                    //$('#description').addClass('error-border')
                    //$('#description-error').append(` <span class='error-text'>${data.responseJSON?.descriptionRequired}</span>`)
                //}
                //if (data.responseJSON?.descriptionShort) {
                    //$('#description').addClass('error-border')
                    //$('#description-error').append(` <span class='error-text'>${data.responseJSON?.descriptionShort}</span>`)
                //}
            //}
        });
    })

})
