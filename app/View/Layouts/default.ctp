<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title_for_layout'); ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        // flocss
        echo $this->Html->css('foundations/normalize');
        echo $this->Html->css('layouts/header');
        echo $this->Html->css('objects/projects/chat');
        echo $this->Html->css('objects/projects/chat');
        echo $this->Html->css('objects/utilities/margin');
        echo $this->Html->css('objects/utilities/padding');
        echo $this->Html->css('objects/utilities/text');
        echo $this->Html->css('objects/utilities/size');
        echo $this->Html->css('objects/utilities/position');
        echo $this->Html->css('objects/utilities/border');
        
        // jquery
        echo $this->Html->script( 'jquery-2.1.1.min', array( 'inline' => false ));

        // Made javascript
        echo $this->Html->script( 'chat.js'.'?'.time(), array( 'inline' => false ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        // bootstrap css
        echo $this->Html->css('bootstrap.min.css');
        // bootstrap javascript
        echo $this->Html->script( 'bootstrap.min.js');
        echo $this->Js->writeBuffer(array( 'inline' => 'true' ));
    ?>
</head>
<body>
    <div>
        <div class="l-header">
            <div class="container">
                <?php echo $this->html->link('Twitter認証でChat', '/chats', array('class' => 'left l-header__link')); ?>
                <?php echo $this->html->link('Postテーブル操作', '/posts', array('class' => 'left l-header__link')); ?>
                <?php if(isset($user)) {
                    echo $this->html->link('ログアウト', '/examples/logout', array('class' => 'right l-header__link'));
                }else {
                    echo $this->html->link('ログイン', '/examples/login', array('class' => 'right l-header__link'));
                }?>
            </div>
        </div>
        <div class="p-content container">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
        <div class="l-footer">
<?php echo $this->Html->link(
    $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
    'http://www.cakephp.org/',
    array('target' => '_blank', 'escape' => false)
);
?>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
