<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="fumetto">
    <div class="card-body">
        <h5 class="card-title"> {{$data->title}} </h5>
        <p class="card-text"> <strong>{{$data->year}}</strong></p>
        <p class="card-text">{{$data->description}}</p>
        <a href="#" class="btn btn-primary">Leggi</a>
    </div>
</div>