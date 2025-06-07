@extends('navbar.model')
@section('content')
<body>
    <div class="affichage"style="margin-top:5rem">
        <h2>liste</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Raison Sociale</th>
                        <th>urbain</th>
                        <th>Téléphone</th>
                        <th>Ville</th>
                        <th>Standing</th>
                        <th colspan=2>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $compt = 1;
                    @endphp
                    @foreach ($hotels as $hotel) 
                        <tr>
                            <td>{{ $compt++ }}</td>
                            <td>{{ $hotel->raison }}</td>
                            <td>{{ $hotel->urbain }}</td>
                            <td>{{ $hotel->tel }}</td>
                            <td>{{ $hotel->villes }}</td>
                            <td>{{ $hotel->stand }}</td> 
                            <td>
                                <a href="{{ route('edit', $hotel->id) }}"><img src="{{ asset('img/b_edit.png') }}"></a>
                            </td>
                            <td>
                                <form action="{{ route('delete', $hotel->id) }}" onsubmit="return confirm('VOULEZ-VOUS SUPPRIMER ?')" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><img src="{{ asset('img/b_drop.png') }}"></button>
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
@endsection
