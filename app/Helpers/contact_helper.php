<?php

function emptyValue($str) {
    return $str == '' ? null : $str;
}
function emptyText($str) {
    return $str == null ? 'Belum diatur' : $str;
}
function clear($str) {
    return preg_replace('/\s+/', '', $str);
}
