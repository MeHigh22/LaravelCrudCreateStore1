<h1>Formulaire pour rajouter un Pokemon</h1>
    <form method="POST" action="{{route('pokemon.store')}}">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <br>

        <label for="type">Type</label>
        <input type="text" name="type">

        <br>

        <label for="niveau">Niveau</label>
        <input type="text" name="niveau">

        <br>

        <button type="submit" class="btn btn-outline-success">Ajouter</button>
</form>
