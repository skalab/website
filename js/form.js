
$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    var email = $("#inputEmail").val();
 
    $.ajax({
        type: "POST",
        url: "php/form.php",
        data: "email=" + email,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}

function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
    $( "#contactForm" ).addClass( "hidden" );
}