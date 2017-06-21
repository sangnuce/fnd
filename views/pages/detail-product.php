<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../assets/stylesheets/bootstrap.min.css">
	<script src="../assets/javascripts/jquery-2.2.3.min.js"></script>
	<script src="../assets/javascripts/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../assets/stylesheets/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/stylesheets/custom-user.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="col-md-12">
	<div class="col-md-9 col-sm-9 col-xs-12 show-detail-product">
		<div class="detail-img col-md-6 col-sm-6 col-xs-12">
			<img src="../assets/images/moouse-tra-xanh.jpeg" class="img-responsive"/>
		</div>

		<div class="detail-descrip col-md-6 col-sm-6 col-xs-12">
			<h2 class="detail-name-item">Sinh tố dưa leo</h2>
			<h3 class="detail-price">30.000VND</h3>
			<p class="detail-description-item">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			</p>
			
			<div class="col-sm-12 addToCart">
				<form class="cart-form col-md-12" method="GET" action="" enctype="">
					<div class="quantity">
						<label for="">Số lượng:</label>
						<input type="number" name="quantity" value="1" class="quantity-txt form-control" size="4">
					</div>
					<input type="hidden" name="" value="">
					<input type="hidden" name="action" value="">
					<div class="cart-control">
						<button id="" type="submit" class="btn button-my-cart btn-danger"><i class="fa fa-cart-plus"></i> Giỏ hàng</button>
						<button id="" type="submit" class="btn buy-now btn-info"><i class="fa fa-plus"></i> Mua ngay</button>
					</div>
				</form>
			</div>	

			<div class="rate-share col-md-12">
				<div class="rating col-md-7">
					<label class="txt-rating">Đánh giá sản phẩm</label>
					<span class="lst-star">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</span>
				</div>
				<button id="" type="submit" class="btn col-md-5 share-fb btn-info"><i class="fa fa-facebook" aria-hidden="true"></i> Chia sẻ Facebook</button>
			</div>
		</div>

		<div class="cmt col-md-12">
			<div class="region-cmt col-md-6 col-md-push-3 col-sm-12 col-xs-12">
				<div class="pt-title">
					<span class="number-cmt">2 bình luận</span>
				</div>
				<form method="" class="form-cmt col-md-12">
				  	<div class="form-group">
				  		<img src="../assets/images/user.png" class="avatar-user img-circle"/>
					    <input type="email" class="form-control" name="" value="Test cmt" >
					</div>
				</form>
				<h5 class="infor-user-post">
					<span class="name-user-post">Dung Đỗ</span>
					<span class="time-post">38'</span>
				</h5>

				<form method="" class="form-none-cmt form-cmt col-md-12">
				  	<div class="form-group">
				  		<img src="../assets/images/user.png" class="avatar-user img-circle"/>
					    <input type="email" class="form-control" name="" placeholder="Hãy bình luận sản phẩm mình thích" />
					</div>
				</form>

			</div>
		</div>
	</div>

	<div class="side-bar col-md-3 col-sm-3 col-xs-12">
		<div class="category col-md-12 col-sm-12 xs-hidden part-sidebar">
			<div class="title-cat sub-title-sidebar">
				<h5>Danh mục sản phẩm</h5>
			</div>
			<div class="lst-cat lst-item-sidebar col-md-12">
				<ul>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Đồ uống</a></li>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Thức ăn</a></li>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Trà sữa</a></li>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Cà phê</a></li>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Bánh mì</a></li>
					<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>Chè</a></li>
				</ul>
			</div>
		</div>

		<div class="relation-product col-md-12 col-sm-12 xs-hidden part-sidebar">
			<div class="title-cat sub-title-sidebar">
				<h5>Sản phẩm liên quan</h5>
			</div>
			<div class="lst-relation-item col-md-12">
				<ul class="col-md-12">
					<li class="col-md-12">
						<a href="">
							<img src="../assets/images/banh-trang-tron.jpg"/>
							<div class="infor-product-sidebar">
								<h5 class="name-relation-item">Bánh tráng trộn</h5>
								<h5 class="price-relation-item">25.000VND</h5>
							</div>
						</a>
					</li>
					<li class="col-md-12">
						<a href="">
							<img src="../assets/images/banh-trang-tron.jpg"/>
							<div class="infor-product-sidebar">
								<h5 class="name-relation-item">Bánh tráng trộn</h5>
								<h5 class="price-relation-item">25.000VND</h5>
							</div>
						</a>
					</li>
					<li class="col-md-12">
						<a href="">
							<img src="../assets/images/banh-trang-tron.jpg"/>
							<div class="infor-product-sidebar">
								<h5 class="name-relation-item">Bánh tráng trộn</h5>
								<h5 class="price-relation-item">25.000VND</h5>
							</div>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>

</div>
</body>
</html>