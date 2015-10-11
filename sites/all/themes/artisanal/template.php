<?php

/**
 * @file
 * template.php
 */


/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function artisanal_menu_tree__primary(&$variables) {
  return '<ul class="menu nav navbar-nav primary-nav">' . $variables['tree'] . '</ul>';
}