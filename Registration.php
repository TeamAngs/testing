<html>
<head>
    <title> Welcome To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
    <div id="frm">
        <form action = "registration_code.php" method = "post">
            <p>
                <label>Username</label>
                <input type = "text" id = "username" name = "username" required="" />
            </p>
   
            <p>
            <label>Password</label>
            <input type = "text" id = "pwd" name = "password" required=""/>
            </p>
    
            <p>
            <label>Year/Section</label>
            <input type = "text" id = "YS" name = "YS" required=""/>
            </p>
    
            <p>
            <label>School ID</label>
            <input type = "text" id = "id" name = "id" required=""/>
            </p>
    
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
   </div>
</body>
</html>
    