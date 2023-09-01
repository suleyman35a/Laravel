@extends('backend.admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show advisor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('advisors.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fotoğraf:</strong>
                {{ $advisor->image }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>İsim-Soyisim:</strong>
                {{ $advisor->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Biyografi:</strong>
                {{ $advisor->detail }}
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mail:</strong>
                {{ $advisor->mail }}
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tel.:</strong>
                {{ $advisor->tel }}
            </div>
        </div>
    </div>
@endsection
