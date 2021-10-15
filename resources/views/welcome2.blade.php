@extends('layouts.layout')

@section('vendorCss')
@stop

@section('pageCss')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/welcome2.css')}}">
@stop

@section('content')
@if(Session::has('message'))
<input id="message" type="hidden" value="{{ Session::get('message') }}" />
@endif
<div class="container">
    <div class="row section">
        <div class="col-4">
            <div class="section-title">
                <p>ORTSMARKETING</p>
                <p>Neuhausen am Rheinfall</p>
            </div>
            <div class="section-description">
                <p>Ucietur rem repta con cusdae quam exeri ullecestrum, consequi dolum int resequi aut quo doluptas sin consectem dia nonsequi odicati onsequos auda sam, esectem eos et officiur, que et odia non et ex</p>
            </div>
        </div>
        <div class="col-8">
            <image src="images/rheinfall_2 Kopie.png" width = "100%">
        </div>
    </div>
    <div class="row">
        <button class="join-button">Jetzt Mitglied werden</button>
    </div>
    <div class="row section">
        <div class="col-6">
            <image src="images/gemeindehaus_3.png" width = "100%">
        </div>
        <div class="col-6">
        </div>
    </div>
    <div class="row">

    </div>
</div>
@stop

@section('vendorScripts')
@stop

@section('pageScripts')
@stop


