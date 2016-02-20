module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);
  // Project configuration.
  grunt.initConfig({
	 shell: {
	 	phpspec: {
			command:
                "bin/phpspec run"
			}
	 },
	 watch: {
		php: {
			files: ['spec/**/*.php',
					  'src/**/*.php'],
			tasks: ['shell:phpspec'],
			options: {
				spawn: true,
			},
		},
	 }
  });

  // Default task(s).
  grunt.registerTask('default', ['shell:phpspec']);

  };
