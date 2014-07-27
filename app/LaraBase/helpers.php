<?php

// Function to set Active States in Navigation Links
// Used in views>layouts>navigation.blade.php
function active($path, $active = 'active')
{
    return Request::is($path) ? $active : null;
}

// Function to generate Gravatar url for given email
// Used in posts>show.blade.php and user>profile_public.blade.php
function gravatar_url($email, $size)
{
    if($size == null)
    {
        return 'http://www.gravatar.com/avatar/'.md5($email) ;
    }
    return 'http://www.gravatar.com/avatar/'. md5($email) .'?s='. $size ;
}
