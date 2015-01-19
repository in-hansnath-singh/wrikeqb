<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>Login Wrike Quickbook</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="<?php echo CSS_URL;?>stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='<?php echo CSS_URL;?>css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo JS_URL;?>js/cookies.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/actions.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/charts.js'></script>
    <script type='text/javascript' src='<?php echo JS_URL;?>js/plugins.js'></script>
    
</head>
<body>
    
    <div class="loginBox">        
        <div class="loginHead">
            <!--<img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/>-->
				<div class="login_title">Login Page</div>
				<div class="login_title2">Fair Marketing</div>
        </div>
        <form  class="form-horizontal" action="<?php echo SITE_URL;?>login" method="POST" name="login">            
            <div class="control-group">
                <label for="inputEmail">Email</label>                
                <input type="text" id="inputEmail" name="email"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Password</label>                
                <input type="password" id="inputPassword" name="password"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <!--<label class="checkbox"><input type="checkbox"> Remember me</label>-->                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block" >Sign in</button>
            </div>
        </form>        
        
    </div>    
    
</body>
</html>
