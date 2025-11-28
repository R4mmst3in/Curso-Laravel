@extends('layouts.app')

{{--
@push('css')
<style>
  body { background-color: #b4b4b4;}
</style>
@endpush
--}}
@section('title', 'Laravel')

@section('content')
  <div class="max-w-7xl mx-auto px-4">
    <h1>
      <?php
        echo 'BLOG DE LAVAREL';
      ?>
    </h1>
    <x-alert2 type="warning" class="mb-4">
      <x-slot name="title">
        ALERTA !!!
      </x-slot>
      Contenido de la alerta
    </x-alert2>
  </div>
@endsection
