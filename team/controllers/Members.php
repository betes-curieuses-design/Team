<?php namespace Alexcorp\Team\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Members Back-end Controller
 */
class Members extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Alexcorp.Team', 'team', 'members');
    }
}
