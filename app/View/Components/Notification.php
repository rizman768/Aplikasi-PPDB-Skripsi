<?php

namespace App\View\Components;
use Illuminate\View\Component;
use Auth;
use App\Models\Notif;

class Notification extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $jumlah = 0;
            if (Auth::user()->notif !== NULL) {
                $jumlah = Notif::where('user_id', Auth::user()->id)->where('persyaratan', 1)->count();
            }
        return view('components.notification', ['jumlah'=>$jumlah]);
    }
}
