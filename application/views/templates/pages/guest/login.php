  <div class="section"></div><div class="section"></div><div class="section"></div>
    <div class="container" style="width:22em">
      
      <div class="col s12 m6">
        <div class="card yellow lighten-5 z-depth-0">
          <div class="card-content">
            <div class="row">
            <!-- Start validation form of angular js -->
            <div ng-app="validationApp" ng-controller="mainController">
            <form method="POST">
              <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="Username">Username</label>
              </div>
              
              <div class="input-field col s12">
                <input id="Password" type="password" class="validate">
                <label for="Password">Password</label>
              </div>

            </div>

              <p>
                <input type="checkbox" id="remember_me" />
                <label for="remember_me">Remember Me</label>
              </p>

            <div class="row">
              <div class="input-field col s12">
                <a class="waves-effect waves-light btn col s12 blue z-depth-0">Login</a>
              </div>
            </div>
          </form>
          </div>
          <!-- End form validation angular js -->
          </div>
        </div>
        <center><a href="#" data-target="modal1" class="white-text">Create An Account</a></center>
      </div>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <!-- Start validation form of angular js -->
       <div ng-app="validationApp" ng-controller="mainController">
        <form method="POST" name="userForm" ng-submit="submitForm()" novalidate>
          <div class="input-field col s12">
            <input id="name" type="text" class="validate " name="name" id="name" ng-model="name" ng-pattern="/^(.*?[a-zA-Z]){2,}$/"> 
            <label for="name">Name</label>
              <div ng-messages="userForm.name.$error" ng-if="userForm.name.$dirty">
                <span ng-message="pattern" class="error">Name is incomplete</span>
              </div>
          </div>

          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email" ng-model="user.email">
            <label for="email">Email</label>
            <span ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="error">Enter a valid email.</span>
          </div>

          <div class="input-field col s12">
            <input id="username" type="text" class="validate" name="username" ng-model="username" ng-minlength="6" ng-required="true" ng-maxlength="50" required>
            <label for="username">Username</label>
            <div ng-messages="userForm.username.$error" ng-if="userForm.username.$dirty">
              <span ng-message="minlength" class="error">Username is too short</span>
              <span ng-message="maxlength" class="error">Username is too long</span>
              <span ng-message="required" class="error">Username is required</span>
            </div>
          </div>
          
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password" ng-model="password" ng-minlength="6" ng-maxlength="30" required ng-required="true">
            <label for="password">Password</label>
            <div ng-messages="userForm.password.$error" ng-if="userForm.password.$dirty">
              <span ng-message="minlength" class="error">Password is too short</span>
              <span ng-message="maxlength" class="error">Password is too long</span>
              <span ng-message="required"  class="error">Password is Required</span>
            </div>
          </div>

          <div class="input-field col s12">
            <input id="confirmpassword" type="password" class="validate" name="cpassword" ng-model="cpassword" ng-required="true">
            <label for="confirmpassword">Confirm Password</label>
            <div ng-messages="userForm.cpassword.$error">
                <span ng-show="cpassword !== password" class="error">Password not match!</span>
            </div>
          </div>
        </form>
       </div>
        <!-- End form validation angular js -->
      </div>
    </div>
    <div class="modal-footer">
      <button id="register" class="modal-action  blue white-text waves-effect waves-light btn-flat" ng-disabled="!userForm.$valid">Register</button>
    </div>
  </div>