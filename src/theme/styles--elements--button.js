module.exports = {
	"css": "transition: 200ms all ease-in-out;",
	border: {
		radius: '0px',
	},
	spacing: {
		padding: {
			top: '0.75em',
			right: '1.5rem',
			bottom: '0.75em',
			left: '1.5rem',
		},
	},
	color: {
		background: 'var(--wp--preset--color--button-bg)',
		text: 'var(--wp--preset--color--white)',
	},
	typography: {
		fontSize: 'var(--wp--preset--font-size--small)',
		fontStyle: 'normal',
		fontWeight: '300',
		textTransform: 'uppercase',
		letterSpacing: '0.85px',
		fontFamily: 'var:preset|font-family|body',
	},
	':hover': {
		shadow: '0px 0px 10px 2px var(--wp--preset--color--button-shadow)',
		border: {
			color: 'var(--wp--preset--color--button-shadow)',
			width: '0px',
			style: 'solid',
		},
		color: {
			background: 'var(--wp--preset--color--button-hover)',
			text: 'var(--wp--preset--color--white)',
		},
	},
};
