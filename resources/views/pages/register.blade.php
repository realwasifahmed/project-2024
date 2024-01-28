{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <title>SignUp - Sound Group</title>
</head>

<body>
    <div class="LoginContainer">
        <div class="login__box">
            <div class="login__content__container">
                <h3>Sign up to start listening</h3>

                <form action="{{ route('RegisterUser') }}" class="loginForm" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" />
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
                        <label for="UserImage">Add Image</label>
                        <input type="file" id="UserImage" name="UserImage" />
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
                <a href="#">Already Have An Account? Login To Sound Group </a>
            </div>
        </div>
    </div>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <title>SignUp - Sound Group</title>

    <script>
        // Function to perform form validation
        function validateForm() {
            // Get the values from the form
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var userImage = document.getElementById('UserImage').value;

            // Validate name
            if (name.trim() === '') {
                alert('Please enter your name.');
                return false;
            }

            // Validate email
            if (email.trim() === '') {
                alert('Please enter your email.');
                return false;
            }

            // Validate password
            if (password.trim() === '') {
                alert('Please enter your password.');
                return false;
            }

            // Validate user image
            if (userImage.trim() === '') {
                alert('Please select an image.');
                return false;
            }

            // If all validations pass, the form is valid
            return true;
        }
    </script>
</head>

<body>
    <div class="LoginContainer">
        <div class="login__box">
            <div class="login__content__container">
                <h3>Sign up to start listening</h3>

                <!-- Add onsubmit attribute to trigger validation -->
                <form action="{{ route('RegisterUser') }}" class="loginForm" method="POST"
                    enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Name" />
                    </div>
                    @error('name')
                    <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email" />
                        @error('email')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="UserImage">Add Image</label>
                        <input type="file" id="UserImage" name="UserImage" />
                        @error('UserImage')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
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
                <a href="#">Already Have An Account? Login To Sound Group </a>
            </div>
        </div>
    </div>
</body>

</html>
