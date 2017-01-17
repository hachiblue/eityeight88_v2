

<div id="headImg" class="hidden-xs hidden-sm">
	<div class="topimg_menu01 top_img">
		<span class="over_bg" style="heught:900px"></span>
	</div>
	<div class="top_img_prod top_img" style="display: block;">
		<div class="txt base" style="display: block;">
			<span class="mt"><?=_SECURITY_CODE_CHECKING;?></span>
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
		  <li><a href="<?=$_URL;?>products"><?=_PRODUCTS;?></a></li>
		  <li class="active"><?=_SECURITY_CODE_CHECKING;?></li>
		</ol>
		
		<div class="hidden-md hidden-lg">
			<div id="titleArea" class="xans-element- xans-product xans-product-headcategory ">
				<div class="h4 text-center"><b><?=_SECURITY_CODE_CHECKING;?></b></div>
				<span class="xans-element- xans-layout xans-layout-mobileaction ">
					<a href="#none" onclick="history.go(-1);return false;">
						<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
					</a>
				</span>
			</div>
		</div>
	
		<div class="clearfix"></div>

		<div class="prdList" style="font-size: 18px;margin-bottom: 40px;">
			

			<div class="col-xs-12 col-sm-6 contact" style="margin-bottom: 80px;">

				<div class="" style="font-size:40px;">
					<div class="row">
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?=URL;?>img/chkserial/chk01.jpg" class="img-responsive" >
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-center" style="font-size:40px;">
							<div class="col-sm-12 col-md-12">
								<img src="<?=URL;?>img/chkserial/chk02.jpg" class="img-responsive">
							</div>
						</div>
					</div>

				</div>

				
			</div>


			<div class="col-xs-12 col-sm-6">
				<div>

					<div class="hidden-xs" style="margin-top:20%;">&nbsp;</div>
					<div class="hd text-uppercase h1"><?=_CHECK_SERIAL;?></div>
					

					<form action="p_login.php" method="post" class="chkserial contact-form">
						<fieldset>
							
							<div class="form-group">
								<input type="text" name="input-serial" id="input-serial" class="form-control" placeholder="<?=_SERIAL_NUMBER;?>">
							</div>
						   
							<div class="row">
								<div class="col-xs-12 col-sm-3">
									<input type="button" class="btn btn-black btn-block sharp" id="btn-chkall-serial" value="SEND">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>

		</div>

		
	</div>

</div>	


<div class="modal fade" id="isreal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12 chkp text-center">
                    http://eityeight.com/
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    This is the product = Authenticity
                </div>
            </div>  
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    Nomor kode ini benar = berarti produk ini asli
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    ผลิตภัณฑ์นี้เป็นผลิตภัณฑ์ = ของจริง
                </div>
            </div>   
        </div>
        <div class="modal-footer" style="padding: 10px;">
            <div class="row">
                <div class="col-xs-12 chkp-foot text-center">
                    <a href="#" data-dismiss="modal" style="color: #1260b1;">ตกลง</a>
                </div>
            </div> 
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="isfake" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12 chkp text-center">
                    http://eityeight.com/
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    Product code is not found = Fake
                </div>
            </div>  
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    Nomor kode ini tidak ada = berarti produk ini palsu
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    ไม่พบรหัสผลิตภัณฑ์ = ของปลอม
                </div>
            </div>   
        </div>
        <div class="modal-footer" style="padding: 10px;">
            <div class="row">
                <div class="col-xs-12 chkp-foot text-center">
                    <a href="#" data-dismiss="modal" style="color: #1260b1;">ตกลง</a>
                </div>
            </div> 
        </div>
    </div>

    


  </div>
</div>

<div class="modal fade" id="isdup" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12 chkp text-center">
                    http://eityeight.com/
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    This product has already been checked = Rechecking
                </div>
            </div>  
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    Nomor kode ini sudah terdaftar = berarti ini pemeriksaan ulang
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 chkp-sub text-center">
                    มีการตรวจผลิตภัณฑ์นี้แล้ว = เช็คซ้ำ
                </div>
            </div>   
        </div>
        <div class="modal-footer" style="padding: 10px;">
            <div class="row">
                <div class="col-xs-12 chkp-foot text-center">
                    <a href="#" data-dismiss="modal" style="color: #1260b1;">ตกลง</a>
                </div>
            </div> 
        </div>
    </div>
    </div>
</div>