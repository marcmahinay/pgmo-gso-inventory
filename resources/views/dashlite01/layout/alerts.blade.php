@if (session('success'))
    <div class="alert alert-icon alert-success" role="alert">
        <em class="icon ni ni-alert-circle"></em>
        {{ session('success') }}
    </div>
@endif

@if (session('warning'))
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-warning alert-dismissible show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('warning') }}
        </div>
    </div>
@endif

@if ($errors->has('daterange'))
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-danger alert-dismissible show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $errors->first('daterange') }}
        </div>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-icon alert-danger" role="alert">
        <em class="icon ni ni-alert-circle"></em>
        {{ session('error') }}
    </div>
@endif
