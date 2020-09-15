@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime knygos informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.update', $book->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" required value="{{ $book->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Puslapiu sk</label>
                            <input type="number" name="pages" class="form-control" required value="{{ $book->pages }}">
                        </div>
                            <div class="form-group">
                            <label for="">ISBN kodas</label>
                            <input type="number" name="isbn" class="form-control" required value="{{ $book->isbn }}">
                        </div>
                            <label for="">Aprasymas</label>
                            <textarea id="mce" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection