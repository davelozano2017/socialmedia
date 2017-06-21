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
                                <form class="form-horizontal form-simple" name="FormRegister" novalidate>
                                  
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
                                    <div ng-messages="FormRegister.cpassword.$error" ng-if="FormRegister.password.$dirty">
                                        <span ng-message="passwordVerify" class="error">Password not match!</span>
                                    </div>
                                    <input id="cpassword" type="password" placeholder="Confirm Password" class="form-control" name="cpassword" ng-model="cpassword" ng-minlength="6" ng-maxlength="30" ng-required="true" required="" password-verify="{{password}}">

                                  </div>

                                <button type="submit" id="register" ng-disabled="!FormRegister.$valid" class="btn btn-success btn-block">
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
   