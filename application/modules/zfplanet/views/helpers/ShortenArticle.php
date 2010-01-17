<?php

class Zfplanet_View_Helper_ShortenArticle extends Zend_View_Helper_Abstract
{

    public function shortenArticle($content, $length = 5000, $encoding = null)
    {
        
        if (is_null($encoding)) $encoding = $this->view->getEncoding();
        $realLength = iconv_strlen($content, $encoding);
        if ($realLength <= $length) return $content;
        $content = iconv_substr($content, 0, $length, $encoding);
        if (class_exists('tidy', false)) {
            $tidy = new tidy;
            $tidy->parseString(
                $content . '<em>[...]</em>',
                array('output-xhtml'=>true),
                str_replace('-','',$encoding)
            );
            $tidy->cleanRepair();
            $content = (string) $tidy;
        } else {
            $content = $content . '<em>[...]</em>';
        }
        return $content . '<p style="margin-bottom:0;">'
        . '<br/><em>Content was truncated. Another ' . ($realLength - $length)
        . ' characters remain in original article.</em></p>';
    }

}