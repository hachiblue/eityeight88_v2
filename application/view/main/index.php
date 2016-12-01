


<div id="fixo_content">

	<div id="fixoMainSlide" class="hidden-md hidden-lg">
		<div class="swiper-slide-container swiper-container-horizontal">
		  <div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="#">
					<img src="http://m.16brand.com/postfixo/images/banner_001.jpg" alt="메인이미지01">
				</a>
			</div>
			<div class="swiper-slide">
				<a href="#">
					<img src="<?=URL;?>img/banner.jpg" alt="메인이미지02">
				</a>
			</div>
		</div>

		<div class="swiper-pagination"></div>
	</div>

</div>

<div id="fixoSlide" class="flexslider hidden-xs hidden-sm">
	<ul class="slides">
		<li class="slides_bg1 fixo-active-slide">
			<div class="box">
				<div class="left_content" style="left: 100px; opacity: 1;">
					<p class="img">
						<img src="http://16brand.com/postfixo/images/tmp_imsi.png" alt="left" draggable="true">
					</p>
					<h3><img src="http://16brand.com/postfixo/images/txt_001.png" draggable="true"></h3>
					<p class="sub_txt">
						<img src="http://16brand.com/postfixo/images/txt_001_001.png" draggable="true">
					</p>
					<p>
						<a href="/product/detail.html?product_no=183&amp;cate_no=42&amp;display_group=1">
							<img src="http://16brand.com/postfixo/images/btn_go.png" draggable="true">
						</a>
					</p>
				</div>
				<p class="right_content" style="right: 0px; opacity: 1;">
					<a href="/product/detail.html?product_no=183&amp;cate_no=42&amp;display_group=1">
						<img src="http://16brand.com/postfixo/images/main_visual_01.jpg" alt="right" draggable="true">
					</a>
				</p>
			</div>
		</li>
		<li class="slides_bg2 fixo-active-slide">
			<div class="box">
				<div class="left_content" style="left: 100px; opacity: 1;">
					<p class="img">
						<img src="/img/products/p02.png" alt="left" draggable="true" style="width:264px; height: 323px;">
					</p>
					<h3><img src="http://16brand.com/postfixo/images/txt_001.png" draggable="true"></h3>
					<p class="sub_txt">
						<img src="http://16brand.com/postfixo/images/txt_001_001.png" draggable="true">
					</p>
					<p>
						<a href="/product/detail.html?product_no=183&amp;cate_no=42&amp;display_group=1">
							<img src="http://16brand.com/postfixo/images/btn_go.png" draggable="true">
						</a>
					</p>
				</div>
				<p class="right_content" style="right: 0px; opacity: 1;">
					<a href="/product/detail.html?product_no=183&amp;cate_no=42&amp;display_group=1">
						<img src="/img/banner.jpg" alt="right" draggable="true" style="width:1100px; height: 1010px;">
					</a>
				</p>
			</div>
		</li>
	</ul>
</div>


<div class="body_contain">

	<div class="row">

		<div class="col-xs-12 text-center">
			<div class="tit_area">
				<h2>BEST&nbsp;<span>Products</span></h2>
				<span class="subTit">This product is the best in every respect.</span>
			</div>
		</div>

	</div>


	<div class="container">
		<div class="row prdList masonry" id="fixoGridContent">
			<?php
			foreach ($products as $i => $prod) 
			{
				$name = ($_SESSION["Lang"] == "en")? "name_eng" : "name_th";
				$detail = ($_SESSION["Lang"] == "en")? "details" : "detail_th";
				$img = explode(",", str_replace(" ", "%20", $prod["img_file"]));
			?>
			<div class="item col-xs-6 col-sm-3 col-lg-3 col-md-3 prod-bx">
				<div class="thumbnail box">

					<a href="<?=$_URL;?>products/product_detail/<?=$prod["code_product"];?>"><img src="<?=URL;?>images/upload/<?=$img[0];?>" alt=""></a>
					
					<p class="name">
						<a href="<?=$_URL;?>products/product_detail/<?=$prod["code_product"];?>" class=""><span class="prod_name"><?=$prod[$name];?></span></a>
					</p>
				
					<div class="pdlr10 pdb10">
						<span class="prod_price">14,000฿</span>
					</div>

				</div>
			</div>

			<?php
			}
			?>
		</div>
	</div>

</div>	