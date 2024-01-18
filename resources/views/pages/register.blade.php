<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <title>SignUp - Sound Group</title>
</head>

<body>
    <div class="LoginContainer">
        <div class="login__box">
            <div class="login__content__container">
                <h3>Sign up to start listening</h3>

                <form action="#" class="loginForm" method="POST">
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" id="email" name="email" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>

                <div class="social__logins">
                    <div class="social_login">
                        <img src="./img/Google.png" alt="" />
                        <h3>Sign In With Google</h3>
                    </div>
                    <div class="social_login">
                        <img src="./img/apple.png" style="filter: invert(100%)" alt="" />
                        <h3>Sign In With Apple</h3>
                    </div>
                </div>
                <hr />
                <a href="{{route('LoginPage')}}">Already Have An Account? Login To Sound Group </a>
            </div>
        </div>
    </div>
</body>

</html>
