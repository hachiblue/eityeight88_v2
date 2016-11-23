

<!-- core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?=URL;?>js/jquery-1.12.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="<?=URL;?>js/bootstrap.offcanvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script>


<script type="text/javascript">
<!--
	var _URL = '<?=$_URL;?>';

	$(document).ready(function () {
		//initialize swiper when document ready  
		var mySwiper = new Swiper ('.swiper-container', {
			loop: true,
			slidesPerView: 3,
			spaceBetween: 30,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev'
		})      
			
		var swiper = new Swiper('.swiper-paralax-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			parallax: true,
			speed: 600,
		});

	});

//-->
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=URL;?>assets/js/ie10-viewport-bug-workaround.js"></script>


