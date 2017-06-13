
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.amaran.min.js"></script>
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

</script>
</body>
</html>