<?php namespace Utopigs\Epigtor\Models;

use File;
use Model;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class Settings extends Model
{
    const STORAGE_PATH = '/storage/app/media/utopigs_epigtor/';
    const BASE_FILENAME = 'froala-custom-defaults';

    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    // A unique code
    public $settingsCode = 'utopigs_epigtor_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
 
    public function initSettingsData()
    {
        $this->froala_custom_defaults = File::get(base_path().'/plugins/utopigs/epigtor/models/settings/froala-custom-defaults.js');
        $this->froala_custom_defaults_file = '';
        $this->events_type_to_launch = 'pages.menuitem';
    }

    public function beforeSave()
    {
        $froala_custom_defaults = $this->value['froala_custom_defaults'];

        $timestamp = Carbon::now()->format('YmdHis');
        $path = App::basePath() . self::STORAGE_PATH;

        if(!File::exists($path)) {
            File::makeDirectory($path);
        }

        File::cleanDirectory($path);

        $filename = self::BASE_FILENAME . '-' . $timestamp . '.js';
        $save = file_put_contents($path . $filename, $froala_custom_defaults);
        if($save === false){
            throw new \Exception('Failed to save file to: ' . $path . $filename);
        }

        $value = $this->value;
        $value['froala_custom_defaults_file'] = $filename;
        $this->value = $value;
    }

}