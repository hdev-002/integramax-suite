<?php

namespace App\View\Components\components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Applications extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    // protected $applications = [
    //     [
    //         "label" => "Users",
    //         "icon"  => '<i class="fa-solid fa-users fs-2x text-hover-primary"></i>',
    //         "path"  => route('user-management.index'),
    //     ]
    // ];
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($this->applications,'ffkfk');
        return view('components.applications');
    }
}
