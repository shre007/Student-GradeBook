<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset your password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 50px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }

        input {
            text-align: center;
            border-radius: 10px;
        }

        label {
            font-weight: normal;
        }
    </style>
</head>

<body style="background-color: lightseagreen">
    <div class="login-form" style="margin-top:200px;">
        <form action="forgotpassword.php" method="post" id="forgotpassword">

            <h3 class="text-center">Reset Password</h3>
            <p>An email will be sent to you with instructions on how to reset your password.</p>
            <div class="form-group text-center">
                <label for="">UserType:&nbsp&nbsp</label>
                <select name="userType" id="">
                    <option value="student">Student</option>
                    <option value="professor">Professor</option>
                </select>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Registered Email" required="required" name="email"
                    id="email">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Send an Email</button>
            </div>
        </form>
    </div>
    <div class="text-center">
        <h3 id="msg" style="color:#337ab7;"></h3>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="forgotpassword.js"></script>
</body>

</html>