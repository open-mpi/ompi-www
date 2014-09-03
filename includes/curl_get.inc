<?php

function do_curl_get($url) {
    # Use curl to proxy a request to subversion to get the current NEWS
    # file.  PHP has everything!
    $ch = curl_init();

    # Set the URL to GET from
    curl_setopt($ch, CURLOPT_URL, $url);

    # Setting CURLOPT_RETURNTRANSFER variable to 1 will force curl not to
    # print out the results of its query.  Instead, it will return the
    # results as a string return value from curl_exec() instead of the
    # usual true/false.
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

    # Set CURLOPT_FOLLOWOCATION so that if we get any redirects, curl
    will follow them to get the content from the final location.
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

    # Execute the request and get the output
    $output = curl_exec ($ch);

    # Check to see if we got success
    if (curl_errno($ch)) {
        curl_close($ch);
        return "<p>Sorry, something went wrong while trying to obtain the URL \"$url\".  Please try again later.\n\n";
    }

    curl_close($ch);
    return $output;
}
