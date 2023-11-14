<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="fumetto">
    <div class="card-body">
        <h5 class="card-title"> {{$data->title}} </h5>
        <p class="card-text"> <strong>{{$data->year}}</strong></p>
        <p class="card-text">{{$data->description}}</p>
        <a href="{{route('comics.show',compact('data'))}}" class="btn btn-primary">Leggi</a>
        <a href="{{route('comics.edit',compact('data'))}}" class="btn btn-warning">Modifica</a>
        <form method="POST" action="{{route('comics.delete',compact('data'))}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
</div>