<?php 

function registrar_produto(){
    register_post_type('produto', array(
        'label' => 'Produto',
        'description' => 'produto',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'produto', 'with_front' => true),
        'query_var' => true,
        'supports' => array('custom-fields', 'author', 'title'),
        'publicly_queryable' => true
    ));
}

add_action('init', 'registrar_produto');

?>