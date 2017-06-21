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
		<div class="container">
			<h4 class="txt-history">Lịch sử đặt hàng</h4>
			<div class="table-responsive table-history col-md-10 col-md-push-1">
				<table class="table table-striped t">
					<thead>
						<tr>
							<th>Mã đơn hàng</th>
							<th>Ngày đặt hàng</th>
							<th>Tổng tiền</th>
							<th>Tình trạng</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="code-order">2348593</td>
							<td class="time-order">17/12/2010</td>
							<td class="total-price-order">450.000VND</td>
							<td class="status"><span class="status-close">Đã đóng</span></td>
							<td class="view-detail"><a href="">Xem chi tiết đơn hàng</a></td>
						</tr>
						<tr>
							<td class="code-order">583939</td>
							<td class="time-order">17/12/2010</td>
							<td class="total-price-order">300.000VND</td>
							<td class="status"><span class="status-ok">Đã duyệt</span></td>
							<td class="view-detail"><a href="">Xem chi tiết đơn hàng</a></td>
						</tr>
						<tr>
							<td class="code-order">9849840</td>
							<td class="time-order">17/12/2010</td>
							<td class="total-price-order">30.000VND</td>
							<td class="status"><span class="status-reject">Từ chối</span></td>
							<td class="view-detail"><a href="">Xem chi tiết đơn hàng</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>