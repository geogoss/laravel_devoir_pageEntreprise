<section class="row mt-5">
    @foreach ($pers as [$nom, $prenom, $fonction, $photo, $tel, $exp, $type])
    @if ($type == 'front' )
    <section class=" col-4">
        <div class="card w-50 mb-4 mx-auto">
            <!-- Image d'illustration -->
            <img src="{{asset('images/personnes/'.$photo)}}" class="card-img-top" alt="Montagnes">
            <!-- En-tête de la carte -->
            <div class="card-header">
                {{ $prenom }} {{ $nom }} => <span class="text-info">{{$exp}}</span> 
            </div>

            <!-- Corps -->
            <div class="card-body d-flex flex-column justify-content-center align-items-start">
                    <a href="#" class="card-link text-dark ms-3 ">{{$prenom}}.{{$nom}}@groupe_corporation.com</a>
                    <a href="#" class="card-link text-dark">{{$tel}}</a>    
            </div>

            <!-- Pied -->
            <div class="card-footer p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="text-info fw-bold">Front End</span> Develloper </li>
                </ul>
            </div>
        </div>
    </section>
        
    @endif
@endforeach

</section>