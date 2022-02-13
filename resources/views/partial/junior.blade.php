<section class="row">
    <h1 class="ms-5 mb-5 text-white">Juniors :</h1>
    @foreach ($pers as [$nom, $prenom, $fonction, $photo, $tel, $exp, $style])
    @if ($exp == 'Junior')
    <section class=" col-4">
        <div class="card equipe mb-4 text-center">
            <!-- Image d'illustration -->
            <img src="{{asset('images/personnes/'.$photo)}}" class="card-img-top" alt="Montagnes">
            <!-- En-tête de la carte -->
            <div class="card-header">
                {{ $prenom }} {{ $nom }} <br>
                <span class="text-primary">{{$exp}}</span> 
            </div>

            <!-- Pied -->
            <div class="card-footer p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="text-primary fw-bold">{{$style}} </span> Develloper </li>
                </ul>
            </div>
        </div>
    </section>
        
    @endif
    @endforeach

</section>