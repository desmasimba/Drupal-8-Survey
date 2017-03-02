<?php

/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function my_theme_form_system_theme_settings_alter(&$form, &$form_state) {
  // add appropriate validate & submit hooks
  $form['#validate'][] = 'my_theme_theme_settings_validate';
  $form['#submit'][] = 'my_theme_theme_settings_submit';
  
/*
  // add an additional vertical tabs set to new subtheme
  $form['my_theme'] = array(
    '#type' => 'vertical_tabs',
    '#attributes' => array('class' => array('entity-meta')),
    '#weight' => -999,
    '#default_tab' => 'edit-export',
    '#states' => array(
      'invisible' => array(
       ':input[name="force_subtheme_creation"]' => array('checked' => TRUE),
      ),
    ),
  );
*/

/*
  // create the container for settings
  $form['my_theme-config'] = array(
    '#type' => 'details',
    '#attributes' => array('class' => array('custom-css-class')),
    '#title' => t('Custom Settings'),
    '#description' => t('</p>'),
    '#weight' => -800,
    '#group' => 'my_theme',
    '#tree' => TRUE,
  );
*/

  
}

function my_theme_theme_settings_validate(&$form, &$form_state) {
  
}

function my_theme_theme_settings_submit(&$form, &$form_state) {
  
}