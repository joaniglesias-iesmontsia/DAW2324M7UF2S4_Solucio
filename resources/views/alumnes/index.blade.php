<x-layout>
    <h1>Llistat d'alumnes</h1>
    <p>
        <a href="{{ route('alumnes.create')}}">Crear alumne</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>DNI_NIE</th>
                <th>NOM COMPLET</th>
                <th>DATA NAIXEMENT</th>
                <th>ACCIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnes as $alumne)
                <tr>
                    <td>{{ $alumne->dni_nie }}</td>
                    <td>{{ $alumne->nom_complet}}</td>
                    <td>{{ $alumne->data_naixement}}</td>
                    <td>
                        <a href="{{ route('alumnes.show', $alumne->id) }}">Veure</a>
                        <a href="{{ route('alumnes.edit', $alumne->id) }}">Editar</a>
                        <a href="{{ route('alumnes.delete', $alumne->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
