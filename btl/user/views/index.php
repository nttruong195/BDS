
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
								foreach ($CL_sp as $clsp) {
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $clsp->id_clsp; ?>" href="index.php?c=index&a=index&id=<?php echo $clsp->id_clsp; ?>">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<?php echo $clsp->ten_clsp; ?>
										</a>
									</h4>
								</div>
								<div id="<?php echo $clsp->id_clsp; ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										<?php
											$idcl=$clsp->id_clsp;
											$this->model= new index_model();
											$loaisp=$this->model->SelectLspWithclsp($idcl);
											foreach ($loaisp as $lsp) {
										?>

											<li><a href="index.php?c=loaisp&a=listlsp&id=<?php echo $lsp->id_loaisp?>"><?php echo $lsp->ten_loaisp;?></a></li>
										<?php }?>
										</ul>
									</div>
								</div>
							</div>
							<?php } ?>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Hãng sản xuất</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php
									foreach ($hang_sxs as $hangsx) {
								?>
									<li><a href="#"> <span class="pull-left"><img src="public/images/home/gif_left.gif"></span><?php echo $hangsx->ten_hangsx;?></a></li>
								<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->

					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm recommended</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								<?php foreach ($slide1 as $slid) {?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/<?php echo $slid->hinh_anh; ?>" alt="" />
													<h2><?php echo number_format($slid->don_gia); ?> đ</h2>
													<a href="index.php?c=product_detail&a=detail&id=<?php echo $slid->id; ?>"><p><?php echo $slid->ten_sp; ?></p></a>
													<a href="index.php?c=addcart&a=add&id=<?php echo $slid->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
								<div class="item">	
									<?php foreach ($slide2 as $slid) {?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/<?php echo $slid->hinh_anh; ?>" alt="" />
													<h2><?php echo number_format($slid->don_gia); ?> đ</h2>
													<a href="index.php?c=product_detail&a=detail&id=<?php echo $slid->id; ?>"><p><?php echo $slid->ten_sp; ?></p></a>
													<a href="index.php?c=addcart&a=add&id=<?php echo $slid->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->


					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới</h2>
						<?php 
							foreach ($san_phams as $sp) 
						{?>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="admin/<?php echo $sp->hinh_anh; ?>" alt="" />
										<h2><?php echo number_format($sp->don_gia); ?> đ</h2>
										<p><?php echo $sp->ten_sp; ?></p>
										<a href="index.php?c=addcart&a=add&id=<?php echo $sp->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo number_format($sp->don_gia); ?> đ</h2>
											<a href="index.php?c=product_detail&a=detail&id=<?php echo $sp->id; ?>"><p><?php echo $sp->ten_sp; ?></p></a>
											<a href="index.php?c=addcart&a=add&id=<?php echo $sp->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>

							</div>
						</div>
						<?php } ?>
						

					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li style="float: left;""><a href="#tshirt" data-toggle="tab">Top sản phẩm bán chạy</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<?php foreach ($topLap as $top) {
								 ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="admin/<?php echo $top->hinh_anh; ?>" alt="" />
												<h2><?php echo number_format($top->don_gia); ?> đ</h2>
												<a href="index.php?c=product_detail&a=detail&id=<?php echo $top->id; ?>"><p><?php echo$top->ten_sp; ?></p></a>
												<a href="index.php?c=addcart&a=add&id=<?php echo $top->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>



<?php
require(PATH_APPLICATION . "/views/footer.php");
?>