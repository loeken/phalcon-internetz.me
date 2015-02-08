module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        bowercopy: {
            options: {
                srcPrefix: 'bower_components',
                destPrefix: 'bower_cache'
            },
            scripts: {
                files: {
                    'js/jquery.js': 'jquery/dist/jquery.js',
                    'js/bootstrap.js': 'bootstrap/dist/js/bootstrap.js'
                }

            },
            stylesheets: {
                files: {
                    'css/bootstrap.css': 'bootstrap/dist/css/bootstrap.css',
                    'css/font-awesome.css': 'font-awesome/css/font-awesome.css',
                    'css/custom.css': '../../../web/css/custom.css'
                }
            },
            fonts: {
                files: {
                    '../../../web/assets/fonts': 'font-awesome/fonts/'
                }
            }
        },
        cssmin : {

            bundled:{
                src: '../../web/assets/css/bundled.css',
                dest: '../../web/assets/css/bundled.min.css'
            }
        },
        uglify : {

            js: {
                files: {
                    '../../web/assets/js/bundled.min.js': [
                        '../../web/assets/js/bundled.js'
                    ]
                }
            }
        },
        concat: {
            css: {
                src: [
                    'bower_cache/css/bootstrap.css',
                    'bower_cache/css/font-awesome.css',
                    'bower_cache/css/custom.css'
                ],
                dest: '../../web/assets/css/bundled.css'
            },
            js : {
                options: {
                    stripBanners: true
                },
                src : [
                    'bower_cache/js/jquery.js',
                    'bower_cache/js/bootstrap.js',
                    'bower_cache/js/custom.js',
                ],
                dest: '../../web/assets/js/bundled.js'

            }
        }
    });
    grunt.loadNpmTasks('grunt-bowercopy');
    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['bowercopy', 'concat', 'cssmin', 'uglify']);
};