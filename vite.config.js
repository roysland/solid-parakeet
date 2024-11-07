import { defineConfig } from "vite";

export default defineConfig({
    root: './src/Client',
    build: {
        manifest: true,
        rollupOptions: {
            input: 'main.js',
        }
    }
})