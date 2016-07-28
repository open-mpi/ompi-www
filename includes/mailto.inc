<?php

function print_mailto($host, $user, $fullname) {
    # Super crude spam protection
    $email = "$user@$host";
    preg_replace("/\-/", "-dash-", $email);
    preg_replace("/\./", "-dot-", $email);
    print("<a href=\"mailto:$email\">$email</a>");
}
