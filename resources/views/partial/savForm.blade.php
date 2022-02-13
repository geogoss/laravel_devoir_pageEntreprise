<section class="w-25 mx-auto">
    <form class="mt-5">
        <p>
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control">
        </p>
        <p>
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </p>
     
        <p>
            <label for="pays" class="form-label">Pays</label>
            <select name="pays" id="pays" class="form-select">
                <option value="France">Belgique</option>
                <option value="Suisse">New York</option>
                <option value="Congo">Londres</option>
                <option value="Congo">Berlin</option>
                <option value="Congo">Paris</option>
            </select>
        </p>
          
        <p>
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" name="email" id="email" value="john@gmail.com" class="form-control">
        </p>
        
        <p>
            <label for="reclamation" class="form-label">Expliquez nous votre problème</label>
            <textarea class="form-control"></textarea>
        </p>
     
        <p class="form-check form-switch">
            <input type="checkbox" name="mode_sombre" class="form-check-input" id="mode_sombre_pour_switch">
            <label for="mode_sombre_pour_switch" class="form-check-label">M'envoyer une copie</label>
        </p>

        <p class="form-check form-switch">
            <input type="checkbox" name="mode_sombre" class="form-check-input" id="mode_sombre_pour_switch">
            <label for="mode_sombre_pour_switch" class="form-check-label">J'accepte les conditions de Manufacture Corporation</label>
        </p>
        <p class="text-center m-0 py-3">
            <button class="btn btn-danger p-2">Envoyer la demande</button>
        </p>
    </form>
</section>