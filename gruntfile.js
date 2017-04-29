module.exports = function(grunt) {

	// Configure

	grunt.initConfig({
		// pass in options to pluginsm references to files etc...
		concat:{
			js:{
				src:[
					'js/chat.js',
					'js/jquery.js',
					'js/bootstrap.min.js',
					'js/angular.min.js',
					'js/app.js',  // Boostrap Script.min General,
					'js/scrolling-nav.js', // Scrolling Nav Default Script,

					// Facts Section Number Counter Scripts/All
					'js/waypoints.min.js',
					'js/jquery.counterup.min.js',
					'js/number-c.js', //Time to count,
					// --------------------------------------// 

					//	Slick.
					'js/slick.js',
					'js/slick_edition.js',
					// -------------------// 
					
					// Animation.css Scripts after scroll
					'js/wow.min.js',
					'js/animate.js',
					// --------------------------------// 

					// Professional Parallax editing
					'js/parallax-background.js',
					
					'js/smoothscroll.js', // Smooth Scroll Script + time to Scroll,					
					'js/check_box.js',
					'js/active_property.js',
					'js/pointer_navigatior.js',
					'js/notify.js',
					 //Pointer Navigation Middle

					// CRM Script
					// 'js/crm_script.js',
					],

				dest: 'build/scripts.js'
			},
			css: {
				src:['css/**/*.css'],
				dest: 'build/styles.css'
			}
		},
		watch: {
		  scripts: {
		    files: ['css/**/*.css'],
		    tasks: ['concat'],
		    options: {
		      spawn: false,
		    },
		  },
		},

	});


	//  Load Plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register tasks

	grunt.registerTask('default', ['watch']);
	// grunt.registerTask('concat-css', ['concat:css']);


};