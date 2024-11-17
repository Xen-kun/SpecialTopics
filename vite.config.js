import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/main.scss', 'resources/css/app.css', 'resources/js/app.js'], // Entry files
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist', // The folder where the production files will be generated
    },
});
