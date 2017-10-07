<?php namespace Alexcorp\Team\Components;

use Cms\Classes\ComponentBase;

class Members extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Members',
            'description' => 'Show flip card with member information'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('assets/css/team.css');
        $this->addJs('assets/js/team.js');

    }
}
