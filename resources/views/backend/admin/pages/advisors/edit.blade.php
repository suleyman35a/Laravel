@extends('backend.admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit advisor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('advisors.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('advisors.update',$advisor->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fotoğraf:</strong>
                    <input type="text" name="name" value="{{ $advisor->image }}" class="form-control" placeholder="Image">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>İsim Soyisim:</strong>
                <input type="text" name="name" value="{{ $advisor->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Biyografi:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $advisor->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mail</strong>
                <input type="text" name="name" value="{{ $advisor->mail }}" class="form-control" placeholder="Mail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tel:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Tel">{{ $advisor->tel }}</textarea>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
