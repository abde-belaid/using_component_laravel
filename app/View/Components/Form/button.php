<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */

    // public $intitule;
    // public $description;




    public function __construct(public $prix,public $intitule,public $description,public $source, public $cl)
    
    {
        $this->prix=$prix;
        $this->cl=$cl;
        $this->source=$source;
        $this->intitule=$intitule;
        $this->description=$description;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.button');
    }
}
