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
		<h3 class="title-lst-cart">Danh sách sản phẩm trong giỏ hàng</h3>
		<div class="table-responsive col-md-10 col-md-push-1">
			<table class="table  cart-table">
				<thead>
					<tr>
						<th>Sản phẩm</th>
						<th>Đơn giá</th>
						<th>Số lượng</th>
						<th>Tổng tiền</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tr class="tr-cart-item">
					<td class="cart-item-image">
						<a href="">
							<img src="../assets/images/moouse-tra-xanh.jpeg" class="img-responsive"/>
							<span class="cart-item-name">Bánh sinh nhật Mousse Việt quất</span>
						</a>
					</td>
					<td class="cart-item-price td-padding-top">
						<span class="amount">300.000VND</span>
					</td>
					<td class="cart-item-quantity">
						<div class="quantity"><input type="number" name="quantity" value="1" class="quantity-txt form-control" size="4"></div>
					</td>
					<td class="cart-item-subtotal td-padding-top">
						<span class="amount">300.000VND</span>
					</td>
					<td style="width: 20px;padding-left: 0px; padding-right: 0px;">
						<button type="button" class="btn btn-in-cart btn-save btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
					</td>
					<td style="width: 20px;padding-left: 0px; padding-right: 0px;">
						<button type="button" class="btn btn-in-cart btn-delete btn-info"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
						
					</td>
				</tr>
				<tr>
					<td class="product-payment" colspan="3">Thành tiền</td>
					<td><span class="total-price text-right">600.000VND</span></td>
					<td colspan="2"><button type="button" class="btn btn-pay btn-info">Thanh toán</button></td>
				</tr>
			</table>
		</div>

	</div>

	<form class="col-md-6 col-md-push-3 form-infor-customer">
		<h4>Hãy nhập thông tin khách hàng</h4>
		<div class="form-group">
			<label>Họ và tên <span class="red-star">*</span></label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Số điện thoại <span class="red-star">*</span></label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Email <span class="red-star">*</span></label>
			<input type="email" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Địa chỉ <span class="red-star">*</span></label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Ghi chú</label>
			<textarea class="form-control" rows="5" id="comment"></textarea>
		</div>
		
		<button type="submit" class="btn btn-order btn-info">Đặt hàng</button>
	</form>


	<script type="text/javascript">
		$(function () {
			$(".form-infor-customer").hide();
			$(".btn-pay").click(function () {
				$(".form-infor-customer").slideToggle();
			})
		});

	</script>
</body>
</html>