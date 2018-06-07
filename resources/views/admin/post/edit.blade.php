@include('admin.AdminLTE.header')@include('admin.AdminLTE.sidebar')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sửa Bài Viết</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" action="/admin/post/edit/{{ $post->id }}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="thumb">Thumbnail</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="thumb" name="thumbnail">
                        </div>
                        <div class="col-sm-1">
                            <img src="{{ asset("$post->thumbnail") }}" style="max-width: 55px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="caption">Caption</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="caption" name="caption"
                                    value="{{ $post->caption }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="des">Description</label>
                        <div class="col-sm-10">
                            <textarea rows="5" type="text" class="form-control" id="des"
                                    name="description">{{ $post->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->@include('admin.AdminLTE.footer')