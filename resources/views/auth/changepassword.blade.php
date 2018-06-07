@include('admin.AdminLTE.header')@include('admin.AdminLTE.sidebar')
<div class="content-wrapper">
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Change Password</h3>
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
            <form class="form-horizontal" action="{{ route('changePassword') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label for="current-password" class="control-label col-sm-2">Current Password</label>
                    <div class="col-sm-10">
                        <input id="current-password" type="password" class="form-control" name="current-password"
                                required>
                        @if ($errors->has('current-password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="control-label col-sm-2">New Password</label>
                    <div class="col-sm-10">
                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                        @if ($errors->has('new-password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="new-password-confirm" class="control-label col-sm-2">Confirm Password</label>
                    <div class="col-sm-10">
                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
@include('admin.AdminLTE.footer')