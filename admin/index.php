<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MDQ Admin</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #081A48;
        }
        .login{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .loginhead{
            font-weight: 800;
            text-transform: uppercase;
            text-align: center;
            color: #45C998;
        }
        /* input:focus{
          background-color: black !important;
        } */
        .login-card{
            width: fit-content;
            background-color: #A4E7FC;
            color: white;
            border-radius: 30px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
        }
        .labels{
            width: 300px;
            border-radius: 5px;
            border: 1px solid #1C46A8;
            background-color: transparent;
            padding: 4px;
        }

        .submitbutton{
            padding: 5px 10px;
            border: none;
            background-color: transparent;
            border-radius: 8px;
            color: white;
        }
        .sub-div{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .card-login-logo{
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="card login-card"></div>
        <div class="card login-card">
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center">
            <div class="p-2 card-login-logo d-flex justify-content-center align-items-center" style="width:fit-content; background-color:#1C46A8; margin-top:-80px">
            <img width="96" height="96" src="https://img.icons8.com/fluency-systems-filled/9600/ffffff/guest-male.png" alt="guest-male"/>
            </div>
            </div>
                <form action="signinbackend.php" method="POST">
                <div class="px-4">
                <div>
                <label class="pt-2" for="" style="color:#1C46A8"><h5>User Name</h5></label><br>
                <input  name="name" class="labels my-2" type="text">
                </div>
                <div>
                <label class="mt-2" for="" style="color:#1C46A8"><h5>Password</h5></label><br>
                <input  name="password" class="labels my-2" type="password">
                </div>
                </div>
                <div class="sub-div">
                <button class="submitbutton mt-3" style="background-color:#1C46A8; font-weight:600; padding:8px 20px" name="submit">Sign In</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>