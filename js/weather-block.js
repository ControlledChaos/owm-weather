const { __ } = wp.i18n // Importer la fonction __() d'internationalisation des chaines
const { registerBlockType } = wp.blocks // Importe la fonction registerBlockType() de la librairie globale wp.blocks

// Fonction WordPress pour déclarer un bloc
registerBlockType(
	'gutenberg-owmweather/owmweather', // Nom du bloc sous forme de slug avec son préfixe (wp est bien sûr réservé)
	{
		title: __( "Weather"), // Titre du bloc lisible par un humain
		description: __("OWM Weather widget"), // Description qui apparait dans l'inspecteur
        icon: 'cloud', // Dashicon sans le préfixe 'dashicons-' → https://developer.wordpress.org/resource/dashicons/
		category: 'layout widgets', // Catégorie (common, formatting, layout widgets, embed)
		keywords: [ // Mots clés pour améliorer la recherche de blocs
			__( 'weather' ),
			__( 'owm weather' ),
			__( 'forecast' ),
		],

		// La partie affichée dans l'administration de WordPress
		edit: props => {
			return (
				<div>
					<p>Salut ! Je suis le backend</p>
				</div>
			)
		},

		// La partie enregistrée en base et affichée en front
		save: props => {
			return (
				<div>
					<p>Salut, je suis le frontend</p>
				</div>
			)
		},
	}
)
