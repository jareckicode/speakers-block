import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { Spinner } from '@wordpress/components';

import './editor.scss';

export default function Edit() {
	const { eventSpeakers } = useSelect( ( select ) => {
		return {
			eventSpeakers: select( 'core' ).getEntityRecords(
				'postType',
				'speakers',
				{
					_embed: true,
				}
			),
		};
	} );

	if ( ! eventSpeakers ) {
		return (
			<div { ...useBlockProps() }>
				<Spinner />
			</div>
		);
	}
	return (
		<div { ...useBlockProps() }>
			{ eventSpeakers &&
				eventSpeakers.map( ( speaker ) => (
					<div className="wp-block-create-block-speakers-item">
						<div className="wp-block-create-block-speakers-item__image">
							<img
								src={
									speaker._embedded[ 'wp:featuredmedia' ][ 0 ]
										.source_url
								}
							/>
						</div>
						<div className="wp-block-create-block-speakers-item__content">
							<h2>{ speaker.title.rendered }</h2>
							<div
								dangerouslySetInnerHTML={ {
									__html: speaker.content.rendered,
								} }
							/>
						</div>
					</div>
				) ) }
		</div>
	);
}
