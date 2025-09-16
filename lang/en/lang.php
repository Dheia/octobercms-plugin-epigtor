<?php

return [
    'plugin' => [
        'name' => 'Epigtor',
        'description' => 'In-context content editor',
    ],
    'component_epigtor' => [
        'name' => 'Epigtor Component',
        'description' => 'This component allows in-context editing.',
        'property_message' => [
            'title' => 'Message',
            'description' => 'Translation string to show or edit',
        ],
    ],
    'settings' => [
        'name' => 'Editor advanced settings',
        'description' => 'Customize global editor advanced options',
        'froala_custom_defaults' => 'Custom defaults',
        'froala_custom_defaults_comment' => 'Custom default options for Froala editor',
        'events_type_to_launch' => 'Events type to launch',
        'events_type_to_launch_comment' => 'Compatibility setting while migrating from pages.menuitem.* to cms.pageLookup.* events. Change this to "cms.pageLookup.*" if all your plugins are listening to <a target="_blank" href="https://docs.octobercms.com/3.x/element/form/widget-pagefinder.html#creating-new-page-types">cms events</a>',
        'events_type_to_launch_pages' => 'pages.menuitem.*',
        'events_type_to_launch_cms' => 'cms.pageLookup.*',
    ],
    'image' => [
        'create' => 'New image',
        'delete' => 'Delete',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'replace' => 'Replace',
        'upload' => 'Upload',
        'delete_confirm' => 'Are you sure?',
        'title' => 'Image title',
    ],
    'link' => [
        'create' => 'New link',
        'delete' => 'Delete',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'delete_confirm' => 'Are you sure?',
        'text' => 'Link text',
        'type' => 'Link type',
        'url' => 'External URL',
        'reference' => 'Link to...',
        'is_new_tab' => 'Open in a new tab',
    ],
];