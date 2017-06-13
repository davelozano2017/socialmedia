
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.amaran.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/angular/angular-main.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('#modal1').modal();
 

    $('#register').click(function(e){
    	e.preventDefault();
    	$.amaran({
	        'theme'     :'awesome ok',
	        'content'   :{
	            title:'Welcome Back!',
	            message:'You are successfully logged in!',
	            info:'',
	            icon:'fa fa-check-square-o'

	        },
	        'position'  :'bottom right',
	        'outEffect' :'slideBottom',
	        'afterEnd'  :function() {
	            // location.href = 'home';
	        }
	    });
    })

  });

  // create angular app
	var validationApp = angular.module('validationApp', ['ngMessages']);

	// create angular controller
	validationApp.controller('mainController', function($scope) {

		// function to submit the form after all validation has occurred			
		$scope.submitForm = function() {

			// check to make sure the form is completely valid
			if ($scope.userForm.$valid) {
				alert('our form is amazing');
			}

		};

	});

</script>
</body>
</html>