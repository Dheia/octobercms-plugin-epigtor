<?php

return [
    'plugin' => [
        'name' => 'Epigtor',
        'description' => 'Editor de contenido en contexto',
    ],
    'component_epigtor' => [
        'name' => 'Epigtor Component',
        'description' => 'Este componente permite la edición de contenido en contexto.',
        'property_message' => [
            'title' => 'Mensaje',
            'description' => 'Cadena de traducción para mostrar o editar',
        ],
    ],
    'settings' => [
        'name' => 'Configuración avanzada del editor',
        'description' => 'Personalizar las opciones avanzadas del editor',
        'froala_custom_defaults' => 'Opciones personalizadas por defecto',
        'froala_custom_defaults_comment' => 'Opciones personalizadas por defecto para Froala',
    ],
    'image' => [
        'create' => 'Nueva imagen',
        'delete' => 'Eliminar',
        'save' => 'Guardar',
        'cancel' => 'Cancelar',
        'replace' => 'Reemplazar',
        'upload' => 'Subir',
        'delete_confirm' => '¿Estás seguro?',
        'title' => 'Título de la imagen',
    ],
    'link' => [
        'create' => 'Nuevo enlace',
        'delete' => 'Eliminar',
        'save' => 'Guardar',
        'cancel' => 'Cancelar',
        'delete_confirm' => '¿Estás seguro?',
        'text' => 'Texto del enlace',
        'type' => 'Tipo de enlace',
        'url' => 'URL externa',
        'reference' => 'Enlazar a...',
        'is_new_tab' => 'Abrir en una nueva pestaña',
    ],
];