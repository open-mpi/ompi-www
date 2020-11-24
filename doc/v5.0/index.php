<?php
// get errors to display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$topdir = "../..";
$topdir = "../../ompi-www";
//$topdir = "/home/jsquyres/www/ompi-unofficial";
include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");

function error_out($error_string)
{
    print("Something terrible happened: $error_string");
    include("$topdir/includes/footer.inc");
    exit(0);
}


function emit_index_listing()
{
    $dh = opendir(".");
    if (!$dh) {
        error_out("Directory fail");
    }
    $files = array();
    while (($file = readdir($dh)) != false) {
        if (substr($file, -3) == ".md") {
            $files[] = $file;
        }
    }
    closedir($dh);

    if (count($files) > 0) {
        sort($files);
        printf("<p>The following manual pages are available:</p>\n<ul>");
        for ($i = 0; $i < count($files); ++$i) {
            printf("<li><a href=\"?file=$files[$i]\">$files[$i]</a></li>\n");
        }
        printf("</ul>\n");
    }
}

function emit_single_man_page($filename)
{
    printf("<a href=\"../man3\"><- Return to documentation listing</a>");

    # 1. Validate the filename: Make sure it's just numbers, letters, characters.
    if (preg_match("/MPI_[a-zA-Z_]+.md/", $filename)) { # might not filter whole line, but instead look for specific substrings
        # 2. Validate that the file exists
        if (file_exists($filename)) {
            # 3. Open and read the file and close the file
            if ($fp = fopen($filename, "r")) {
                $markdown_file = fread($fp, filesize($filename));
                fclose($fp);

                # 3.5 verify there are no tabs in the file, replace all with "    "
                $markdown_file = preg_replace("(\t)", "    ", $markdown_file); # find a better way - sometimes errors out (ex MPI_Comm_create_keyval.md)


                # 4. Make a Parsedown object and render the markdown
                include_once("Parsedown.php");
                $Parsedown = new Parsedown();
                if ($test = $Parsedown->text($markdown_file)) {
                    # 5. Print the rendered HTML
                    printf("$test");
                }
                else {
                    # 4a. If bad, error_out(...)
                    printf("Parsedown failed to run");
                }
            }
            else {
                # 3a. If bad, error_out(...)
                printf("Unable to open file $filename");
            }
        }
        # 2a. If file does not exist, error_out(...)
        else {
            printf("file does not exist");
        }
    }
    # 1a. If bad, error_out(...)
    else {
        printf("$filename is a bad request... Pls don't hack me<br>");
        printf("<a href=\"../man3\">Go back</a>");

    }

    printf("<a href=\"../man3\"><- Return to documentation listing</a>");
}

// get the filename from the get request
if (array_key_exists("file", $_GET)) {
    emit_single_man_page($_GET["file"]);
} else {
    emit_index_listing();
}


include("$topdir/includes/footer.inc");
exit(0);

