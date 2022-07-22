$(document).ready(function(){



    $("#login").click(function(){
        var loginFormDataid = document.getElementById('loginFormData');
        console.log("loginFormData",loginFormDataid);
        var loginFormData = new FormData(loginFormDataid);
        $.ajax({
            url: 'php/login.php',
            type: 'POST',
            data: loginFormData,
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

    $("#formCheckBox").click(function(){
        var checkBoxValue=document.getElementById("formCheckBox").checked;
        console.log("checkBoxValue",checkBoxValue);
        var loginBotton =document.getElementById("login")
        if(checkBoxValue){
            loginBotton.disabled=false;
        }else{
            loginBotton.disabled=true;
        }
    });









  });