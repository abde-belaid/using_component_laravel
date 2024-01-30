
            <div class="col">
                {{-- {{$source}} --}}
                <div class="card h-100 shadow-sm"> <img
                        src="{{$source}}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">{{$intitule}}</span> <span class="float-end price-hp">{{$prix}}</span> </div>
                        <h5 class="card-title">{{$description}}</h5>
                        <div class="text-center my-4"> <a href="#" class="btn btn-{{$cl}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
