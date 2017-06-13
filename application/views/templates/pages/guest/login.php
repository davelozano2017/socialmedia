  <div class="section"></div><div class="section"></div><div class="section"></div>
    <div class="container" style="width:22em">
      
      <div class="col s12 m6">
        <div class="card yellow lighten-5 z-depth-0">
          <div class="card-content">
            <div class="row">
            
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
        </div>
        <center><a href="#" data-target="modal1" class="white-text">Create An Account</a></center>
      </div>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <form method="POST">
          <div class="input-field col s12">
            <input id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>

          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12">
            <input id="username" type="text" class="validate">
            <label for="username">Username</label>
          </div>
          
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>

          <div class="input-field col s12">
            <input id="confirmpassword" type="password" class="validate">
            <label for="confirmpassword">Confirm Password</label>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <button id="register" class="modal-action  blue white-text waves-effect waves-light btn-flat">Register</button>
    </div>
  </div>