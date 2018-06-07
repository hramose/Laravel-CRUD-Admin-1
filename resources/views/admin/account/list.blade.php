@include('admin.AdminLTE.header')@include('admin.AdminLTE.sidebar')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="box-header with-border">
                <h3 class="box-title">Danh sách tài khoản</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <div>
                            <a class="btn-top pull-right" href="/admin/account/create"> <span
                                        class="glyphicon glyphicon-plus"></span> &nbsp Thêm tài khoản mới</a>
                        </div>
                        <thead>
                        <tr class="row-name">
                            <th width="10%">ID</th>
                            <th width="25%">Tên đăng nhập</th>
                            <th width="25%">Email</th>
                            <th width="25%">Số điện thoại</th>
                            <th width="25%">Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="row-content">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <!-- Single button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Thao tác <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="/admin/account/{{ $user->id }}" aria-label="Settings">Xem</a>
                                            </li>
                                            <li><a href="/admin/account/edit/{{ $user->id }}"
                                                        aria-label="Settings">Sửa</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="/admin/account/delete/{{ $user->id }}"
                                                        onclick="return confirm('Xác nhận xóa user');">Xóa</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="text-center">{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->@include('admin.AdminLTE.footer')
