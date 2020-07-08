wp.blocks.registerBlockType('tj/colouredbox', {
    title: 'Teej Coloured Box',
    icon: 'layout',
    category: 'common',
    attributes: {
        content: {type: 'string'}
    },
    edit: function(props) {

        return wp.element.createElement(
            'div',
            {style: {color: 'red'}},
            wp.element.createElement('input', {
                type: 'text',
                value: props.attributes.content,
                onChange: changeContent
            })
        );

    },
    save: function() {
        return wp.element.saveElement()
    }
});