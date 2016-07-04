<!DOCTYPE html>
<html>
<head>
	<title>RRPplus - Novas fórmulas para sua empresa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8"> 
	<meta description="RRPplus - Desenvolvimento de alimentos - Novas fórmulas para sua empresa!">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/rrp.css">
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen"/>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  <!-- Add jQuery library -->
    <script type="text/javascript" src="lib/jquery-1.10.2.min.js"></script>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="lib/jquery-1.10.2.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
	        $(document).ready(function() {
	            /*
	             *  Simple image gallery. Uses default settings
	             */

	            $('.fancybox').fancybox();

	            /*
	             *  Different effects
	             */

	            // Change title type, overlay closing speed
	            $(".fancybox-effects-a").fancybox({
	                helpers: {
	                    title : {
	                        type : 'outside'
	                    },
	                    overlay : {
	                        speedOut : 0
	                    }
	                }
	            });

	            // Disable opening and closing animations, change title type
	            $(".fancybox-effects-b").fancybox({
	                openEffect  : 'none',
	                closeEffect : 'none',

	                helpers : {
	                    title : {
	                        type : 'over'
	                    }
	                }
	            });

	            // Set custom style, close if clicked, change title type and overlay color
	            $(".fancybox-effects-c").fancybox({
	                wrapCSS    : 'fancybox-custom',
	                closeClick : true,

	                openEffect : 'none',

	                helpers : {
	                    title : {
	                        type : 'inside'
	                    },
	                    overlay : {
	                        css : {
	                            'background' : 'rgba(238,238,238,0.85)'
	                        }
	                    }
	                }
	            });

	            // Remove padding, set opening and closing animations, close if clicked and disable overlay
	            $(".fancybox-effects-d").fancybox({
	                padding: 0,

	                openEffect : 'elastic',
	                openSpeed  : 150,

	                closeEffect : 'elastic',
	                closeSpeed  : 150,

	                closeClick : true,

	                helpers : {
	                    overlay : null
	                }
	            });

	            /*
	             *  Button helper. Disable animations, hide close button, change title type and content
	             */

	            $('.fancybox-buttons').fancybox({
	                openEffect  : 'none',
	                closeEffect : 'none',

	                prevEffect : 'none',
	                nextEffect : 'none',

	                closeBtn  : false,

	                helpers : {
	                    title : {
	                        type : 'inside'
	                    },
	                    buttons : {}
	                },

	                afterLoad : function() {
	                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
	                }
	            });


	            /*
	             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
	             */

	            $('.fancybox-thumbs').fancybox({
	                prevEffect : 'none',
	                nextEffect : 'none',

	                closeBtn  : false,
	                arrows    : false,
	                nextClick : true,

	                helpers : {
	                    thumbs : {
	                        width  : 50,
	                        height : 50
	                    }
	                }
	            });

	            /*
	             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
	            */
	            $('.fancybox-media')
	                .attr('rel', 'media-gallery')
	                .fancybox({
	                    openEffect : 'none',
	                    closeEffect : 'none',
	                    prevEffect : 'none',
	                    nextEffect : 'none',

	                    arrows : false,
	                    helpers : {
	                        media : {},
	                        buttons : {}
	                    }
	                });

	            /*
	             *  Open manually
	             */

	            $("#fancybox-manual-a").click(function() {
	                $.fancybox.open('1_b.jpg');
	            });

	            $("#fancybox-manual-b").click(function() {
	                $.fancybox.open({
	                    href : 'iframe.html',
	                    type : 'iframe',
	                    padding : 5
	                });
	            });

	            $("#fancybox-manual-c").click(function() {
	                $.fancybox.open([
	                    {
	                        href : '1_b.jpg',
	                        title : 'My title'
	                    }, {
	                        href : '2_b.jpg',
	                        title : '2nd title'
	                    }, {
	                        href : '3_b.jpg'
	                    }
	                ], {
	                    helpers : {
	                        thumbs : {
	                            width: 75,
	                            height: 50
	                        }
	                    }
	                });
	            });


	        });
	</script>
    <style type="text/css">
       .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }    
	</style>
</head>


<body>
<!----------------------------------Início do Nav-------------------------------->

<nav class="navbar navbar-default navbar-fixed-top">
<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">
			<img style="max-width:100px; margin-top:-13px;" src="img/rrp_plus.png">
		</a>
	</div>

<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="quemsomos.php">Quem somos</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos e Serviços<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="produtos.php">Produtos Desenvolvidos</a></li>
					<li><a href="palestras.php">Palestras e Treinamentos</a></li>
					<li><a href="fluxogramas.php">Fluxogramas</a></li>			
				</ul>
			</li>
			<li><a href="equipe.php">Equipe</a></li>
			<li><a href="orcamento.html" target="_blank">Orçamento</a></li>
			<li><a href="contato.php">Contato</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			</ul>
	</div><!-- /.navbar-collapse -->
</nav>

<!----------------------------------Fim do Nav-------------------------------->
