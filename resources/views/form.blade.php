
@extends('navbar.model')
@section('content')

        <div class="wrapper mt-5" >
            <div class="login_box"style="margin-top:2rem">
                <div class="login-header">
                    <span>Gestion Hotel</span>
                </div>
                 <form method="POST" action="{{route('store')}}">
                    @csrf

                    <div class="name">Raison sociale</div>
                    <div class="input_box">
                        <input type="text" name="raison" class="input-field" placeholder="Entrer Raison sociale" value="" required>
                    </div>

                    <div class="urbain">
                        <p id="ub">Urbain</p>
                        <div class="urbain-reponse">
                            <input type="radio" name="urbain" value="oui" id="urbain_oui" required>
                            <label for="urbain_oui">OUI</label>
                            <input type="radio" name="urbain" value="non"  id="urbain_non">
                            <label for="urbain_non">NON</label>
                        </div>
                    </div>

                    <div class="ens">
                        <div class="nametel">Téléphone</div>
                        <div class="nameville">Ville</div>
                    </div>
                    <div class="input_boxp">
                        <input type="tel" name="tel" value="" class="input-field" placeholder="Entrer le numéro" required>
                        <select name="villes" class="input-field" required>
                            <option disabled selected value="">villes</option>
                            <option value="Lomé" >Lomé</option>
                            <option value="Aneho" >Aneho</option>
                            <option value="Kara" >Kara</option>
                            <option value="Sokodé">Sokodé</option>
                        </select>
                    </div>

                    <div class="Standing">
                        <p>Standing</p>
                        <div class="Standing-choix">
                            <input type="radio" name="stand" value="ventille"  id="ventille" required>
                            <label for="ventille">Ventillé</label>
                            <input type="radio" name="stand" value="climatise" id="climatise">
                            <label for="climatise">Climatisé</label>
                            <input type="radio" name="stand" value="tout"  id="tout">
                            <label for="tout">Tout</label>
                        </div>
                    </div>

                    <div class="input_boxp">
                        <input type="submit" name="submit" class="input-submit" value="Valider">
                        <input type="reset" name="reset" class="input-reset" value="Annuler">
                    </div>

                </form>
            </div>
        </div>
        
@endsection

