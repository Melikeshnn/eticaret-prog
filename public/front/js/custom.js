$( document ).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });

    $('#loginForm').submit(function (e){
        e.preventDefault();
        const form = $(this);
        const actionUrl = form.attr('action');
        form.append()
        $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    console.log(window.location.pathname);
                    window.location.replace(window.location.pathname);
                },
                error: function (data){
                    const responseText = JSON.parse(data.responseText);
                    $("#loginFormErrorUL").empty();
                    $("#loginFormErrorUL").append('<li>'+responseText.message+'</li>');
                    $('#loginFormErrorDiv').fadeIn()
                    setTimeout(function(){
                        $('#loginFormErrorDiv').fadeOut()
                    }, 2000);
                }
            }
        );
    });

    $('#registerForm').submit(function (e){
        e.preventDefault();
        const form = $(this);
        const actionUrl = form.attr('action');
        form.append()
        $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    console.log(window.location.pathname);
                    window.location.replace(window.location.pathname);
                },
                error: function (data){
                    const responseText = JSON.parse(data.responseText);
                    console.log(responseText);
                    $("#registerFormErrorUL").empty();

                    if(responseText?.errors ){
                        if(responseText?.errors?.email){
                            if(responseText?.errors?.email.length > 1){
                                for (let i = 0; i < responseText?.errors?.email.length; i++){
                                    $("#registerFormErrorUL").append('<li>'+responseText?.errors?.email[i]+'</li>');
                                }
                            }
                            else  $("#registerFormErrorUL").append('<li>'+responseText?.errors?.email[0]+'</li>');
                        }
                        if (responseText?.errors?.password){
                            if (responseText?.errors?.password.length > 1){
                                for (let i = 0; i < responseText?.errors?.password.length; i++){
                                    $("#registerFormErrorUL").append('<li>'+responseText?.errors?.password[i]+'</li>');
                                }
                            }
                            else $("#registerFormErrorUL").append('<li>'+responseText?.errors?.password[0]+'</li>');
                        }
                    }
                    else $("#registerFormErrorUL").append('<li>'+responseText.message+'</li>');


                    $('#registerFormErrorDiv').fadeIn()
                }
            }
        );
    });
});
