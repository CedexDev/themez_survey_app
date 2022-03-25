<?php

namespace App\Flip;


class Extension
{

    public static function isImage($file_name)
    {
        $is_flag = false;
        $ext = substr($file_name, -3);
        $ext4 = substr($file_name, -4);
        $ext42 = substr($file_name, -42);
        if (in_array($ext, ['jpg', 'png', 'gif', 'bmp']) || in_array($ext4, ['jpeg', 'tiff', 'webp']) || in_array($ext42, ['jpeg?auto=compress&cs=tinysrgb&h=650&w=940']) ) {
            $is_flag = true;
        } else {
            // this code for image
        }
        return $is_flag;


    }
    public static function isVideo($file_name)
    {
        $is_flag = false;
        $ext = substr($file_name, -3);
        $ext2 = substr($file_name, -2);
        if (in_array($ext, ['mp4', 'avi', 'mkv', 'wmv', 'flv', 'mov']) || in_array($ext2, ['qt']) ) {
            $is_flag = true;
        } else {
            // this code for image
        }
        return $is_flag;
    }
}
