@extends('template.main')
@section('content')
<section>
    <h1>Ajouter un genre: </h1>
    
    <form action="/genres" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Genre: </label>
            <input type="text" name="genre">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</section>
<section>
    <h1>Ajouter un membre : </h1>
    <form action="/membres" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nom: </label>
            <input type="text" name="nom">
        </div>

        <div class="form-group">
          <label for="">Prénom: </label>
          <input type="text" name="prenom">
      </div>
      <select name="genre_id" id="">
          @foreach ($DBGenre as $item)
          <option value="{{$item->id}}">{{$item->genre}}</option>
          @endforeach
      </select>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<section class="container">
    <h1>Nos membres:</h1>
</section>
    
@endsection