import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { commentAuthorAvatar } from '@wordpress/icons';

registerBlockVariation(
	'core/query',
	{
		name: 'team-members',
		title: __("Team Members"),
		description: __("List all team members"),
		icon: commentAuthorAvatar,
		attributes: {
			namespace: 'team-members',
			query: {
				postType: 'team',
				perPage: 4,
				order: 'asc',
				orderBy: 'date',
			},
		},
		allowedControls: ['perPage', 'order', 'orderBy'],
		innerBlocks: [
			['core/post-template', {
				style: {
					spacing: {
						blockGap: 'var:preset|spacing|30',
					},
				},
				layout: {
					type: 'grid',
					columnCount: 4,
				},
			}, [
					['core/group', {}, [
						['core/post-featured-image'],
						['core/group', {
							style: {
								spacing: {
									blockGap: 0,
								},
							},
							layout: {
								type: 'flex',
								orientation: 'vertical',
								flexWrap: 'nowrap',
								justifyContent: 'center',
							},
						}, [
								['core/post-title', {
									style: {
										typography: {
											fontStyle: 'normal',
											fontWeight: '700',
										},
									},
									fontSize: 'small',
									fontFamily: 'body',
								}],
								['core/post-terms', {
									term: 'position',
								}]
							]],
					]],
				]],
		],
		isActive: ['namespace'],
	},
);
