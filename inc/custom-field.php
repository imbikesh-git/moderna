<?php
function wpl_owt_register_metabox() {
    //post
    add_meta_box("owt-post-id", "Post Metabox", "wporg_custom_box_html", "post", "normal", "high");
}

add_action("add_meta_boxes", "wpl_owt_register_metabox");


function wporg_custom_box_html($post)
{
    $fname = get_post_meta($post->ID, 'fname', true);
    ?>

    <label for="fname">Input your text</label>
    <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br><br>
    <?php
}

function wporg_save_postdata($post_id)
{
    if (array_key_exists('fname', $_POST)) {
        update_post_meta(
            $post_id,
            'fname',
            $_POST['fname']
        );
    }

}
add_action('save_post', 'wporg_save_postdata');