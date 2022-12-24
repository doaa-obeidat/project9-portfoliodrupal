<?php

/**
 * @file
 * Danland theme settings.
 */

use Drupal\file\Entity\File;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */

function particles_orange_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
  $form['particles_orange_settings'] = [
    '#type' => 'fieldset',
    '#title' => t('Particles Responsive Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  ];
  $form['particles_orange_settings']['banner_display'] = [
    '#type' => 'checkbox',
    '#title' => t('Show Particles banner'),
    '#default_value' => theme_get_setting('banner_display','particles_orange'),
    '#description'   => t("Check this option to show Particles Background banner in front page. Uncheck to hide."),
  ];
  $form['particles_orange_settings']['banner'] = [
    '#markup' => t('You can change the description and URL of banner in the following Banner settings.'),
  ];
  $form['particles_orange_settings']['banner'] = [
    '#type' => 'fieldset',
    '#title' => t('Particles banner'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['particles_orange_settings']['banner']['banner_head'] = [
    '#type' => 'textfield',
    '#title' => t('Particles Banner Headline'),
    '#default_value' => theme_get_setting('banner_head','particles_orange'),
  ];
  $form['particles_orange_settings']['banner']['banner_desc'] = [
    '#type' => 'textarea',
    '#title' => t('Particles Banner Description'),
    '#default_value' => theme_get_setting('banner_desc','particles_orange'),
  ];
  $form['particles_orange_settings']['banner']['banner_url'] = [
    '#type' => 'textfield',
    '#title' => t('Particles Banner URL'),
    '#default_value' => theme_get_setting('banner_url','particles_orange'),
  ];
  $form['particles_orange_settings']['banner']['banner_url_text'] = [
    '#type' => 'textfield',
    '#title' => t('Particles Banner URL Text'),
    '#default_value' => theme_get_setting('banner_url_text','particles_orange'),
  ];  
  $form['particles_orange_settings']['banner']['banner_image'] = [
    '#type' => 'managed_file',
    '#title' => t('Particles Banner Image'),
    '#default_value' => theme_get_setting('banner_image','particles_orange'),
    '#upload_location' => 'public://',
    '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  ];
  $form['#submit'][] = 'particles_orange_settings_form_submit';
  $theme = \Drupal::theme()->getActiveTheme()->getName();
  $theme_file = drupal_get_path('theme', $theme) . '/theme-settings.php';
  $build_info = $form_state->getBuildInfo();
  if (!in_array($theme_file, $build_info['files'])) {
    $build_info['files'][] = $theme_file;
  }
  $form_state->setBuildInfo($build_info);

  //Social Icon Link
  $form['particles_orange_settings']['social_icon'] = [
    '#type' => 'fieldset',
    '#title' => t('Social Media Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['particles_orange_settings']['social_icon']['show_social_icon'] = [
    '#type' => 'checkbox',
    '#title' => t('Show Social Icons'),
    '#default_value' => theme_get_setting('show_social_icon'),
    '#description'   => t("Show/Hide social media links"),
  ];
  $form['particles_orange_settings']['social_icon']['facebook_url'] = [
    '#type' => 'textfield',
    '#title' => t('Facebook Link'),
    '#default_value' => theme_get_setting('facebook_url'),
  ];
  $form['particles_orange_settings']['social_icon']['instagram_url'] = [
    '#type' => 'textfield',
    '#title' => t('Instagram Link'),
    '#default_value' => theme_get_setting('instagram_url'),
  ];
  $form['particles_orange_settings']['social_icon']['twitter_url'] = [
    '#type' => 'textfield',
    '#title' => t('Twitter Link'),
    '#default_value' => theme_get_setting('twitter_url'),
  ];
  $form['particles_orange_settings']['social_icon']['linkedin_url'] = [
    '#type' => 'textfield',
    '#title' => t('Linkedin Link'),
    '#default_value' => theme_get_setting('linkedin_url'),
  ];
  $form['particles_orange_settings']['social_icon']['youtube_url'] = [
    '#type' => 'textfield',
    '#title' => t('Youtube Link'),
    '#default_value' => theme_get_setting('youtube_url'),
  ];  

  $form['particles_orange_settings']['copyright'] = [
    '#type' => 'details',
    '#title' => t('Copyright'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['particles_orange_settings']['copyright']['show_copyright'] = [
    '#type' => 'checkbox',
    '#title' => t('Show Copyright text'),
    '#default_value' => theme_get_setting('show_copyright'),
    '#description'   => t("Check this option to show Copyright text. Uncheck to hide."),
  ];

  $form['particles_orange_settings']['copyright']['copyright_text'] = [
    '#type' => 'textfield',
    '#title' => t('Enter copyright text'),
    '#default_value' => theme_get_setting('copyright_text'),
  ];
  $form['particles_orange_settings']['show_scroller'] = [
    '#type' => 'fieldset',
    '#title' => t('Show Scroll to top arrow'),
    '#description'   => t(""),
  ];
  //show scroller or no
  $form['particles_orange_settings']['show_scroller']['display_scroller'] = [
    '#type' => 'checkbox',
    '#title' => t('Show scroller'),
    '#default_value' => theme_get_setting('display_scroller'),
    '#description'   => t("Check this option to show scroller Uncheck to hide."),
  ];
  $form['particles_orange_settings']['show_scroller']['scroller'] = [
    '#type' => 'radios',
    '#title' => t('Select Position:'),
    '#options' => array('Right' => 'Show in Right', 'Left' => 'Show in Left'),
    '#default_value' => (theme_get_setting('scroller')?theme_get_setting('scroller'): 'Right'),
  ];
}

function particles_orange_settings_form_submit(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
  $account = \Drupal::currentUser();
  $values = $form_state->getValues();
  for ($i = 1; $i <= 3; $i++) {
    if (isset($values["banner{$i}_image"]) && !empty($values["banner{$i}_image"])) {
      // Load the file via file.fid.
      if ($file = \Drupal\file\Entity\File::load($values["banner{$i}_image"][0])) {
        // Change status to permanent.
        $file->setPermanent();
        $file->save();
        $file_usage = \Drupal::service('file.usage');
        $file_usage->add($file, 'user', 'user', $account->id());
      }
    }
  }
}
