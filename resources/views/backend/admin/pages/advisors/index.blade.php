@extends('backend.admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Danışman Menüsü</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('advisors.create') }}">Danışman Oluştur   </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Fotoğraf</th>
            <th>İsim Soyisim</th>
            <th>Biyografi</th>
            <th>Mail</th>
            <th>Tel.</th>
            <th>İşlemler</th>

        </tr>
        @foreach ($advisors as $advisor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $advisor->image }}</td>
            <td>{{ $advisor->name }}</td>
            <td>{{ $advisor->detail }}</td>
            <td>{{ $advisor->mail }}</td>
            <td>{{ $advisor->tel }}</td>
            <td>
                <form action="{{ route('advisors.destroy',$advisor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('advisors.show',$advisor->id) }}">Göster</a>

                    <a class="btn btn-primary" href="{{ route('advisors.edit',$advisor->id) }}">Düzenle</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Sil</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $advisors->links() !!}

@endsection
