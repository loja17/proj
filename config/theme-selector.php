<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/custom.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "custom"       => [
            "title"      => "Custom theme for Art Ist",
            "class"      => "custom",
            "stylesheets" => [
                "css/custom.min.css"
            ]
        ],
    ]
];
