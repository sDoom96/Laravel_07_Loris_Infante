<x-layout>
    
    <form method="POST" action="{{route('comics.update',compact('data'))}}" enctype="multipart/form-data" >
        @csrf
        @method('put') 
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" value="{{$data->title}}"  id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="number" value="{{$data->year}}" class="form-control" id="year" name="year">
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Descrizione</label>
            <textarea name="description"  id="description" class="form-control" cols="70" rows="30">
{{$data->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="img">
                inserisci l'immagine
            </label>
            <input type="file" name="img" id="img" class="fom-label form-control">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    
</x-laoyut>