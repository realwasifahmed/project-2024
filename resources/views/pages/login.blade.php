{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <title>Login - Sound Group</title>
</head>

<body>
    <div class="LoginContainer">
        <div class="login__box">
            <div class="login__content__container">
                <h3>Log in to Sound Group</h3>
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
                <form action="{{ route('loginUser') }}" class="loginForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email or Username</label>
                        <input type="text" id="email" name="email" placeholder="Email or Username" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                    <a href="/forgot">Forgot Your Password?</a>
                </form>
                <hr />
                <a href="{{ route('RegisterPage') }}">Don't have an account? Sign up for Sound Group </a>
            </div>
        </div>
    </div>
</body> --}}


{{-- <script>
    // Function to perform form validation
    function validateForm() {
        // Get the values from the form
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Validate email
        if (email.trim() === '') {
            alert('Please enter your email or username.');
            return false;
        }

        // Validate password
        if (password.trim() === '') {
            alert('Please enter your password.');
            return false;
        }

        // If all validations pass, the form is valid
        return true;
    }
</script> --}}


{{--
<script>
    // Function to perform form validation
    function validateForm() {
        // Get the values from the form
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Validate email
        if (email.trim() === '') {
            alert('Please enter your email or username.');
            return false;
        }

        // Validate password
        if (password.trim() === '') {
            alert('Please enter your password.');
            return false;
        }

        // If all validations pass, the form is valid
        return true;
    }
</script>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <title>Login - Sound Group</title>

    <script>
        // Function to perform form validation
        function validateForm() {
            // Get the values from the form
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Validate email
            if (email.trim() === '') {
                alert('Please enter your email or username.');
                return false;
            }

            // Validate password
            if (password.trim() === '') {
                alert('Please enter your password.');
                return false;
            }

            // If all validations pass, the form is valid
            return true;



            // Assume a function checkCredentials(email, password) that checks credentials on the server.
            // Replace this with actual server-side validation.
            if (!checkCredentials(email, password)) {
                alert('Incorrect email or password. Please try again.');
                return false;
            }

            return true;

            // Dummy function, replace this with actual server-side validation logic.
            function checkCredentials(email, password) {
                // Replace this with actual server-side validation logic.
                // For demonstration purposes, always return true.
                return true;

            }

        }
    </script>
</head>

<body>
    <div class="LoginContainer">
        <div class="login__box">
            <div class="login__content__container">
                <h3>Log in to Sound Group</h3>
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
                <!-- Add onsubmit attribute to trigger validation -->
                <form action="{{ route('loginUser') }}" class="loginForm" method="POST"
                    onsubmit="return validateForm()">
                    @csrf
                    @if (session('error'))
                        <span style="color: red;">{{ session('error') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="email">Email or Username</label>
                        <input type="email" id="email" name="email" placeholder="Email or Username" />
                        @error('email')
                            <span
                                style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'>
                                {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <!-- Corrected input type to "password" -->
                        <input type="password" id="password" name="password" placeholder="Password" />
                        @error('password')
                            <span
                                style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'>
                                {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                    <a href="/forgot">Forgot Your Password?</a>
                </form>
                <hr />
                <a href="{{ route('RegisterPage') }}">Don't have an account? Sign up for Sound Group </a>
            </div>
        </div>
    </div>
</body>

</html>
