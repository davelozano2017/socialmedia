<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Welcome to fakebookPH</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/pages/login-register.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/amaran.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .error{
            color: #e74c3c;
        }
        .validate.ng-touched.ng-invalid {
           border-bottom: 3px solid #E3000E ;
           margin-bottom: 5px ;
        }
        
    </style>
  </head>

<body ng-app="validationApp" ng-controller="mainController" data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">


    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-1 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"><img class="img-responsive" style="width:100%" src="<?php echo base_url()?>assets/app-assets/images/logo/logo.png" alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Socializer</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" name="FormLogin" novalidate>

                                  <div class="form-group">
                                    <div ng-messages="FormLogin.uname.$error" ng-if="FormLogin.uname.$dirty">
                                      <span ng-message="required" class="error">This field is required</span>
                                    </div>
                                    <input type="text" id="uname" name="uname" type="text" placeholder="Username" ng-model="uname" class="form-control" required>
                                  </div>

                                  <div class="form-group">
                                    <div ng-messages="FormLogin.pwd.$error" ng-if="FormLogin.pwd.$dirty">
                                      <span ng-message="required"  class="error">This field is required</span>
                                    </div>
                                    <input id="pwd" name="pwd" type="password" placeholder="Password" ng-model="pwd" class="form-control" required>
                                  </div>

                                    <fieldset class="form-group row">
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                                <input type="checkbox" id="remember-me" class="chk-remember">
                                                <label for="remember-me"> Remember Me</label>
                                        </div>
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="<?= site_url('recover')?>" class="card-link">Forgot Password?</a></div>
                                    </fieldset>
                                    <button type="submit" ng-disabled="!FormLogin.$valid" class="btn btn-success btn-block">
                                      <i class="icon-unlock2"></i> LOGIN</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="">
                                <p class="float-sm-right text-xs-center m-0">New to Socializer? <a href="<?= site_url('register')?>" class="card-link">Create Account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
   

    <!-- ////////////////////////////////////////////////////////////////////////////-->

   

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url()?>assets/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.amaran.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/angular/angular-main.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js" type="text/javascript" ></script>
  </body>
</html>


<script type="text/javascript">

  $(document).ready(function(){
    $('#register').click(function(e){
        e.preventDefault();
        $.amaran({
            'theme'     :'awesome ok',
            'content'   :{
                title:'Congratulations!',
                message:'Your account has been created!',
                info:'Please go to your email and activate your account.',
                icon:'icon-user-check'
            },
            'position'  :'bottom right',
                'inEffect'  :'slideRight',
            'outEffect' :'slideBottom',
            'afterEnd'  :function() {
                // location.href = 'home';
            }
        });
    })

  });


(function() {
  "use strict";
  angular
    .module('validationApp', ['ngMessages'])
    .controller('mainController', mainController)
    .directive('passwordVerify', passwordVerify);

  function mainController($scope) {
    // Some code
  }

  function passwordVerify() {
    return {
      restrict: 'A', // only activate on element attribute
      require: '?ngModel', // get a hold of NgModelController
      link: function(scope, elem, attrs, ngModel) {
        if (!ngModel) return; // do nothing if no ng-model

        // watch own value and re-validate on change
        scope.$watch(attrs.ngModel, function() {
          validate();
        });

        // observe the other value and re-validate on change
        attrs.$observe('passwordVerify', function(val) {
          validate();
        });

        var validate = function() {
          // values
          var val1 = ngModel.$viewValue;
          var val2 = attrs.passwordVerify;

          // set validity
          ngModel.$setValidity('passwordVerify', val1 === val2);
        };
      }
    }
  }
})();
           
</script>
</body>
</html>