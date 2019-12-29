<html>
    <head>
        <title>Login</title>
    </head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <body>
            <form action="" method="post">
                    @csrf                     
                       <div id='username' class='outerDiv'>
	                            <label for="number">E-Mail:</label>
	                                <input type="email" name="email" required  />	                                   
                       </div>
                       <div id='password' class='outerDiv'>
	                            <label for="password">Password:</label>
	                            <input type="password" name="password" required />
                       </div>
                       <div id='submit' class='outerDiv'>
                            <input type="submit" value="login" />
                       </div>
            </form>
            <a href="{{route('registrasi')}}">registrasi</a>
        </body>
</html>
