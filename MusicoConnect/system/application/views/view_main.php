<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo MAINSITE_URL;?>css/main.css" />
<script type="text/javascript" src="<?php echo MAINSITE_URL;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo MAINSITE_URL;?>js/login.js"></script>
</head>
<body>
    <noscript>You must have javascript enabled to get past this point.</noscript>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <div align="center">
        <form id="loginform" name="loginform">
            <div class="logincontainer">
               
                <br class="breaker"/>
                <div class="rows" align="right">
                    Username
                </div>
                <div class="rows">
                    <input type="text" name="username" id="username" class="formtext" />
                </div>
                <br class="breaker" />
                <div class="rows" align="right">
                    Password
                </div>
                <div class="rows">
                    <input type="password" name="password" id="password" class="formtext" />
                </div>
                <br class="breaker" />
                <div align="center" class="trap_error" id="trap_error"></div>
                <br class="breaker" />
                <div align="center">

                    <input class="button" type="submit" name="submit" id="submit" value="Login" />
                    <br />
                </div>
            </div>
        </form>
    </div>
</body>
</html>