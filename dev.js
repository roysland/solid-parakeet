import * as esbuild from 'esbuild'

let ctx = await esbuild.context({
    entryPoints: ['src/Client/main.js'],
    bundle: true,
    outfile: './public/main.js',
    treeShaking: true,
    minify: true,
})

await ctx.watch()
let { host, port } = await ctx.serve({
    servedir: 'public',
    port: 3073,
})