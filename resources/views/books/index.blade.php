@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Knygos Pavadinimas</th>
            <th>Autorius</th>
            <th>Puslapiu sk</th>
            <th>ISBN kodas</th>
            <th>Aprasymas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($book as $key)
        <tr>
            <td>{{ $key->title }}</td>
            <td>{{ $key->author->name }} {{ $key->author->surname }}</td>
            <td>{{ $key->pages }}</td>
            <td>{{ $key->isbn }}</td>
            <td>{!! $key->description !!}</td>
            <td>
                <form action={{ route('books.destroy', $key->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('books.edit', $key->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('books.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection