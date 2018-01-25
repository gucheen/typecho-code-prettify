<?php
/**
 * code-prettify for Typecho插件，实现代码高亮.
 *
 * @package CodePrettify
 *
 * @author gucheen
 *
 * @version 0.0.1
 *
 * @link https://github.com/gucheen/typecho-code-prettify
 */
class CodePrettify_Plugin implements Typecho_Plugin_Interface
{
    /* 激活插件方法 */
    public static function activate(){
        Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('CodePrettify_Plugin', 'parse');
    }

    /* 禁用插件方法 */
    public static function deactivate(){}

    /* 插件配置方法 */
    public static function config(Typecho_Widget_Helper_Form $form){}

    /* 个人用户的配置方法 */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /* 插件实现方法 */
    public static function render(){}

    public static function parse($text, $widget, $lastResult)
    {
        $text = empty($lastResult) ? $text : $lastResult;
        $text = str_replace('<pre>', '<pre class="prettyprint">', $text);
        return $text;
    }
}
