<?php

namespace Drupal\banner_chic\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a block banner
 * 
 * @Block(
 *  id = "banner_chic_block",
 *  admin_label = @Translation("Banner Chic Block"),
 * )
 */
class BannerChicBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#theme' => 'my_template',
            '#service1' => $this->configuration['service1'],
            '#lien_service1' => $this->configuration['lien_service1'],
            '#service2' => $this->configuration['service2'],
            '#lien_service2' => $this->configuration['lien_service2'],
            '#service3' => $this->configuration['service3'],
            '#lien_service3' => $this->configuration['lien_service3'],
            '#service4' => $this->configuration['service4'],
            '#lien_service4' => $this->configuration['lien_service4'],
        ];
    }

    /**
     * {@inheritdoc}
     */  
    public function defaultConfiguration() {
        return [
            'service1' => $this->t(''),
            'lien_service1' => $this->t(''),
            'service2' => $this->t(''),
            'lien_service2' => $this->t(''),
            'service3' => $this->t(''),
            'lien_service3' => $this->t(''),
            'service4' => $this->t(''),
            'lien_service4' => $this->t(''),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        // 1er service
        $form['service1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Service 1'),
            '#description' => $this->t('Le nom du service à ajouter'),
            '#default_value' => $this->configuration['service1'],
        ];
        $form['lien_service1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du service à ajouter'),
            '#default_value' => $this->configuration['lien_service1'],
        ];
        // 2ème service
        $form['service2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Service 2'),
            '#description' => $this->t('Le nom du service à ajouter'),
            '#default_value' => $this->configuration['service2'],
        ];
        $form['lien_service2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du service à ajouter'),
            '#default_value' => $this->configuration['lien_service2'],
        ];
        // 3ème service
        $form['service3'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Service 3'),
            '#description' => $this->t('Le nom du service à ajouter'),
            '#default_value' => $this->configuration['service3'],
        ];
        $form['lien_service3'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du service à ajouter'),
            '#default_value' => $this->configuration['lien_service3'],
        ];
        // 4ème service
        $form['service4'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Service 4'),
            '#description' => $this->t('Le nom du service à ajouter'),
            '#default_value' => $this->configuration['service4'],
        ];
        $form['lien_service4'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du service à ajouter'),
            '#default_value' => $this->configuration['lien_service4'],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        // 1er service
        $this->configuration['service1'] = $form_state->getValue('service1');
        $this->configuration['lien_service1'] = $form_state->getValue('lien_service1');
        // 2ème service
        $this->configuration['service2'] = $form_state->getValue('service2');
        $this->configuration['lien_service2'] = $form_state->getValue('lien_service2');
        // 3ème service
        $this->configuration['service3'] = $form_state->getValue('service3');
        $this->configuration['lien_service3'] = $form_state->getValue('lien_service3');
        // 4ème service
        $this->configuration['service4'] = $form_state->getValue('service4');
        $this->configuration['lien_service4'] = $form_state->getValue('lien_service4');
    }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function blockValidate($form, FormStateInterface $form_state) {
    //     if ($form_state->getValue('service1') === 'John') {
    //     $form_state->setErrorByName('service1', $this->t('You can not say hello to John.'));
    //     }
    // }

}