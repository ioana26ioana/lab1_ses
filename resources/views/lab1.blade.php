<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laborator 1 SES</title>
</head>
<body>
<!-- Your HTML content here -->
<h2>Users</h2>
<div id="users"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            url: "/api/users",
            method: 'GET',
            success: function(response){
                var users = "";
                response.forEach(function(user) {
                    users += "<div>";
                    users += "<p><b>First Name: </b>" + user.first_name + ", <b>Last Name: </b>" + user.last_name + ", <b>Email: </b>" + user.email + "</p>";
                    users += "</div>";
                });
                $('#users').html(users);
            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });
    });
</script>
</body>
</html>
