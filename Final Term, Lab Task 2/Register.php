<html>
<head>
    <title>Registration</title>
</head>
<body>
    <fieldset>
        <legend><b>REGISTRATION</b></legend>

        <form method="post" action="../Controllers/registrationCheck.php" onsubmit="return validate()" >


                    Username<br>
                    <input id="username" name="username" type="text"><br>
                    Email<br>
                    <input id="email" name="email" type="text"><br>
                    Password<br>
                    <input id="password" name="password" type="password"><br>
                    Confirm Password<br>
                    <input id="confirmPassword" name="confirmPassword" type="password"><br>
                    User Type<br><hr>
                            <input type="radio" name="type" value ="universityManagement">Administration
            <hr/>
            <input type="submit" name="submit" value="Sign Up">
        </form>

        <script>
            function validate(){
                
                let username = document.getElementById('username').value;
                if(username != ""){
                    return true;
                }
                else{
                    alert('null username')
                    return false;
                }
                let email = document.getElementById('email').value;
                if(email != ""){
                    return true;
                }
                else{
                    alert('null email')
                    return false;
                }
                let password = document.getElementById('password').value;
                if(password != ""){
                    return true;
                }
                else{
                    alert('null password')
                    return false;
                }
                let confirmPassword = document.getElementById('confirmPassword').value;
                if(confirmPassword != ""){
                    return true;
                }
                else{
                    alert('null confirmPassword')
                    return false;
                }

            }
        </script>

    </fieldset>
</body>
</html>