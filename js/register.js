

$(document).ready(function(){
    $("#register").click(function(){
        var registerFormDataid = document.getElementById('registerFormData');
        var registerFormData = new FormData(registerFormDataid);
        $.ajax({
            url: 'php/register.php',
            type: 'POST',
            data: registerFormData,
            contentType: false,
            processData: false,
            success: function (data) {
                var respose_data =JSON.parse(data) //covert json to object
                console.log("respose_data",respose_data);
                if (respose_data.icon == 'success') {
                    swal(respose_data);
                } else {
                    swal(respose_data);
                }

            }

        });

    });
  });