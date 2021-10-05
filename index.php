<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="CSSDesain2.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form action="login.php" method="POST" onSubmit="return validasi()">
                <div>
                    <label>Username:</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" id="password" />
                </div>			
                <div>
                    <input type="submit" value="Login" class="tombol">
                </div>
		    </form>
            <script type="text/javascript">
                function validasi() {
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;		
                    if (username != "" && password!="") {
                        return true;
                    }else{
                        alert('Username dan Password harus di isi !');
                        return false;
                    }
                }
            </script>
        </div>     
    </body>
</html>
