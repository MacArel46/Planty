/**
 * WordPress Dependencies
 */
import { isEmpty } from 'lodash';
import { __ } from '@wordpress/i18n';
import { useEffect } from '@wordpress/element';
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Custom Dependencies
 */
import Inspector from './inspector';
import classnames from 'classnames';
import generateFieldName from '../utils/generate-name';
import { TextControl } from '@wordpress/components';

export default function edit( props ) {
	const blockProps = useBlockProps( {
		className: classnames( {
			[ `cf7-block-acceptance-wrapper` ]: true,
		} ),
	} );

	const {
		id,
		checked,
		condition,
		name,
		autogeneratedName,
	} = props.attributes;

	useEffect( () => {
		// Generating a new field name, if needed.
		if (
			isEmpty( autogeneratedName ) ||
			! autogeneratedName.startsWith( 'acceptance' )
		) {
			const newAutogeneratedName = generateFieldName( 'acceptance' );
			props.setAttributes( { autogeneratedName: newAutogeneratedName } );
		}
	}, [] );

	return (
		<>
			<div { ...blockProps }>
				<div className={ `cf7blocks-acceptance` }>
					<div className="cf7blocks-acceptance-inner_wrapper">
						<input
							id={ id }
							type={ 'checkbox' }
							name={ isEmpty( name ) ? autogeneratedName : name }
							checked={ checked }
							value={ condition }
							onChange={ () =>
								props.setAttributes( { checked: ! checked } )
							}
						/>
						<TextControl
							value={ condition }
							placeholder={ __( 'Add Condition', 'cf7-blocks' ) }
							onChange={ ( newCondition ) =>
								props.setAttributes( {
									condition: newCondition,
								} )
							}
						/>
					</div>
				</div>
			</div>
			<Inspector { ...props } />
		</>
	);
}
