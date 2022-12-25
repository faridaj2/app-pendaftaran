import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import liveReload from 'vite-plugin-live-reload'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'src/app.css',
                'src/app.js',
                liveReload('./resources/views/**/*.blade.php'),
            ],
            refresh: true,
        }),
    ],
});
