module.exports = function(grunt) {

    /**
     * Project configuration.
     */
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json')
    });

    /**
     * Register tasks
     */
    grunt.loadNpmTasks('grunt-npm-install');

    /**
     * Grunt update task
     */
    grunt.registerTask('update', ['npm-install']);
    grunt.registerTask('default', ['update']);

};