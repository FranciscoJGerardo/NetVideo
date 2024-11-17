import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Archivo CSS principal de Laravel
                'resources/css/login.css', // Tu archivo CSS personalizado
                'resources/js/app.js', // Archivo JS principal
            ],
            refresh: true,
        }),
    ],
});
