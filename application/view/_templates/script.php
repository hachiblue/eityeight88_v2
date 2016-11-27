

<!-- core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?=URL;?>js/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.min.js"></script>

<script src="<?=URL;?>js/bootstrap.offcanvas.min.js"></script>
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
		
		var swiper_slide = new Swiper('.swiper-slide-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			spaceBetween: 30
		});

		var swiper = new Swiper('.swiper-paralax-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			parallax: true,
			speed: 600,
		});
		

		$('#fixoSlide').flexslider({
			animation: "fade", //슬라이드효과(slide, fade)
			slideshowSpeed: 5000, //자동변환속도 5000
			animationSpeed: 0, //슬라이드속도 900
			easing: "easeInOutCubic", //슬라이드모션
			animationLoop: true, //반복설정
			slideshow: true, //자동변환
			pauseOnAction: true, //버튼클릭시슬라이드멈춤
			pauseOnHover: false, //슬라이드에마우스오버시멈춤
			controlNav: true, //현재슬라이드위치
			directionNav: true, //좌우버튼
			//manualControls : ".slideBtn > li", //현재위치커스텀
			start: function(slider){ //처음로딩
				$('#fixoSlide').delay(400).animate({
					opacity: 1
				});
				animation();
			},
			before: function(slider){ //슬라이드시작
				animation();
			},
			after: function(slider){ //슬라이드끝
				if (!slider.playing){
					slider.play();
				}
			}
		});

		function animation() 
		{
			$(".left_content").css({"left": "50px", "opacity": "0"}); //reset
			$(".right_content").css({"right": "-100px", "opacity": "0"}); //reset
			$(".left_content").stop().delay(500).animate({"left": "100px", "opacity": "1"}, 1200, "easeOutQuad");
			$(".right_content").stop().animate({"right": "0", "opacity": "1"}, 3000, "easeOutQuad");
		}

		
		/*
		$("#fixoHeader .section .top .inner").mouseenter(function() {
			$(this).stop().animate({"height":"250px"}, 400, "easeInOutExpo");
		}).mouseleave(function(){
			$(this).stop().animate({"height":"60px"}, 400, "easeInOutExpo");
		});
		*/

		$(window).scroll(function() {
			if($(this).scrollTop() > 130) {
				$("#fixoHeader .section .top").css({"position":"fixed"});
			} else {
				$("#fixoHeader .section .top").css({"position":"relative"});
			}
		});

	});

//-->
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=URL;?>assets/js/ie10-viewport-bug-workaround.js"></script>


