<!DOCTYPE html>
<html>
<head>
    <title>Havana Youth</title>

        <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
    <div class="samup">
        <div class="single-widget-container" style="padding-top: 20px; padding-bottom: 100px;">
            <section class="widget login-widget">
                <header class="text-align-center ">
                    <h4>Signup For A Havana Youth Account</h4>
                </header>
                <div class="body">
                    <form action="<?php echo site_url('signup_validation')?>" method="post" accept-charset="utf-8" class="no-margin"
                          action="index.html" method="get">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" >Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="name" id="email" type="email" class="form-control input-lg input-transparent" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="surname" >Surname</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="lastname" id="email" type="email" class="form-control input-lg input-transparent" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="email" id="email" type="email" class="form-control input-lg input-transparent" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input name="password" id="password" type="password" class="form-control input-lg input-transparent" placeholder="Your Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Confirm Password</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input name="cpassword" id="password" type="password" class="form-control input-lg input-transparent" placeholder="Your Password">
                                </div>
                            </div>
                             <?php echo validation_errors(); ?>
                            
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-lg btn-success">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Sign Up</small>
                            </button>
                            <a class="forgot" href="#">Forgot Username or Password?</a>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="facebook-login">
                        <a href=""><span><i class="fa fa-facebook-square fa-lg"></i> Signup with Facebook</span></a>
                    </div>
                </footer>
            </section>
        </div>
    </div>   <br><br>
<br><br>
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->


</body>
</html>