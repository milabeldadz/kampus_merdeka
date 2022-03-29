<?php
//buat fungsi
function cekLogin($username, $password){
    if($username == 'admin' && $password = 'mimin')
    header ('Location: home/home.php');
    else 
    echo "<script>alert('Username atau Password Salah !!') </script>";
    }
    if(isset($_POST['login'])) cekLogin($_POST['username'],$_POST['password']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>From Login</title>
    </head>
    <body>
        <div id="container">
            <form action="" method="POST">
                <table align="center" cellpadding="10" cellspacing="10" width="20%">
                    <thead>
                        <tr>
                            <th colspan="2">Form Login</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="username" placeholder="username" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="password" placeholder="password" required/>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <input type="submit" name="login" value="Login" required/>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </body>
</html>

<style>
    body{
        background-color: #90e0ef;
        font-size: 12pt;
        color: #0C6170;
        text-align: center;
        }
    }
    #container {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
        border-radius: 3px;
    }
    input[type="text"],input[type="password"]{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        padding: 8px;
        border:0;
    }
    #container td, #container th {
        padding: 10px;
    }
    #container th {
        text-align: center;
        color: #264653;
    }
    </style>