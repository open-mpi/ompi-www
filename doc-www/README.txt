doc-www README.txt
====================

This doc-www/ directory contains documentation about the `ompi-www` website itself. This stuff
is for developers who wish to work on maintaining the website, as opposed to people who just
want to learn about Open MPI.


# Hosting Requirements

This section describes what what you need to run the ompi-www site.

You need:

* A PHP-enabled web server
* PHP 7.x

Run the web server with its content root pointed at the ompi-www repo checkout
or distribution installation location.

## Example: Running the Site Locally on macOS

For example, to run the ompi-www site locally on macOS to test your local changes:

Install Apache HTTPD and PHP. If you're using Homebrew , do `brew install httpd php`,
and follow the directions in the `php` Caveats to set it up with Apache HTTPD.

Edit Apache's `/usr/local/etc/httpd/httpd.conf` to point a VirtualHost at your
repo checkout. For example, if your repo checkout is at `~/local/repos/ompi-www`:

```
Listen 8081
<VirtualHost *:8081>
    ServerAdmin me@example.com

    DocumentRoot /Users/me/local/repos/ompi-www
    <Directory />
        Options FollowSymLinks
        AllowOverride All
        Allow from all
        Require all granted
        Satisfy All
    </Directory>

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

    DirectoryIndex index.php index.html
</VirtualHost>
```

Then do `brew services start php; brew services start httpd` to fire up the HTTPD,
and head to http://localhost:8081 in a web browser.

# Local Site Tools

Despite it being called `doc-www`, this directory contains a `bin/` subdirectory with executable
tools that you can run on a Unix system for exploring this repo.

##  grep-variants

Usage: grep-variants [text-a] [text-b]

Counts how many occurrences there are of each of two text variants in this site (excluding
the mailing list archives). This is for giving you guidance on which of two style options to
use, like for deciding between "email" and "e-mail" or "segfault" and "seg fault"

It only works if you run it from the repo root directory.

It's imperfect because it doesn't take in to account line wrapping and extra hyphenation and whatnot.

Example:

```
$ ./doc-www/bin/grep-variants email e-mail
Variant A: email
     151
Variant B: e-mail
      15
$ ./doc-www/bin/grep-variants segfault "seg fault"
Variant A: segfault
       3
Variant B: seg fault
      10
$ ./doc-www/bin/grep-variants Unix unix UNIX
Variant A: Unix
     296
Variant B: unix
      50
Variant C: UNIX
     421
```
