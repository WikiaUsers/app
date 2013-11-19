/**
 * JS version of Component.class.php - part of UI repo API for rendering components
 *
 * UIComponent handles rendering component
 *
 * @author Rafal Leszczynski <rafal@wikia-inc.com>
 *
 */

define( 'wikia.ui.component', [ 'wikia.mustache' ], function uicomponent( mustache ) {
	'use strict';

	/**
	 * Check if all required mustache variables are set
	 *
	 * @throw {Error} message with missing variables
	 */

	function validateComponent( componentConfig, componentType, componentVars ) {

		// Validate component type
		var supportedTypes = componentConfig.templates,
			variables,
			requiredVars,
			missingVars = [];


		if ( !supportedTypes.hasOwnProperty( componentType ) ) {
			throw new Error( 'Requested component type is not supported!' );
		}

		// Validate required mustache variables
		requiredVars = componentConfig.templateVarsConfig[ componentType ].required;
		missingVars= [];

		requiredVars.forEach(function( element ) {
			if ( !componentVars.hasOwnProperty( element ) ) {
				missingVars.push( element );
			}
		});

		if ( missingVars.length > 0 ) {
			variables = missingVars.join( ', ' );
			throw new Error( 'Missing required mustache variables: ' + variables + '!' );
		}
	}

	function UIComponent() {

		if ( !( this instanceof UIComponent ) ) {
			return new UIComponent();
		}

		var componentConfig = {},
			componentType,
			componentVars;

		/**
		 * Renders component
		 *
		 * @param {{}} params (example: { type: [template_name], vars: { [mustache_variables] } }
		 *
		 * @return {String} html markup for the component
		 */

		this.render = function( params ) {

			componentType = params.type;
			componentVars = params.vars;

			validateComponent( componentConfig, componentType, componentVars );

			return mustache.render( componentConfig.templates[ componentType ], componentVars );
		};

		/**
		 * Configures component
		 *
		 * @param {{}} templates object with mustache templates
		 * @param {{}} templateVarsConfig object with accepted template variables
		 */

		this.setComponentsConfig = function( config ) {
			componentConfig = config;
		};

		/**
		 * Creates new component object
		 *
		 * @param {String} id Element id
		 * @param {{}} params Component params
		 * @param {function} callback callback function function ( object ) {}
		 * @returns {undefined}
		 */
		this.create = function( id, params, callback ) {
			var that = this;
			if ( componentConfig.jsWrapperModule ) {
				require( [ componentConfig.jsWrapperModule ], function( object ) {
					callback( object.init( id, that, params ) );
				});
			} else {
				callback( that, params );
			}
		};

		/**
		 * Returns sub component by name
		 *
		 * @param {String} componentName
		 * @returns {*} Component
		 */
		this.getSubComponent = function( componentName ) {
			if ( typeof componentConfig.dependencies[ componentName ] !== 'undefined' ) {
				return componentConfig.dependencies[ componentName ];
			}
			throw new Error( 'Dependency ' + componentName + ' not found.' );
		};
	}

	return UIComponent;

});
