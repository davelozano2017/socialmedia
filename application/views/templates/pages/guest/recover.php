    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-1 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"><img class="img-responsive" style="width:100%" src="<?php echo base_url()?>assets/app-assets/images/logo/logo.png" alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Recover your password</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" name="FormRecover" novalidate>

                                    <div class="form-group">
                                        <div ng-messages="FormRecover.email.$error" ng-if="FormRecover.email.$dirty">
                                            <span ng-message="required" class="error">This field is required</span>
                                        </div>
                                        <input type="email" id="email" name="email" placeholder="Email Address" ng-model="email" class="form-control" required>
                                    </div>

                                    <button type="submit" ng-disabled="!FormRecover.$valid" class="btn btn-success btn-block">
                                      <i class="icon-unlock2"></i> RECOVER
                                    </button>

                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="">
                                <p class="float-sm-right text-xs-center m-0">New to Socializer? <a href="<?= site_url('register')?>" class="card-link">Create Account</a></p>
                                <p class="float-sm-left text-xs-center m-0"><a href="<?= site_url('login')?>" class="card-link">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
   