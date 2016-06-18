<!DOCTYPE html>
<html>
<head>
<title>Home | SokoEffect </title>
<link rel="stylesheet" href="<?php echo base_url().'vendor/css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/bootstrap-select.css">
<link href="<?php echo base_url();?>vendor/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/font-awesome.min.css" />
<link href="<?php echo base_url();?>vendor/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>vendor/js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>vendor/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>vendor/js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="<?php echo base_url();?>vendor/js/jquery.leanModal.min.js"></script>
<link href="<?php echo base_url();?>vendor/css/jquery.uls.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>vendor/css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>vendor/css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="<?php echo base_url();?>vendor/js/jquery.uls.data.js"></script>
<script src="<?php echo base_url();?>vendor/js/jquery.uls.data.utils.js"></script>
<script src="<?php echo base_url();?>vendor/js/jquery.uls.lcd.js"></script>
<script src="<?php echo base_url();?>vendor/js/jquery.uls.languagefilter.js"></script>
<script src="<?php echo base_url();?>vendor/js/jquery.uls.regionfilter.js"></script>
<script src="<?php echo base_url();?>vendor/js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>