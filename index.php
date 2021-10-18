<?php
/*
  Plugin Name: show_social_network
  Description: liste de reseaux sociaux
  Author: Ophelie
  Version: 1.0.0
 */


function putList() {

  return "<li><a href='https://facebook.com'>Facebook</a></li>
        <li><a href='https://instagram.com'>Instagram</a></li>
        <li><a href='https://www.linkedin.com'>Linkedin</a></li>
        <li><a href='https://github.com/honoagency'>GitHub</a></li>";
}

    add_shortcode('show_social_network', 'putList');
