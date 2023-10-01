import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { WorkIcon } from '../icons';

registerBlockVariation(
	'core/post-terms',
	{
		name: 'person-positions',
		title: __("Positions"),
		description: __("List the positions of a person"),
		icon: WorkIcon,
		isActive: ['term'],
		attributes: {
			term: 'position',
		},
		scope: ['inserter', 'block', 'transform'],
	},
);
