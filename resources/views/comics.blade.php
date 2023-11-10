<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-center">
            <h1> I nostri fumetti</h1>
        </div>
        @foreach($comics as $comic)
        <x-card :data='$comic' route='comics'/>
        @endforeach
    </div>
</div>




</x-layout>