<?php

if (!function_exists('zendesk'))
{
    /**
     * @return HomeDesignShops\Zendesk\ZendeskClient
     */
   function zendesk()
   {
       return app('zendesk');
   }
}