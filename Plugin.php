<?php namespace Utopigs\Epigtor;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.Translate'];

    public function pluginDetails()
    {
        return [
            'name' => 'utopigs.epigtor::lang.plugin.name',
            'description' => 'utopigs.epigtor::lang.plugin.description',
            'author' => 'Utopig Studio',
            'icon' => 'icon-circle'
        ];
    }

    public function registerComponents()
    {
        return [
            'Utopigs\Epigtor\Components\Epigtor' => 'editme',
        ];
    }

    public function register()
    {
        //
    }

    public function boot()
    {
        //
    }

}
