@include('admin.AdminLTE.header')@include('admin.AdminLTE.sidebar')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">ADD POST</h3>
            </div>
            <div class="box-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="form-horizontal" action="/admin/post/create" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-2" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-2" for="thumbnail">Thumbnail</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('thumbnail') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-2" for="caption">Caption</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="caption" name="caption">
                            @if ($errors->has('caption'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-2" for="description">Description</label>
                        <div class="col-sm-10">
                            <textarea rows="5" type="text" class="form-control" id="description"
                                    name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-2" for="author">Author</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="author" name="author"
                                    value="{{ Auth::user()->name }}">
                            @if ($errors->has('author'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                            @endif
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