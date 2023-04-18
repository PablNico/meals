<?php

namespace Drupal\meal_integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * This configuration form allows the admin to set MealDB API settings.
 *
 * @package Drupal\meal_integration\Form
 */
class MealApiSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'meal_integration.settings'
    ];
  }

  public function getFormId() {
    return 'meal_integration_settings';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('meal_integration.settings');

    $form['meal_integration'] = [
        '#type' => 'fieldset',
        '#title' => $this->t('Meal DB API Settings'),
    ];

    $form['meal_integration']['meal_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Meal DB API URL'),
      '#description' => 'The URL where the requests will be made',
      '#placeholder' => $config->get('meal_url'),
      '#default_value' => $config->get('meal_url'),
      '#required' => TRUE,
    ];
    $form['meal_integration']['api-key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Meal DB API Key'),
      '#description' => 'The API Key to be used on requests. Use 1 for test',
      '#placeholder' => $config->get('api-key'),
      '#default_value' => $config->get('api-key'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory()->getEditable('meal_integration.settings');

    if ($form_state->getValue('meal_url') !== NULL) {
      $config->set('meal_url', trim($form_state->getValue('meal_url')))->save();
    }

    if ($form_state->getValue('api-key') !== NULL) {
      $config->set('api-key', trim($form_state->getValue('api-key')))->save();
    }

    parent::submitForm($form, $form_state);
  }
}
