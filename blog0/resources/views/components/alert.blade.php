@props(['type' => 'info'])

@php
  switch ($type) {
    case 'info':
      $class='text-blue-800 bg-blue-dark';
    break;
    case 'danger':
      $class='text-red-800 bg-red-dark';
    break;
    case 'success':
      $class='text-yellow-800 bg-yellow-dark';
    break;
    case 'warning':
      $class='text-green-800 bg-green-dark';
    break;
    case 'dark':
      $class='text-gray-800 bg-gray-dark';
    break;
    default:
      $class='text-cyan-800 bg-cyan-dark';
    break;
  }
@endphp

<div {{$attributes->merge(['class' => 'p-4 text-sm ' . $class]) }} role="alert">
  <span class="font-medium">{{ $title ?? 'Info Alert'}}</span> {{ $slot }}
</div>