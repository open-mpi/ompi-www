<?php
$topdir = "../..";
$title = "Open Tool for Parameter Optimization";
include_once("$topdir/software/otpo/current/version.inc");
include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>

First, you will need a <?php 
print("<a href=\"http://subversion.tigris.org/\">"); ?>Subversion </a>
client.  We recommend getting the latest version available.  If you do
not have the command "<code>svn</code>" in your path, you will likely
need to download and install Subversion (note that you only need the
Subversion <em>client</em>. Getting the server to compile may be quite
complex and require a lot of dependencies -- the client is currently
significantly easier to compile).

As of today, the OTPO project only has a development trunk without
any side branches.  
It is located in the directory <code>/trunk</code> in
the repository.


<!- ------------------------------------------------------------------ -->

<h2>Anonymous, read-only access</h2>

<p>The base URL of the otpo Subversion repository is: <?php
print("<a href=\"http://svn.open-mpi.org/svn/otpo/\">");
?>http://svn.open-mpi.org/svn/otpo/</a>.  Use it to obtain a checkout
of any portion of the repository.  For example, to obtain a checkout
of the trunk:</p>

<?php print_code("shell$ svn co http://svn.open-mpi.org/svn/otpo/trunk otpo-trunk
[...lots of output...]"); ?>

<p>The "list" Subversion command can be used to show which branches and
tags are available:</p>

<?php print_code("shell$ svn list http://svn.open-mpi.org/svn/otpo/tags
[...list of the tag directories available...]"); ?>

<p>Note that Subversion is natively capable of using many forms of web
proxies.  If your network setup requires the user of a web proxy,
<?php print("<a href=\"http://svnbook.red-bean.com/\">"); ?>consult the
Subversion documentation for more details</a>.

<!- ------------------------------------------------------------------ -->

<h2>Authenticated access</h2>

<p>Registered developers need to perform an authenticated checkout in
order to be able to commit changes back to the repository.  The
procedure is identical to the anonymous, read-only checkout (detailed
above) except that you should use "<code>https</code>" instead of
"<code>http</code>":</p>

<?php print_code("shell$ svn co https://svn.open-mpi.org/svn/otpo/trunk otpo-trunk
[...lots of output...]"); ?>

<p>Note that the <strong>first</strong> time you perform an
authenticated checkout on any machine, you will be prompted to accept
<code>svn.open-mpi.org</code>'s SSL certificate and to type in your
Subversion username and password.  For example:

<?php print_code("shell$ svn co https://svn.open-mpi.org/svn/otpo/trunk otpo-trunk
Error validating server certificate for 'https://svn.open-mpi.org:443':
 - The certificate is not issued by a trusted authority. Use the
   fingerprint to validate the certificate manually!  Certificate information:
 - Hostname: svn.open-mpi.org
 - Valid: from Apr  4 13:52:48 2005 GMT until Apr  2 13:52:48 2015 GMT
 - Issuer: Computer Science Department, Indiana University,  Bloomington, Indiana, US
 - Fingerprint: <strong><font color=red>92:dd:79:e4:43:6f:d1:a3:11:68:7f:81:38:ab:39:c1:be:c2:fd:1c</font></strong>
(R)eject, accept (t)emporarily or accept (p)ermanently? "); ?>

<p>If the fingerprint shown by your Subversion client matches what is
displayed above, it is easiest to (p)ermanently accept the certificate
(Subversion will warn you if the fingerprint ever changes).</p>

<p>Next, you'll be prompted for your password:</p>

<?php print_code("Authentication realm: <https://svn.open-mpi.org:443> Open MPI Subversion repositories access: Powered by SVNManager
Password for 'your_username':"); ?>

<p>If the username displayed does not match your Subversion registered
username, simply hit return and Subversion will prompt for your
username:</p>

<?php print_code("Authentication realm: <https://svn.open-mpi.org:443> Open MPI Subversion repositories access: Powered by SVNManager
Password for 'your_username':
Authentication realm: <https://svn.open-mpi.org:443> Open MPI Subversion repositories access: Powered by SVNManager
Username:"); ?>

<p>After you use the correct Subversion username and enter your
Subversion password, the checkout will proceed.</p>

<p><strong><font color=red>NOTE:</font></strong> By default,
Subversion caches your password under on your local computer (e.g.,
under <code>$HOME/.subversion</code> directory, or in your OS X
keychain).  Hence, you only need to enter it once.  If you are
uncomfortable with Subversion caching your password, <?php
print("<a href=\"http://svnbook.red-bean.com/nightly/en/svn-book.html#svn.serverconfig.netmodel.credcache\">");
?>consult the Subversion documentation</a>.

<?php 
  include_once("$topdir/includes/footer.inc"); 
