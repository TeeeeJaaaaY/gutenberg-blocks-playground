wp.blocks.registerBlockType('tj/colouredbox', {
    title: 'Teej Coloured Box',
    icon: 'layout',
    category: 'common',
    edit: function() {
        return wp.element.createElement(
            'div',
            {style: {color: 'red'}},
            'Hello, World'
        );
    },
    save: function() {

    }
});