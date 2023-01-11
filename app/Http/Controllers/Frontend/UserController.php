<?php

namespace App\Http\Controllers\Frontend;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Http\Controllers\Controller;
/**
 * Description of UserController
 *
 * @author I00396.ARIF
 */
use Illuminate\Http\Request;
use App\Helpers\MyHelper;

class UserController extends Controller {

    //put your code here
    public function index(Request $request) {
        $title_for_layout = config('app.default_variables.title_for_layout');
        $sections = [
            [
                'id' => 0,
                'path' => 'top',
                'title' => 'Home',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.top'
            ],
            [
                'id' => 1,
                'path' => 'about',
                'title' => 'About',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.about'
            ],
            [
                'id' => 2,
                'path' => 'services',
                'title' => 'Services',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.services'
            ],
            [
                'id' => 3,
                'path' => 'portfolio',
                'title' => 'Projects',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.portfolio'
            ],
            [
                'id' => 4,
                'path' => 'blog',
                'title' => 'Blog',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.blog'
            ],
            [
                'id' => 5,
                'path' => 'contact',
                'title' => 'Contact',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.contact'
            ],
            [
                'id' => 6,
                'path' => 'free_quote',
                'title' => 'Free Quote',
                'content_path' => 'Public_html.Widgets.Digimedia.Content.free_quote'
            ]
        ];
        $social_media = [
            [
                'title' => 'facebook',
                'account_name' => 'https://www.facebook.com/ArifOnTalk',
            ],
            [
                'title' => 'linkedin',
                'account_name' => 'https://www.linkedin.com/in/arif-firman-syah-63135961',
            ],
            [
                'title' => 'twitter',
                'account_name' => '@ArifOnTalk',
            ],
            [
                'title' => 'instagram',
                'account_name' => 'arif_firman_syah',
            ]
        ];
        $my_contact_detail = [
            [
                'id' => 0,
                'title' => 'Mobile',
                'value' => '+6285161381778',
                'link' => 'call:+6285161381778',
                'img' => config('app.base_assets_uri') . '/templates/digimedia/assets/images/phone-icon.png'
            ],
            [
                'id' => 1,
                'title' => 'Email',
                'value' => 'ariffirmansyah.begin@gmail.com',
                'link' => 'mailto:ariffirmansyah.begin@gmail.com',
                'img' => config('app.base_assets_uri') . '/templates/digimedia/assets/images/email-icon.png'
            ],
            [
                'id' => 2,
                'title' => 'Address',
                'value' => 'Kedung Waringin Bojong Gede, Kabupaten Bogor',
                'link' => 'https://www.google.com/maps/place/Kedung+Waringin,+Kec.+Bojong+Gede,+Kabupaten+Bogor,+Jawa+Barat/@-6.4970016,106.7861963,15z/data=!3m1!4b1!4m5!3m4!1s0x2e69c237d1f8c69b:0x74258f009f046e16!8m2!3d-6.4974742!4d106.791291',
                'img' => config('app.base_assets_uri') . '/templates/digimedia/assets/images/location-icon.png'
            ]
        ];
        return view('Public_html.Layouts.Digimedia.home', compact('title_for_layout', 'sections', 'social_media', 'my_contact_detail'));
    }

}
