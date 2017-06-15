<section class="content-header">
  <h1>Quản lý người dùng</h1>
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
      <table class="table table-hover table-striped table-bordered datatable">
        <thead>
          <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user) { ?>
            <tr>
              <td><?= $user->name ?></td>
              <td><?= $user->email ?></td>
              <td><?= $user->phone ?></td>
              <td class="<?= $user->activated ? 'bg-success' : 'bg-danger' ?>"><?= $user->activated ? 'Đang hoạt động' : 'Khóa hoạt động' ?></td>
              <td class="text-center">
                <a href="<?= get_route('users', 'editUser') ?>&id=<?= $user->id ?>">
                  <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                </a>
                <a href="<?= get_route('users', 'destroyUser') ?>&id=<?= $user->id ?>"
                  onClick="return confirm('Xác nhận xóa?')">
                  <button class="btn btn-danger"><i class="fa fa-remove"></i></button>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<script type="text/javascript">
  $(function() {
    $('.datatable').DataTable({
      'aaSorting': [],
      'columnDefs': [
        {'targets': 4, 'orderable': false}
      ]
    });
  });
</script>
