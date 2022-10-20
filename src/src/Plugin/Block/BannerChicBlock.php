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
        ];
    }

    /**
     * {@inheritdoc}
     */  
    public function defaultConfiguration() {
        return [
            'service1' => $this->t(''),
            'lien_service1' => $this->t(''),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        // 1er bloc
        $form['service1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Service'),
            '#description' => $this->t('Le nom du service à ajouter'),
            '#default_value' => $this->configuration['service1'],
        ];
        $form['lien_service1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du service à ajouter'),
            '#default_value' => $this->configuration['lien_service1'],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        $this->configuration['service1'] = $form_state->getValue('service1');
        $this->configuration['lien_service1'] = $form_state->getValue('lien_service1');
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