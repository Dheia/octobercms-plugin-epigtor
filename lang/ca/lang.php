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
    ],
    'image' => [
        'create' => 'Crear imatge',
        'delete' => 'Eliminar',
        'save' => 'Guardar',
        'cancel' => 'Cancel·lar',
        'replace' => 'Modificar',
        'upload' => 'Carregar',
        'delete_confirm' => 'Segur que vols eliminar aquesta imatge?',
        'title' => 'Títol de la imatge',
    ],
    'link' => [
        'create' => 'Crear enllaç',
        'delete' => 'Eliminar',
        'save' => 'Guardar',
        'cancel' => 'Cancel·lar',
        'delete_confirm' => 'Segur que vols eliminar aquest enllaç?',
        'text' => 'Text de l’enllaç',
        'type' => 'Tipus d’enllaç',
        'url' => 'URL externa',
        'reference' => 'Enllaçar a...',
        'is_new_tab' => 'Obrir en una pestanya nova',
    ],
];