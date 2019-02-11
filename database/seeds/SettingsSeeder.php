<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{

    private $settings = [
        'enable_audio_video_player:true',
        'enable_social_networking:true',
        'enable_freebox:false',
        'enable_categories:true',
        'enable_footer:true'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->settings as $setting) {
            $setting = explode(':', $setting);

            Setting::create([
                'key' => $setting[0],
                'value' => $setting[1],
            ]);
        }
    }
}
