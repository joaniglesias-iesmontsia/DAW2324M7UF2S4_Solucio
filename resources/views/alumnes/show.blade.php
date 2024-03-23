<x-layout>
    <h1>Veure alumne</h1>
    <p>
        <a href="{{ route('alumnes.index') }}">Tornar al llistat</a>
    </p>
    <p>DNI/NIE: {{$alumne->dni_nie}}</p>
    <p>Nom complet: {{$alumne->nom_complet}}</p>
    <p>Data naixement: {{$alumne->data_naixement}}</p>
</x-layout>
