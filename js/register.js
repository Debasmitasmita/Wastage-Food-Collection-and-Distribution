

$(document).ready(function(){
    $("#register").click(function(){
        var registerFormDataid = document.getElementById('registerFormData');
        var registerFormData = new FormData(registerFormDataid);
        console.log("data",registerFormData);

        $.ajax({
            url: 'php/register.php',
            type: 'POST',
            data: registerFormData,
            contentType: false,
            processData: false,
            success: function (data) {
               console.log("data",data);
            }

        });

    });
  });