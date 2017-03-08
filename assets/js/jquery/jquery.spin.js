/*

$("#el").spin(); 					// Produces default Spinner using the text color of #el.
$("#el").spin("small"); 			// Produces a 'small' Spinner using the text color of #el.
$("#el").spin("large", "white"); 	// Produces a 'large' Spinner in white (or any valid CSS color).
$("#el").spin({ ... }); 			// Produces a Spinner using your custom settings.
$("#el").spin(false); 				// Kills the spinner.

*/
(function($) {
	$.fn.spin = function(opts, color) {
		var presets = {
			// add any of the additional presets you want here.
			"small": { lines: 10, length: 7, width: 4, radius: 5, scale: 0.50 },
			"medium": { lines: 10, length: 7, width: 4, radius: 5, scale: 0.75 },
			"large": { lines: 10, length: 7, width: 4, radius: 5, scale: 1.25 }
		};
		if (Spinner) { // check if spinner exists
			return this.each(function() {
				var $this = $(this),
					data = $this.data();
				// if spinner exists, then stop if false is past
				if (data.spinner) {
					data.spinner.stop(); // stop spinner
					delete data.spinner; // remove the spinner object
				}
				if (opts !== false) { // check if options have been past in
					if (typeof opts === "string") {
						/* SET THE INDIVIDUAL ARGUMENTS HERE IF YOU WISH THEM TO BE SENT THROUGH SEPARATELY */
						
						if (opts in presets) {
							opts = presets[opts];
						} else {
							opts = {};
						}
						// define the color of the spinner
						if (color) {
							opts.color = color;
						}
					}
					data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
				}
			});
		} else {
			// if there is an error throw message
			throw "Spinner class not available.";
		}
	};
})(jQuery);