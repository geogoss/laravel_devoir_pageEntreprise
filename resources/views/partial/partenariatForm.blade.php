<section  class="w-25 mx-auto">
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
            <label for="pays" class="form-label">Choix du partenaire</label>
            <select name="pays" id="pays" class="form-select">
                <option value="France">Mcorporation Bxl</option>
                <option value="France">Mcorporation N-Y</option>
                <option value="France">Mcorporation Ldn</option>
                <option value="France">Mcorporation Prs</option>
                <option value="Suisse">Mcorporation Bln</option>
            </select>
        </p>
     
        <p>
            <label for="fichier" class="form-label">Insérez votre proposition</label>
            <input type="file" name="fichier" class="form-control">
        </p>
     
        <p>
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" name="email" id="email" value="john@gmail.com" class="form-control">
        </p>
        <p class="text-center py-3 m-0 ">
            <button class="btn btn-danger p-2 ">Envoyer la demande</button>
        </p>
     
</section>