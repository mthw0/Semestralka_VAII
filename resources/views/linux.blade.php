@extends('layouts.app')
@section('content')


    <div class="content">
        <h1>Linux</h1>
        <p>
            <strong>Linux</strong> je počítačový operačný systém a jeho jadro. Patrí medzi najznámejšie a najúspešnejšie
            príklady slobodného softvéru a vývojového modelu open source.
        </p>
        <p>
            Termín <strong>linux</strong> sa vzťahuje na jadro <strong>linux</strong>u, ale v bežnej reči sa používa na
            opis celej rodiny operačných systémov UNIXového typu, ktoré sú založené na <strong>linux</strong>ovom jadre,
            zatiaľ čo knižnice a nástroje pochádzajú zvyčajne z projektu GNU (takéto zoskupenie sa označuje ako
            GNU/<strong>linux</strong>). <strong>Linux</strong>ové distribúcie často zoskupujú základný systém s veľkým
            množstvom programov spravovaných systémom „balíčkov“.
        </p>
        <p>
            Hoci bol spočiatku používaný a vyvíjaný nadšenými jednotlivcami, v súčasnosti jeho vývoj prebieha pod
            záštitou <strong>linux</strong> Foundation v úzkej spolupráci s viac ako 1200 spoločnosťami, medzi nimi sú
            napr. Fujitsu, HP, Samsung, IBM, Intel, Oracle, CISCO, NEC, Red Hat, Microsoft či Google.
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
                <td>Otvorený zdrojový kód</td>
                <td>Nepodporuje softvér z Windows-u</td>
            </tr>

            <tr>
                <td>Maximálna prispôsobovateľnosť</td>
                <td>Nemusí podporovať niektorý hardvér</td>

            </tr>
            <tr>
                <td>Bezpečnosť</td>
                <td>Softvér môže byť zastaralý</td>
            </tr>

        </table>
        <div id="Hodiny" onload="zobrazCas()"></div>
    </div>
@endsection
