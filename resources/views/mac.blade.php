@extends('layouts.app')
@section('content')
    <link href="{{ URL::asset('css/css.css') }}" rel="stylesheet" type="text/css" >
<div class="content">
<h1>Mac OS</h1>
<p><strong>macOS</strong> je zatiaľ poslednou verziou <strong>Mac OS</strong>, operačného systému pre počítače Macintosh. Tento operačný systém bol prvýkrát komerčne sprístupnený v roku 2001. Pozostáva z dvoch hlavných častí – z Darwinu, slobodného operačného prostredia založeného na BSD, ktorý bol prispôsobený a ďalej vyvíjaný spoločnosťou Apple Computer s prispením nezávislých vývojárov; a vlastného grafického rozhrania známeho ako Aqua, vytvoreného spoločnosťou Apple. </p>

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
        <td>Optimalizácia softvéru</td>
        <td>Drahý</td>
    </tr>

    <tr>
        <td>Jednoduchosť</td>
        <td>Nepodporuje softvér z Windows-u</td>

    </tr>
    <tr>
        <td>Dizajn</td>
        <td>Iba na hardvéri od Applu</td>
    </tr>

</table>
</div>
@endsection
