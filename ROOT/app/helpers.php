<?php
function meegaBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) -1);

    $bytes /= pow(1024, $pow);
    return round($bytes, $precision). ' ' . $units[$pow];
}

function dd($var) {
    var_dump($var); die();
}

function inputs($key = null) {
    return Request::inputs($key);
}

function required($requiredKeys = array()) {
    return Request::required($requiredKeys);
}

function filesRequired($requiredKeys = array()) {
    return Request::filesRequired($requiredKeys);
}

function encrypt($data) {
    return Encryption::make($data, Config::get('security.enckey'));
}

function decrypt($data) {
    return Encryption::decrypt($data, Config::get('security.enckey'));
}

function map($method, $url, $callback, $name = null) {
    App::map($method, $url, $callback, $name);
}

function get($url, $callback, $name = null) {
    App::map('GET', $url, $callback, $name);
}

function post($url, $callback, $name = null) {
    App::map('POST', $url, $callback, $name);
}

function url($url) {
    return App::url($url);
}

function assets($url) {
    return App::assets($url);
}

function with($key) {
    return App::with($key);
}

function session($key, $val = '`') {
    return App::session($key, $val);
}

function cookie($key, $val = '`') {
    return App::cookie($key, $val);
}

function redirect($url, array $with = array()) {
    return App::redirect(url($url), $with);
}

function render($view, array $raw = array()) {
    View::render($view,$raw);
}
