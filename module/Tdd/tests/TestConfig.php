<?php

return array(
    'modules' => array(
        "Tdd"
    ),

    'module_listener_options' => array(
        'config_glob_paths' => array('../../../config/autoload/{,*.}{global,local}.php'),
        'module_paths' => array('depends', 'module', 'website', 'vendor'),
    ),
);
