<?php
function GenID()
{
    $t = microtime(true);
    $micro = round(microtime(true) * 1000000) % 1000000;
    $micro = str_pad($micro, 6, "0", STR_PAD_LEFT);

    $new_id = date("ymdHis") . $micro;
    //convert id ke base 36 (0-z) supaya lebih pendek
    $save_id = base_convert($new_id, 10, 36);
    return strtoupper($save_id);
}
