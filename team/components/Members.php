<?php namespace Alexcorp\Team\Components;

use Cms\Classes\ComponentBase;
use Alexcorp\Team\Models\Member as BaseMember;

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
        $this->page['members'] = BaseMember::isPublished()->get();
    }
}
