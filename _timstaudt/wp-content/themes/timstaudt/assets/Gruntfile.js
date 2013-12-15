'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

        // style (Sass) compilation via Compass
        compass: {
            dist: {
                options: {
                    sassDir: 'source',
                    cssDir: 'build',
                    imagesDir: 'images',
                    images: 'images',
                    javascriptsDir: 'javascripts/build',
                    fontsDir: 'fonts',
                    environment: 'production',
                    outputStyle: 'expanded',
                    relativeAssets: true,
                    noLineComments: true,
                    force: true
                }
            }
        },

        // watch our project for changes
        watch: {
            compass: {
                files: [
                    'source/*',
                    'source/**/*'
                ],
                tasks: ['compass']
            }
        }
    
    });

    // load tasks
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // register task
    grunt.registerTask('default', [
        'compass',
        'watch'
    ]);

};