<?php

namespace Yamobile\LeadTracker\Components;

use Cms\Classes\ComponentBase;
use Yamobile\LeadTracker\Models\Lead;

class Tracker extends ComponentBase
{
    const INFO_FIELDS_KEY = 'info:';

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.leadtracker::lang.components.tracker.name',
            'description' => 'yamobile.leadtracker::lang.components.tracker.description',
        ];
    }

    public function onSubmitLeadForm()
    {
        $lead = new Lead;

        if (array_key_exists('name', $_POST)) {
            $lead->name = $_POST['name'];
        }
        if (array_key_exists('phone', $_POST)) {
            $lead->phone = $_POST['phone'];
        }
        if (array_key_exists('email', $_POST)) {
            $lead->email = $_POST['email'];
        }

        if(isset($_SERVER['HTTP_USER_AGENT'])){
            $lead->user_agent = $_SERVER['HTTP_USER_AGENT'];
        }

        $userIp = self::getUserIp();
        if($userIp) {
            $lead->ip = $userIp;
        }

        $infoFields = self::getInfoFileds();
        if ($infoFields) {
            $lead->info = $infoFields;
        }

        $lead->source = self::getURL();

        $lead->save();
    }

    static private function getUserIp()
    {

        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else{
            $ip = $remote;
        }

        return $ip;
    }

    static private function getInfoFileds()
    {
        $infoFields = array();

        $postArrayKeys = array_keys($_POST);
        $infoArrayKeys = array_filter($postArrayKeys, function ($key) {
            $substring = substr($key, 0, 5);
            if ($substring === self::INFO_FIELDS_KEY) {
                return $key;
            }
        });
        foreach ($infoArrayKeys as $key) {
            $infoFields = array_merge($infoFields, array($key => $_POST[$key]));
        }

        if ($infoFields) {
            return json_encode($infoFields);
        }
        return null;
    }

    static private function getURL()
    {
        $url = "";

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url .= "https://";
        } else {
            $url .= "http://";
        }
        $url .= $_SERVER['HTTP_HOST'];
        $url.= $_SERVER['REQUEST_URI'];

        return $url;
    }



}