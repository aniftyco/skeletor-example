<?php

use NiftyCo\Skeletor\Skeletor;

return function (Skeletor $skeletor) {
    $frontend = $skeletor->select(
        label: 'What frontend library do you want to use?',
        options: [
            'vue' => 'Vue',
            'react' => 'React',
            'svelte' => 'Svelte',
        ],
        validate: fn($choice) => match ($choice) {
            empty ($choice) => 'Please select at least one frontend library.',
            'svelte' => 'Svelte is not supported yet.',
            default => null,
        },
    );

    $skeletor->info('Selected frontend: ' . $frontend);
};
