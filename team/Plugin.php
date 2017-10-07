<?php namespace Alexcorp\Team;

use Backend;
use System\Classes\PluginBase;

/**
 * Team Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Team',
            'description' => 'No description provided yet...',
            'author'      => 'Alexcorp',
            'icon'        => 'icon-users'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Alexcorp\Team\Components\Members' => 'Members',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'alexcorp.team.access_members' => [
                'tab' => 'Team',
                'label' => 'Allow manage team members'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'team' => [
                'label'       => 'Team',
                'url'         => Backend::url('alexcorp/team/members'),
                'icon'        => 'icon-users',
                'permissions' => ['alexcorp.team.*'],
                'order'       => 500,
                'sideMenu' => [
                    'members' => [
                        'label'       => 'Members',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('alexcorp/team/members'),
                        'permissions' => ['alexcorp.team.access_members']
                    ],

                ]
            ],
        ];
    }
}
