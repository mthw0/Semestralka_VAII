@extends('layouts.app')
@section('content')
    <script src="{{ URL::asset('js/linux_obrazok.js') }}"></script>
<div class="content">
    <h1>Windows 10</h1>
    <p>
        <strong>Windows</strong>
        10 je operačný systém spoločnosti Microsoft, určený pre použitie v stolových počítačoch, notebookoch, tabletoch, smartfónoch, hracích konzolách Xbox a ďalších zariadeniach. Prvá finálna verzia bola vydaná 29. júla 2015, odkedy ju bolo možné počas jedného roku inštalovať zadarmo. <strong>Windows</strong> 10 zjednocuje ovládanie zariadení rôznych typov (aj s dotykovým ovládaním) aj tým, že spája užívateľské prostredia spojením Modern UI a <strong>Windows</strong> Aero a zároveň pridáva nové funkcie ako napríklad virtuálne plochy. Ďalším zámerom Microsoftu bolo zjednotiť obchody <strong>Windows</strong> Store a <strong>Windows</strong> Phone store.
    </p>

    <table>
        <tr>
            <th>
                <div class="vyhody h2">Výhody</div>
            </th>
            <th>
                <div class="nevyhody h2">Nevýhody</div>
            </th>
        </tr>
        <tr>
            <td>Dobrá Podpora softvéru</td>
            <td>Nemá otvorený zdrojový kód</td>
        </tr>

        <tr>
            <td>Hardvérová kompatibilita</td>
            <td>Nie je zadarmo</td>

        </tr>
        <tr>
            <td>Stabilita</td>
            <td>Málo prispôsobovania</td>
        </tr>

    </table>

    <figure>
        <img id="obrazok" title="Kliknutim na obrazok prejdete do rezimu celej obrazovky." onclick="launchIntoFullscreen(document.documentElement)" src="https://upload.wikimedia.org/wikipedia/commons/7/7f/Windows10abstract.png" alt="Windows 10 image">
        <figcaption>Obrazok zobrazuje vzhľad OS Windows.</figcaption>
    </figure>

</div>
@endsection
