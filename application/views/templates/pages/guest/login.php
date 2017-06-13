  <div class="section"></div><div class="section"></div><div class="section"></div>
    <div class="container" style="width:22em">
      
      <div class="col s12 m6">
        <div class="card yellow lighten-5 z-depth-0">
          <div class="card-content">
            <div class="row">
            <!-- Start validation form of angular js -->
            <div >
            <form method="POST" name="FormLogin" novalidate>
              <div class="input-field">
                <input id="uname" name="uname" type="text" ng-model="uname" class="validate" required>
                <label for="uname">Username</label>
                <div ng-messages="FormLogin.uname.$error" ng-if="FormLogin.uname.$dirty">
                  <span ng-message="required" class="error">Username is required</span>
                </div>
              </div>
              
              <div class="input-field">
                <input id="pwd" name="pwd" type="password" ng-model="pwd" class="validate" required>
                <label for="pwd">Password</label>
                <div ng-messages="FormLogin.pwd.$error" ng-if="FormLogin.pwd.$dirty">
                  <span ng-message="required"  class="error">Password is Required</span>
                </div>
              </div>

            </div>

              <p>
                <input type="checkbox" id="remember_me" />
                <label for="remember_me">Remember Me</label>
              </p>

            <div class="row">
              <div class="input-field col s12">
                <button type="submit" ng-disabled="!FormLogin.$valid" class="waves-effect waves-light btn col s12 blue z-depth-0">Login</button>
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

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
    
        <form method="POST" name="FormRegister" novalidate id="reg-form">
          
          <div class="input-field">
            <input id="name" type="text" class="validate " name="name" id="name" ng-model="name" ng-pattern="/^(.*?[a-zA-Z]){2,}$/" required> 
            <label for="name">Name</label>
              <div ng-messages="FormRegister.name.$error" ng-if="FormRegister.name.$dirty">
                <span ng-message="required" class="error">Name is required</span>
                <span ng-message="pattern" class="error">Name is incomplete</span>
              </div>
          </div>

          <div class="input-field">
            <input id="email" type="email" class="validate" name="email" ng-model="user.email" required>
            <label for="email">Email</label>
            <span ng-show="FormRegister.email.$invalid && !FormRegister.email.$pristine" class="error">Enter a valid email.</span>
          </div>

          <div class="input-field">
            <select id="gender" name="gender" ng-model="gender" required>
              <option value="" selected>Select a gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <label for="gender">Gender</label>
            <div ng-messages="FormRegister.gender.$error" ng-if="FormRegister.gender.$dirty">
              <span ng-message="required" class="error">Gender is required</span>
            </div>
          </div>

          <div class="input-field">
            <input id="username" type="text" class="validate" name="username" ng-model="username" ng-minlength="6" ng-required="true" ng-maxlength="50" required>
            <label for="username">Username</label>
            <div ng-messages="FormRegister.username.$error" ng-if="FormRegister.username.$dirty">
              <span ng-message="minlength" class="error">Username is too short</span>
              <span ng-message="maxlength" class="error">Username is too long</span>
              <span ng-message="required" class="error">Username is required</span>
            </div>
          </div>
          
          <div class="input-field">
            <input id="password" type="password" class="validate" name="password" ng-model="password" ng-minlength="6" ng-maxlength="30" required ng-required="true" password-verify="{{cpassword}}">
            <label for="password">Password</label>
            <div ng-messages="FormRegister.password.$error" ng-if="FormRegister.password.$dirty">
              <span ng-message="minlength" class="error">Password is too short</span>
              <span ng-message="maxlength" class="error">Password is too long</span>
              <span ng-message="required"  class="error">Password is Required</span>
            </div>
          </div>

          <div class="input-field">
            <input id="cpassword" type="password" class="validate" name="cpassword" ng-model="cpassword" ng-minlength="6" ng-maxlength="30" ng-required="true" required="" password-verify="{{password}}">
            <label for="confirmpassword">Confirm Password</label>
            <div ng-messages="FormRegister.cpassword.$error" ng-if="FormRegister.password.$dirty">
                <!-- <span ng-show="cpassword !== password" class="error">Password not match!</span> -->
                <span ng-message="passwordVerify" class="error">Password not match!</span>
            </div>
          </div>
        
        <!-- End form validation angular js -->
      </div>
    </div>
    <div class="modal-footer">
      <button id="register" type="submit" class="modal-action  blue white-text waves-effect waves-light btn-flat" ng-disabled="!FormRegister.$valid">Register</button>
      </form>
    </div>
  </div>
