
$("#signupForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitSignupForm();
});

$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitContactForm();
});

function submitSignupForm(){
    var email = $("#inputMail").val();
 
    $.ajax({
        type: "POST",
        url: "/php/form.php",
        data: "email=" + email,
        success : function(text){
            if (text == "success"){
                $( "#msgSubmitSuccess" ).removeClass("hidden");
                $( "#signupForm" ).addClass("hidden");
            }
        },
                error : function(){
            formError();
        },
        complete : function(text){
            if (text != "success"){
                formError();
            }
       }
    });
}

function submitContactForm(){
    var email = $("#inputMail").val();
    var phone = $("#inputPhone").val();
    var name = $("#inputName").val();
    var firstName = $("#inputFirstName").val();
    var message = $("#inputMessage").val();

    $.ajax({
        type: "POST",
        url: "/php/form.php",
        data: "email=" + email + "&phone=" + phone + "&name=" + name + "&firstName=" + firstName + "&message=" + message, 
        success : function(text){
            if (text == "success"){
                $( "#msgSubmitSuccess" ).removeClass("hidden");
                $( "#contactForm" ).addClass("hidden");
            }
        },
        error : function(){
            formError();
        },
        complete : function(text){
            if (text != "success"){
                formError();
            }
       }
    });
}

function formError(){
    $( "#msgSubmitError" ).removeClass("hidden");
}