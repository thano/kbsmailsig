<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/forms-min.css">
        <link rel="stylesheet" href="css/buttons-min.css">
        <link href='http://fonts.googleapis.com/css?family=Voces' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>
    <body id="main-body">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container card hoverable">
            <div class="row valign-wrapper sig-header">
                <div class="col s6 valign top-logo-img">
                    <img src="http://signatures.kineticbusinesssolutions.com/icos/kbs-logo.png" style="height:70px; width: 130px;">
                </div>
                <p class="title col s6 valign">KBS Email Signature</p>
            </div>
            <form class="form" action="signature.php">
            <div class="card-content">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="name" id="name" onblur="firstFunction()">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input type="text" name="position" id="position" onblur="posFunction()">
                        <label for="position">Position</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="email">
                        <label for="email">Email</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i> 
                        <input type="text" name="work" id="work" onblur="workFunction()">
                        <label for="work">Phone 1</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">stay_current_portrait</i>
                        <input type="text" name="cell" id="cell" onblur="cellFunction()">
                        <label for="cell">Phone 2</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">business</i>
                        <input type="text" name="company" id="company" onblur="cellFunction()">
                        <label for="company">Company</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">video_call</i>
                        <input type="text" name="video_call" id="video_call" onblur="httpFunction()">
                        <label for="video_call">Video Call Link</label>                    
                    </div>
                    <!--<div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input type="text" name="meeting" id="meeting" onblur="httpFunction()">
                        <label for="meeting">Book a Meeting</label>                    
                    </div> -->
                    <div class="input-field">
                        <i class="material-icons prefix">language</i>
                        <input type="url" name="website" id="website" onblur="httpFunction()">
                        <label for="website">Website</label>                    
                    </div>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Your Picture</span>
                            <input type="file" accept="image/*" data-max_size="3000000" method="post" enctype="multipart/form-data">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="imageUpload" id="imageUpload" placeholder="Upload your picture" >
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn">Generate</button>
                </div>
            </form>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
