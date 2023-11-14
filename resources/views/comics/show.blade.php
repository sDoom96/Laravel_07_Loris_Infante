<x-layout>
    
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{{$data->description}}</p>
            <p class="card-text">{{$data->year}}</p>

        </div>
    </div>
    
    
</x-layout>