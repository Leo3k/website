

function createUser() {
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;    

    $.post('http://127.0.0.1:8000/api/student', {email:email, name:name, password:password}, function(response) {
        // Log the response to the console
        console.log("Response: "+response);
    });
}