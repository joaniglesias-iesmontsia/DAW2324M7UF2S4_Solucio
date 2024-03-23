<x-layout>
    <h1>Editar alumne</h1>
    <p>
        <a href="{{ route('alumnes.index') }}">Tornar al llistat</a>
    </p>
    <form action="{{ route('alumnes.update', $alumne->id) }}" method="post">
        @csrf
        @method('PUT')
        <p>
            <label for="dni_nie">DNI/NIE:</label>
            <input type="text" id="dni_nie" name="dni_nie" value="{{$alumne->dni_nie}}">
            @if ($errors->has('dni_nie'))
                <span>Error: {{ $errors->first('dni_nie') }}</span>
            @endif
        </p>
        <p>
            <label for="nom_complet">Nom complet:</label>
            <input type="text" id="nom_complet" name="nom_complet" value="{{$alumne->nom_complet}}">
            @if ($errors->has('nom_complet'))
                <span>Error: {{ $errors->first('nom_complet') }}</span>
            @endif
        </p>
        <p>
            <label for="data_naixement">Data naixement:</label>
            <input type="date" id="data_naixement" name="data_naixement" value="{{$alumne->data_naixement}}">
        </p>
        <input type="submit" value="Desar">
    </form>
</x-layout>
