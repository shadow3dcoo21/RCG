<?php

if (!function_exists('formatDetails')) {
    function formatDetails($detailsJson)
    {
        $details = str_replace(['\t', '\r\n', '\r', '\n', '\u00f3'], ['', '<br>', '', '<br>', 'ó'], $detailsJson);
        $decodedDetails = html_entity_decode($details);

        return new Illuminate\Support\HtmlString($decodedDetails);
    }
}