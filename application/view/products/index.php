

<div id="headImg" class="hidden-xs hidden-sm">
	<div class="topimg_menu01 top_img">
		<span class="over_bg" style="heught:900px"></span>
	</div>
	<div class="top_img_prod top_img" style="display: block;">
		<div class="txt base" style="display: block;">
			<span class="mt">Product Item</span>
			<span class="subt">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
				Lorem ipsum dolor.
			</span>
		</div>
		<!-- /중분류별텍스트 -->
		<span class="over_bg"></span>
	</div>
</div>


<div class="body_contain">

	<div class="container">

		<ol class="breadcrumb text-right hidden-xs hidden-sm">
		  <li><a href="<?=$_URL;?>"><?=_HOME;?></a></li>
		  <li class="active">Product Item</li>
		</ol>

		<div class="function clear hidden-xs hidden-sm">
			<p class="prdCount">TOTAL : <strong><?=count($products);?></strong> ITEMS IN THIS CATEGORY.</p>
		</div>
		
		<div class="hidden-md hidden-lg">
			<div id="titleArea" class="xans-element- xans-product xans-product-headcategory ">
				<div class="h4 text-center"><b>Product Item</b></div>
				<span class="xans-element- xans-layout xans-layout-mobileaction "><a href="#none" onclick="history.go(-1);return false;">
					<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
				</span>
			</div>
		</div>
	
		<div class="clearfix"></div>

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