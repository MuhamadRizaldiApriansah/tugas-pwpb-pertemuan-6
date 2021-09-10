<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        *{
            margin : 0;
            padding: 0;
            outline: 0;
            font-family:'Roboto' sans-serif;
        }
        body{
            height: 100vh;
            background-size: cover;
            background-image: url(graybg.jpg);
            background-position: center;
            background-repeat: no-repeat;
        }
        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px,25px;
            width: 300px;

            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(255,255,255,.3);
            border-color: #483D8B;
            border-style: groove;
        }
        .container h1{
            text-align: center;
            color: #5F9EA0;
            margin-bottom: 30px;
            text-transform: capitalize;
            border-bottom: 4px solid #483D8B;
        }
        .container label{
            text-align: right;
            color:#5F9EA0;
        }
        .container form input{
            width: calc(100%-20px);
            padding: 8px,10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid, #2979ff;
            color: #fff;
            font-size: 20px;
        }
        .submit{
            width: 50%;
            padding: 5px 0;
            border: none;
            background-color: #FAD000;
            font-size: 16px;
            color: #FAD000;
            border-radius: 8px;
        }
        .reset{
            width: 50%;
            padding: 5px 0;
            border: none;
            background-color: #2979ff;
            font-size: 16px;
            color: #fafafa;
            border-radius: 8px;
        }
        .btn{
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px,12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 8px;
            color: #ffffff;
            background-color: #5F9EA0;
            border-color: #ffffff;
        }

        </style>
    </head>

    <body>
        <div class="container">
            <h1>Login Inponow</h1>
            <form>
                <label>Username</label><br>
                <input type="text" placeholder="Enter Username"><br>
                <label>Password</label><br>
                <input type="password" placeholder="Enter Password"><br>
                <button class="btn btn-primary btn-inline">Submit</button>
                <button class="btn btn-primary btn-inline">Reset</button>
            </form>
        </div>
    </body>
</html>