<?php
/**
 * Templates support.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017-2022
 */

/**
 * Render view.
 *
 * @param array  $view   View data
 * @param string $layout Layout file name
 */
function render(array $view, string $layout = 'base'): void {
    $view['templates_dir'] = dirname(__DIR__).'/templates';
    $view['template_ext'] = '.html.php';

    $layout_template_name = $layout.$view['template_ext'];

    require_once $view['templates_dir'] . '/' . $layout_template_name;
}