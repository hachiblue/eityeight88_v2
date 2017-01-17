<?php

$img_prod = explode(",", str_replace(" ", "%20", $product["img_file"]));
$lang = ($_SESSION["Lang"] == "en")? "_eng" : "_th";
$name = ($_SESSION["Lang"] == "en")? "name_eng" : "name_th";
$detail = ($_SESSION["Lang"] == "en")? "details" : "detail_th";
$color_prod = explode(",", $product["color_" . $name]);

$shortinfo = $product["shortinfo" . $lang];
$spfeatures = $product["spfeatures" . $lang];
$howtouse = $product["howtouse" . $lang];
$ingredients = $product["ingredients" . $lang];
?>


<div id="headImg" class="hidden-xs hidden-sm">
	<div class="topimg_menu01 top_img">
		<span class="over_bg" style="heught:900px"></span>
	</div>
	<div class="top_img_prod top_img" style="display: block;">
		<div class="txt base" style="display: block;">
			<span class="mt"><?=_PRODUCT_ITEM;?></span>
			<span class="subt">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
				Lorem ipsum dolor.
			</span>
		</div>
		<span class="over_bg"></span>
	</div>
</div>

<div class="container">
	
	<ol class="breadcrumb text-right hidden-xs hidden-sm">
	  <li><a href="<?=$_URL;?>"><?=_HOME;?></a></li>
	  <li><a href="<?=$_URL;?>products"><?=_PRODUCT_ITEM;?></a></li>
	  <li class="active"><?=$product[$name];?></li>
	</ol>

	
	<div class="hidden-md hidden-lg">
		<div id="titleArea" class="xans-element- xans-product xans-product-headcategory ">
			<div class="h4 text-center"><b><?=_PRODUCT_ITEM;?></b></div>
			<span class="xans-element- xans-layout xans-layout-mobileaction ">
				<a href="#none" onclick="history.go(-1);return false;">
					<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
				</a>
			</span>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="xans-product-detail">
		<div class="col-sm-6">
			<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="15000">

				<div class="carousel-inner product-image">
					<div class="item active" data-thumb="0">
						<img src="<?=URL;?>images/upload/<?=$img_prod[0];?>" style=" max-width: 293px;max-height: 396px;margin: auto;">
					</div>
				</div>
			</div> 

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6 infoArea product-detail-box">

			<h3><?=$product[$name];?></h3>

			<div class="infoTxt">
				<?=$shortinfo;?>
			</div>

			<div class="p-detail">
				<p><?=$product[$detail];?></p>
			</div>

			<div class="col-xs-12 product-tag">
				Tags <?=$product["tag"];?>
			</div>

			<?php
			$dsp = ( !empty($color_prod[0]) )? "" : "display:none;";
			?>
			<div class="col-xs-12 product-color" style="<?=$dsp;?>">
			
				<div class="row">
					<div class="form-group">
						<div class="input-group" style="width: 100%;"">
							<select class="form-control" name="color_code" id="color_code">
								<?php
								if( $product['id'] == 42 )
								{
									?>
									<option value=""> <?=_HAVE;?> <?=count($color_prod);?> <?=_SHADES_IN_A_BOX;?> </option>
									<?php
								}
								else
								{
									?>
									<option value=""> <?=_COLOR;?> <?=count($color_prod);?> <?=_SHADE_IS_AVAILABLE;?> </option>
									<?php
								}
								foreach ($color_prod as $color) 
								{
									echo '<option value="'.$color.'" style="background-color:'.$color.'">'.$color.'</option>';
								}
							
								?>
							</select>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- /col-sm-6 -->

		<div class="clearfix"></div>

	</div>


		
	<div class="col-md-12 product-tabs">
		<ul id="myTab" class="nav nav-tabs">
		  <li class="active col-xs-12 col-sm-2 text-center pd0"><a href="#spfeatures" data-toggle="tab"><?=_SPECIAL_FEATURES;?></a></li>
		  <li class="col-xs-12 col-sm-2 text-center pd0"><a href="#howto" data-toggle="tab"><?=_HOW_TO_USE;?></a></li>
		  <li class="col-xs-12 col-sm-2 text-center pd0"><a href="#ingredients" data-toggle="tab"><?=_INGREDIENTS;?></a></li>
		</ul>

		<div id="myTabContent" class="tab-content">

		  <div class="tab-pane fade active in" id="spfeatures">
			<?=$spfeatures;?>
		  </div>

		  <div class="tab-pane fade" id="howto">
			<?=$howtouse;?>
		  </div>

		  <div class="tab-pane fade" id="ingredients">
			<div class="row">
			<?=$ingredients;?>
			</div>
		  </div>

		</div>

	</div>



</div> <!-- /row -->


