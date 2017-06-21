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
                                <div class="p-1"><img style="width:100%" src="<?php echo base_url()?>assets/app-assets/images/logo/logo.png" alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account with Socializer</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form action="Register/registerUser" method="post" class="form-horizontal form-simple" name="FormRegister" id="register" novalidate>
                                  
                                  <div class="form-group">
                                    <div ng-messages="FormRegister.name.$error" ng-if="FormRegister.name.$dirty">
                                        <span ng-message="required" class="error">Name is required</span>
                                        <span ng-message="pattern" class="error">Name is incomplete</span>
                                    </div>
                                    <input id="name" type="text" class="form-control" placeholder="Full Name" name="name" id="name" ng-model="name" ng-pattern="/^(.*?[a-zA-Z]){2,}$/" required> 
                                  </div>

                                  <div class="form-group">
                                    <span ng-show="FormRegister.email.$invalid && !FormRegister.email.$pristine" class="error">Enter a valid email.</span>
                                    <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" ng-model="user.email" required>
                                  </div>

                                  <div class="form-group">
                                    <div ng-messages="FormRegister.gender.$error" ng-if="FormRegister.gender.$dirty">
                                      <span ng-message="required" class="error">Gender is required</span>
                                    </div>
                                    <select id="gender" name="gender" ng-model="gender" class="form-control" required>
                                      <option value="" selected>Select a gender</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <div ng-messages="FormRegister.username.$error" ng-if="FormRegister.username.$dirty">
                                      <span ng-message="minlength" class="error">Username is too short</span>
                                      <span ng-message="maxlength" class="error">Username is too long</span>
                                      <span ng-message="required" class="error">Username is required</span>
                                    </div>
                                    <input id="username" type="text" placeholder="Username" class="form-control" name="username" ng-model="username" ng-minlength="6" ng-required="true" ng-maxlength="50" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div ng-messages="FormRegister.password.$error" ng-if="FormRegister.password.$dirty">
                                      <span ng-message="minlength" class="error">Password is too short</span>
                                      <span ng-message="maxlength" class="error">Password is too long</span>
                                      <span ng-message="required"  class="error">Password is Required</span>
                                    </div>
                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" ng-model="password" ng-minlength="6" ng-maxlength="30" required ng-required="true" password-verify="{{cpassword}}">
                                  </div>

                                  <div class="form-group">
                                    <div ng-messages="FormRegister.cpassword.$error" ng-if="FormRegister.cpassword.$dirty">
                                        <span ng-message="passwordVerify" class="error">Password not match!</span>
                                    </div>
                                    <input id="cpassword" type="password" placeholder="Confirm Password" class="form-control" name="cpassword" ng-model="cpassword" ng-minlength="6" ng-maxlength="30" ng-required="true" required="" password-verify="{{password}}">

                                  </div>
                                <!-- ng-disabled="!FormRegister.$valid"  -->
                                <button type="submit" id="register" class="btn btn-success btn-block">
                                    <i class="icon-android-person-add"></i> REGISTER
                                </button>

                                </form>
                            </div>
                        </div>
                        <p class="text-xs-center">Already have an account ? <a href="<?= site_url('login')?>" class="card-link">Login</a></p>
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

  // $(document).ready(function(){
  //   $('#register').click(function(e){
  //       e.preventDefault();
  //       $.amaran({
  //           'theme'     :'awesome ok',
  //           'content'   :{
  //               title:'Congratulations!',
  //               message:'Your account has been created!',
  //               info:'Please go to your email and activate your account.',
  //               icon:'icon-user-check'
  //           },
  //           'position'  :'bottom right',
  //               'inEffect'  :'slideRight',
  //           'outEffect' :'slideBottom',
  //           'afterEnd'  :function() {
  //               // location.href = 'home';
  //           }
  //       });
  //   })

  // });


  $("#register").submit(function(event){
        event.preventDefault();
        var form = $(this);
        $.ajax({
          url:  form.attr('action'),
          type: 'post',
          data: form.serialize(),
          dataType: 'json',
          processData: false,
          success: function(response)
          {
             if(response.success == true)
             {
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
                $('#register')[0].reset();
                $('.text-danger').remove();
                $('.form-group').removeClass('has-error').removeClass('has-success');
             }
             else
             {
                $.each(response.messages, function(key,value){
                  var element = $('#' + key);
                  element.closest('div.form-group')
                  .find('.text-danger').remove();
                  element.after(value);
                });
             }
          }
        });
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