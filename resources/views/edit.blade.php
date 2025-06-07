@extends('navbar.model')
@section('content')
<body>
    <div class="wrapper">
        <div class="login_box"style="margin-top:2rem">
            <div class="login-header">
                <span>Gestion Hotel</span>
            </div>
            <form method="POST" action="{{route('update',$hotel->id)}}">
                @csrf
                <input type="hidden" name="action" value="">
                <input type="hidden" name="id" value="">
                <div class="name">Raison sociale</div>
                <div class="input_box">
                    <input type="text" name="raison" class="input-field" placeholder="Entrer Raison sociale" value="{{$hotel->raison}}" required>
                </div>

                <div class="urbain">
                    <p id="ub">Urbain</p>
                    <div class="urbain-reponse">
                        <input type="radio" name="urbain" value="oui" id="urbain_oui" {{  $hotel->urbain == 'oui' ? 'checked' : '' }}>
                        <label for="urbain_oui">OUI</label>
                        <input type="radio" name="urbain" value="non" id="urbain_non" {{ $hotel->urbain == 'non' ? 'checked' : '' }}>
                        <label for="urbain_non">NON</label>
                    </div>
                </div>

                <div class="ens">
                    <div class="nametel">Téléphone</div>
                    <div class="nameville">Ville</div>
                </div>
                <div class="input_boxp">
                    <input type="tel" name="tel" value="{{$hotel->tel}}" class="input-field" placeholder="Entrer le numéro" required>
                    <select name="villes" class="input-field">
                        <option disabled value="">villes</option>
                        <option value="Lomé" {{ $hotel->villes == 'Lomé' ? 'selected' : '' }}>Lomé</option>
                        <option value="Aneho" {{ $hotel->villes == 'Aneho' ? 'selected' : '' }}>Aneho</option>
                        <option value="Kara" {{ $hotel->villes == 'Kara' ? 'selected' : '' }}>Kara</option>
                        <option value="Sokodé" {{$hotel->villes == 'Sokodé' ? 'selected' : '' }}>Sokodé</option>
                    </select>
                </div>

                <div class="Standing">
                    <p>Standing</p>
                    <div class="Standing-choix">
                        <input type="radio" name="stand" value="ventille" id="ventille" {{ $hotel->stand == 'ventille' ? 'checked' : '' }}>
                        <label for="ventille">Ventillé</label>
                    
                        <input type="radio" name="stand" value="climatise" id="climatise" {{ $hotel->stand == 'climatise' ? 'checked' : '' }}>
                        <label for="climatise">Climatisé</label>
                    
                        <input type="radio" name="stand" value="tout" id="tout" {{ $hotel->stand == 'tout' ? 'checked' : '' }}>
                        <label for="tout">Tout</label>
                    </div>
                </div>

                <div class="input_boxp">
                    <input type="submit" name="submit" class="input-submit" value="Valider">
                    <input type="reset" name="reset" class="input-reset" value="Annuler">
                </div>
                <a href="{{route('list')}}"><input type="button" class="form-see" value="Voir les Enregistrements"></a>
            </form>
        </div>
    </div>
</body>

@endsection
