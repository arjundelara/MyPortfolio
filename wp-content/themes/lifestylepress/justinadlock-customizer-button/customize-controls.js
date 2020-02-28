( function( api ) {

	// Extends our custom "lifestylepress" section.
	api.sectionConstructor['lifestylepress'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
