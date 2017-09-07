module.exports = function(grunt){

  var outputStyle = 'expanded';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dict:{
        options:{
          style: outputStyle,
        },
        files:{
          '../main.css': '../main.scss',
        },
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default', ['sass']);

};
