// const { assertSupportedNodeVersion } = require('../src/Engine');
const mix = require('laravel-mix')
// module.exports = async () => {
//     // @ts-ignore
//     process.noDeprecation = true;

//     // assertSupportedNodeVersion();

//     const mix = require('../src/Mix').primary;

//     require(mix.paths.mix());

//     await mix.installDependencies();
//     await mix.init();

//     return mix.build();
// };

mix.sass('resources/css/app.scss', 'public/assets/clients/css/')
mix.js('resources/js/app.js', 'public/assets/clients/js/')
mix.sass('resources/css/home.scss', 'public/assets/clients/css/')
mix.js('resources/js/home.js', 'public/assets/clients/js/')
