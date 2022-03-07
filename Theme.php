<?php

class Theme
{
    public static function socialNetworks()
    {
        return HTML::socialNetworks();
    }

    public static function title()
    {
        return HTML::title();
    }

    public static function description()
    {
        return HTML::description();
    }

    public static function slogan()
    {
        return HTML::slogan();
    }

    public static function footer()
    {
        return HTML::footer();
    }

    public static function lang()
    {
        return HTML::lang();
    }

    public static function rssUrl()
    {
        return HTML::rssUrl();
    }

    public static function sitemapUrl()
    {
        return HTML::sitemapUrl();
    }


    public static function siteUrl()
    {
        return HTML::siteUrl();
    }

    public static function adminUrl()
    {
        return HTML::adminUrl();
    }

    public static function metaTags($tag)
    {
        return HTML::metaTags($tag);
    }

    public static function metaTagTitle()
    {
        return HTML::metaTagTitle();
    }

    public static function metaTagDescription()
    {
        return HTML::metaTagDescription();
    }

    public static function headTitle()
    {
        return HTML::metaTagTitle();
    }

    public static function headDescription()
    {
        return HTML::metaTagDescription();
    }

    public static function charset($charset)
    {
        return HTML::charset($charset);
    }

    public static function viewport($content)
    {
        return HTML::viewport($content);
    }

    public static function src($file, $base=DOMAIN_THEME)
    {
        return HTML::src($file,$base);
    }

    public static function css($files, $base=DOMAIN_THEME)
    {
        return HTML::css($files,$base);
    }

    public static function javascript($files, $base=DOMAIN_THEME, $attributes='')
    {
        return HTML::javascript($files, $base, $attributes);
    }

    public static function js($files, $base=DOMAIN_THEME, $attributes='')
    {
        return HTML::js($files, $base, $attributes);
    }

    public static function favicon($file='favicon.png', $typeIcon='image/png')
    {
        return HTML::favicon($file,$typeIcon);
    }

    public static function keywords($keywords)
    {
        return HTML::keywords($keywords);
    }

    public static function jquery()
    {
        return HTML::jquery();
    }

    public static function jsBootstrap($attributes='')
    {
        return HTML::jsBootstrap($attributes);
    }

    public static function cssBootstrap()
    {
        return HTML::cssBootstrap();
    }

    public static function jsSortable($attributes='')
    {
        return HTML::jsSortable($attributes);
    }

    public function plugins($name){
        return execPluginsByHook($name);
	}
}