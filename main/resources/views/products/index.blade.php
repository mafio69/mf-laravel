<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produkty') }}
        </h2>
    </x-slot>

    <table>
        <thead>
        <tr>
            <th>Nazwa Produktu</th>
            <th>Producent</th>
            <th>Aktualne</th>
            <th>Jednostka Ceny</th>
            <th>Waga</th>
            <th>Średnica</th>
            <th>Długość</th>
            <th>Szerokość</th>
            <th>Wysokość</th>
            <th>Grubość</th>
            <th>Typ Pakowania</th>
            <th>Jednostki Zakupu</th>
            <th>Jednostki Magazynowe</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr style="color: #9ca3af">
            <td>{{ $product->nazwa_produktu }}</td>
            <td>{{ $product->producent }}</td>
            <td>{{ $product->actual }}</td>
            <td>{{ $product->jednostka_ceny }}</td>
            <td>{{ $product->waga }}</td>
            <td>{{ $product->srednica }}</td>
            <td>{{ $product->dlugosc }}</td>
            <td>{{ $product->szerokosc }}</td>
            <td>{{ $product->wysokosc }}</td>
            <td>{{ $product->grubosc }}</td>
            <td>{{ $product->typ_pakowania }}</td>
            <td style="text-align: right;">{{ $product->jednostki_zakupu }}</td>
            <td >{{ $product->jednostki_magazynowe }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
