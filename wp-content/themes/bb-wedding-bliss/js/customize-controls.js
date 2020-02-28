( function( api ) {

	// Extends our custom "bb-wedding-bliss" section.
	api.sectionConstructor['bb-wedding-bliss'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );