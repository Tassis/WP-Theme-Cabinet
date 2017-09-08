module.exports = function(grunt){

  var outputStyle = 'expanded';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist:{
        files:{
          '../main.css': '../main.scss',
        },
        options:{
          style: outputStyle,
        },
      }
    },
    watch: {
      css: {
        files:['../base/*.scss'],
        tasks: ['sass'],
        options: {
          spawn: false
        },
      },
    },

  });
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['sass']);

};
