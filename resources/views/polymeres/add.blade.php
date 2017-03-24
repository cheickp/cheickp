@extends ('polymeres.polymeres')

@section('titre')
    Ajout polymère
@endsection

@section('contenu')
    <h1>Ajouter un polymère</h1>

    <form action="" method="post">
        <div class="col-lg-4">
            <fieldset>
                <legend>Informations générale</legend>
                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="number" class="form-control" name="code" id="code" placeholder="@12486Ns48">
                </div>

                <div class="form-group">
                    <label for="nomPolymère">Nom:</label>
                    <input type="text" class="form-control" name="nomPolymère" id="nomPolymère" placeholder="polymère">
                </div>

                <div class="form-group">
                    <label for="typeDePolylmere">Type/famille:</label>
                    <input type="text" class="form-control" id="typedepolylmere" placeholder="Synthétique ou naturelle">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" rows="5" class="form-control" placeholder="description"></textarea>
                 </div>
            </fieldset>
        </div>

        <div class="col-lg-6">
            <fieldset>
                <legend>Propriétés techniques</legend>
                <div class="form-group">
                    <label for="nbh">Nombre d'hydrogène:</label>
                    <input type="number" class="form-control" id="nbh">
                </div>

                <div class="form-group">
                    <label for="nbc">Nombre de carbone:</label>
                    <input type="number" class="form-control" id="nbc">
                </div>

                <div class="form-group">
                    <label for="structure">structure:</label>
                    <select class="form-control" name="structure" id="structure">
                        <option value="Linéaires">Linéaire</option>
                        <option value="Ramifiés">Ramifiés</option>
                        <option value="Réticulés">Réticulés</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="masseVolumique">Masse volumique:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1">g/mol</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="masseMoléculaire">Masse moléculaire:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1">g/mol</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="propThermique">Propriétés thermiques:</label>
                    <input type="text" class="form-control" name="propThermique" id="propThermique">
                </div>
            </fieldset>

            <div class="form-group">
                <span><button class="btn-group" type="submit">Valider</button></span>
            </div>
        </div>


    </form>
@endsection