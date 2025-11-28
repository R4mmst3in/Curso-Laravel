<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;

    public function __construct($type = 'info')
    {
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

      this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}