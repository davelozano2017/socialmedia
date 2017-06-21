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
   