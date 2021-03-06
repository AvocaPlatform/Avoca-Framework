<?php
/**
 * Created by AVOCA.IO
 * Website: http://avoca.io
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

if (!function_exists('fieldForm_readonly')) {
    function fieldForm_readonly($field, $value, $option = [])
    {
        $extra = $option;
        $extra['readonly'] = 'readonly';
        return form_input($field, $value, $extra);
    }
}

if (!function_exists('fieldForm_disabled')) {
    function fieldForm_disabled($field, $value, $option = [])
    {
        $extra = $option;
        $extra['disabled'] = 'disabled';
        return form_input($field, $value, $extra);
    }
}

if(!function_exists('fieldForm_date')) {
    function fieldForm_date($field, $value, $extra = [])
    {
        $defaults = array(
            'type' => 'date',
            'name' => $field,
            'value' => $value
        );

        return '<input ' . _parse_form_attributes($extra, $defaults) . ' />';
    }
}

if (!function_exists('fieldForm_dropdown')) {
    function fieldForm_dropdown($field, $value, $option = [])
    {
        $list_string = (!empty($option['options'])) ? $option['options'] : '';
        if (!$list_string) {
            $options = [];
        } else {
            $options = getAppListStrings($list_string);
        }

        $extra = $option;
        unset($extra['options']);
        return form_dropdown($field, $options, $value, $extra);
    }
}