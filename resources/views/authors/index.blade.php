@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($author as $key)
        <tr>
            <td>{{ $key->name }}</td>
            <td>{{ $key->surname }}</td>
            <td>
                <form action={{ route('authors.destroy', $key->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('authors.edit', $key->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('authors.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection