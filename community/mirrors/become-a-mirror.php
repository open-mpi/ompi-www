<?php // -*- c++ -*-

  $topdir = "../..";
  $title = "How to become an Open MPI mirror site";

  include_once("nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/code.inc");
?>

<p>The Open MPI Team greatly appreciates any new mirror site.
There are four main steps to becoming an official Open MPI
mirror site:</p>

<p>
<ul>
<li>Please read the following guidelines:</li>

<p>
<ol>

<li> Open MPI web mirrors <strong>must</strong> support serving PHP4
web pages.  The Open MPI web pages use some esoteric PHP
functionality, such as the <code>curl</code> functions.  Hence, be
sure that your web server supports the PHP <code>curl</code>
extensions (e.g., <a href="<?php print($topdir); ?>/svn/new.php">view
this page</a> and ensure that your server shows the same content that
is displayed on the main Open MPI web site).

<li>Please join the <a
href="https://www.open-mpi.org/mailman/listinfo.cgi/mirrors">Open MPI
mirrors mailing list</a>.  This is a very low-volume mailing list that
we use for sending out announcements, problems with mirror sites, etc.
Questions, comments, and suggestions about the mirroring process can
also be sent to this list.</li>

<li>Please update your mirror site at least once a week.  We recognize
that not all sites have the bandwidth luxury to update every day (note
that Git is quite efficient and transfers very little data,
especially if the Open MPI web site has not changed since your last
update).  However, we would like to have mirror sites that are at
least "mostly current" with the main web site.</li>

</ol>
<p>

<!- ------------------------------------------------------------------ -->

<p>
<li>Send the following information to the Open MPI mirrors list:

<p>
<ol>

<li>Text for the tagline for your mirror site.  This text appears on
both the main mirror list and on the lower left corner of every page
on your mirror site.  This text is typically the physical location of
your mirror site.</li>

<li>The physical location of your server.  We organize the list by
location.</li>

<li>The official URL for your mirror site.  This will be added to <a
href="<?php print($topdir); ?>/community/mirrors/">the main Open MPI
mirror list</a>.</li>

<li>The hostname of the server that will be serving the web pages.
This is for cross-referencing so that the correct tagline will be
displayed; typically it is the same hostname as used in your official
URL (specifically, it is what is returned by PHP's
<code>$_SERVER["SERVER_NAME"]</code>).</li>

</ol>
</li>
<?php
# stupid emacs mode: '
?>
<!- ------------------------------------------------------------------ -->

<p>

<li> Obtain a copy of the Open MPI web site.

<p>
<ol>

<li> <strong> Using Git </strong>

<p> The web pages can be anonymously checked out from Git:

<?php print_code("shell$ cd /path/to/your/docroot
shell$ git clone https://github.com/open-mpi/ompi-www.git"); ?>

<p> Create an automated process to run "<code>git pull</code>" in your
checkout at whatever frequency you want (see the guidelines, above).
This will keep you web pages up to date.  An easy way to do this is to
add a crontab entry for a user who has write permissions in the Open
MPI docroot tree.  The follow sample crontab entry updates the tree at
4:23am every morning:</p>

<?php print_code("23 4 * * * cd /path/to/your/docroot; git pull"); ?>

<p> Alternatively, a slightly more elegant mechanism to update and
mail someone only if there are errors would be to use the following
script:</p>

<?php
$base_script = "#!/bin/sh

# Open MPI web site mirroring script: @METHOD@

# Replace this with the path to your docroot
docroot=/path/to/your/docroot

# Replace this with a directory that can be used for temporary files
tmpdir=/tmp

# Do the update
stdout=\"\$tmpdir/open-mpi-mirror-update.\$\$.out\"
stderr=\"\$tmpdir/open-mpi-mirror-update.\$\$.err\"
cd \"\$docroot\"
@COMMAND@ &gt; \"\$stdout\" 2&gt; \"\$stderr\"
status=\$?

# This timestamp is included in the footer of pages to indicate the
# last time the mirror was updated
rm -f includes/when_mirrored.inc
date &gt; includes/when_mirrored.inc

# Check for error
if test \"\$status\" != \"0\"; then
   cat &lt;&lt;EOF

There was a problem with updating the Open MPI mirror; @SHORT_COMMAND@ exited
with a status code of \$status.

--Standard output----------------------------------------------------------
`cat \"\$stdout\"`
--Standard output----------------------------------------------------------

--Standard error-----------------------------------------------------------
`cat \"\$stderr\"`
--Standard error-----------------------------------------------------------
EOF
fi

rm -f \"\$stdout\" \"\$stderr\"
exit 0";

$git_script = preg_replace("/@METHOD@/", "Git synchronization",
                           $base_script);
$git_script = preg_replace("/@COMMAND@/", "git pull", $git_script);
$git_script = preg_replace("/@SHORT_COMMAND@/", "\"git pull\"", $git_script);
print_code($git_script);

?>

</li>

<p>
<li> <strong> Using <code>rsync</code> </strong>

<p> <font color="red">This method is no longer supported.</font> The
Open MPI web site is maintained in Git.</p>

<p>If you were previously using rsync, please switch to using
Git.</p>

</li>

<p>
<li> <strong> Using Subversion </strong>

<p> <font color="red">This method is no longer supported.</font> The
Open MPI web site is now maintained in Git, not Subversion.</p>

<p>If you were previously using subversion, please switch to using
Git.</p>

</li>
</ol>

</li>

<hr>

<p>

<li> The first time you mirror the OMPI web site, a black
skull-nand-crossbones flag will appear in the lower left of all your
web pages.  <strong>This is normal!</strong>

<ol>

<li>Once you have a basic mirror site working properly, send your
mirror site entry information to the "mirrors" mailing list and we'll
add your information to the site PHP.  This will enable your country's
flag to appear in the lower left instead of the Jolly Roger.</li>

<li> Let an automatic update occur to get the PHP change.  If all of
this goes well, let us know, and we'll update the PHP again to display
your mirror in the <a href="./">official listing</a> (which all sites
will pick up via the normal mirror updating mechanisms).</li>
</ol>

<p>
<li> Two important files that can be created and maintained by mirror
sites:
<ol>

<li> <code>includes/when_mirrored.inc</code>: If this file exists, it
is expected to be a short time/date stamp of when the last time this
mirror was updated.  The contents will be displayed in the footer of
all the pages on your mirror site.  The use of this file is shown in
the example, above.</li>

<li> <code>includes/mirror_footer.inc</code>: If this file exists, it
is included via PHP's include() directive underneath all other content
in Open MPI web pages, but before &lt;/BODY&gt; (and
&lt;/HTML&gt;).  Mirrors can use this to add a short amount of
information at the end of each page, such as attribution and
recognition for hosting the mirror.  Since it is included by PHP, you
can use PHP code in the file.</li>

</ol>

</p>

</ul>
<p>Thanks!</p>

<?php
  include_once("$topdir/includes/footer.inc");
