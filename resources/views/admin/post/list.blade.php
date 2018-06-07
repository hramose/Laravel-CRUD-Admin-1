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
                <h3 class="box-title">Danh sách bài viết</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <div>
                            <a class="btn-top pull-right" href="/admin/post/create"> <span
                                        class="glyphicon glyphicon-plus"></span> &nbsp Thêm bài viết mới</a>
                        </div>
                        <thead>
                        <tr class="row-name">
                            <th width="5%">ID</th>
                            <th width="20%">TITLE</th>
                            <th width="20% ">THUMBNAIL</th>
                            <th width="30%">CAPTION</th>
                            <th width="15%">AUTHOR</th>
                            <th width="15%">OPTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr class="row-content">
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <img src="{{ asset("$post->thumbnail") }}" style="max-width: 32px;"/>
                                </td>
                                <td>{{ $post->caption }}</td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <!-- Single button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Thao tác <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="/admin/post/{{ $post->id }}" aria-label="Settings">Xem</a>
                                            </li>
                                            <li><a href="/admin/post/edit/{{ $post->id }}" aria-label="Settings">Sửa</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="/admin/post/delete/{{ $post->id }}"
                                                        onclick="return confirm('Xác nhận xóa bài viết');">Xóa</a>
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
                    <div class="text-center">{{ $posts->links() }}</div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->@include('admin.AdminLTE.footer')
