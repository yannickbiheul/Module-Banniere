<?php

namespace Drupal\banner_chic\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
            '#test_var' => $this->t('SALUT !!!'),
        ];
    }

}