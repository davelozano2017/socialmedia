
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.amaran.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/angular/angular-main.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('#modal1').modal();
    $('select').material_select();

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
		   $("#reg-form").submit(function(event){
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
	             alert('success')
	          	//  pansamantala habang wala pa  
	            //    $.amaran({
			    //     'theme'     :'awesome ok',
			    //     'content'   :{
			    //         title:'Welcome Back!',
			    //         message:'You are successfully logged in!',
			    //         info:'',
			    //         icon:'fa fa-check-square-o'

			    //     },
			    //     'position'  :'bottom right',
			    //     'outEffect' :'slideBottom',
			    //     'afterEnd'  :function() {
			    //         // location.href = 'home';
			    //     }
			    // });
	             }
	             else
	             {
	             // catch error server side
	                $.each(response.messages, function(key,value){
	                  var element = $('#' + key);
	                  element.closest('div.form-group')
	                  .removeClass('has-error')
	                  .removeClass('has-success')
	                  .addClass(value.length > 0 ? 'has-error' : 'has-success')
	                  .find('.text-danger').remove();
	                  element.after(value);
	                });
	             }
	          }
	        });
	    });

</script>
</body>
</html>