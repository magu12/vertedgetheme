<?php

function empire_shortcode_icon($attr) {
    return get_theme_svg($attr['name']);
}
add_shortcode('icon', 'empire_shortcode_icon');

function empire_shortcode_year() {
    return date('Y');
}
add_shortcode('year', 'empire_shortcode_year');