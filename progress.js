// Register the following element definition with the builder
Builder.types.progress = {

	// Label in the interface
	title: 'Progress',

	// Icon in `New element` dialog
	icon: '{+$theme}_child/builder/progress/icon.svg',

	// Icon in builder overview
	iconSmall: '{+$theme}_child/builder/progress/icon-small.svg',

	// Show in `New element` dialog
	element: true,

	// Includes required functionality from the Builder
	mixins: [Builder.entity, Builder.element, Builder.container],

	// A function that returns a JS object which is then used to render the interface
	// Params are the currently stored parameters for this element
	params: function(params) {

		// Just for easier access later on
		var element = params.element;

		return {

			width: 600,

			// Multiple tabs to group input fields
			tabs: [

				// The 1st tab usually contains all fields to fill in the actual content
				{
					'title': 'Content',
					'fields': {

						// <field_name>: <field_definition>
						field_content: {
							label: 'Content',
							description: 'Content that will be displayed above the progress bar',
							type: 'editor',
							attrs: {
								rows: 10,
								placeholder: 'Enter text...'
							}
						}

					}
				},

				// The 2nd tab usually includes fields with settings HOW to display the content
				{
					title: 'Settings',
					fields: {

						field_value: {
							label: 'Value',
							description: 'Set the initial value of the progress bar',
							type: 'number'
						},

						field_max: {
							label: 'Max',
							description: 'Set the maximum value of the progress bar',
							type: 'number'
						},

						field_stop: {
							label: 'Stop',
							description: 'Set the value where the animation should stop',
							type: 'number'
						},

						field_animation_step: {
							label: 'Animation Step Size',
							description: 'Set the size of an animation step',
							type: 'number'
						},

						field_animation_speed: {
							label: 'Animation Speed',
							description: 'Set the animation speed in ms',
							type: 'number'
						}

					}
				},

				// The 3rd tab usually contains the same fields that are rendered on the element container
				{
					title: 'Advanced',
					fields: {

						// Using fields predefined in `yootheme/vendor/yootheme/theme/modules/builder/app/elements/params.js`
						name: element.name,
						id: element.id,
						class: element.cls,
						css: {
							label: "CSS",
							description: "Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>",
							type: "editor",
							editor: "code",
							mode: "css",
							attrs: {
								debounce: 500
							}
						}

					}
				}
			]
		}
	},

	// Set default values for fields
	data: function() {
		return {
			// <field_name>: <default_value>
			props: {
				field_content: 'Lorem ipsum dolor sit amet',
				field_value: 0,
				field_max: 100,
				field_stop: 70,
				field_animation_step: 1,
				field_animation_speed: 10
			}
		};
	}

};