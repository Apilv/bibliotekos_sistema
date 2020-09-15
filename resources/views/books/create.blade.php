@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujas Knyga:</div>
               <div class="card-body">
                   <form action="{{ route('books.store') }}" method="POST">
                       @csrf
                      <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Autorius: </label>
                            <select name="author_id" id="" class="form-control">
                                <option value="" selected disabled>Pasirikinite autorių:</option>
                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name}} {{ $author->surname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Puslapiu sk</label>
                            <input type="number" name="pages" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">ISBN kodas</label>
                            <input type="number" name="isbn" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Aprasymas</label>
                           <textarea id="mce" name="description"></textarea>
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection