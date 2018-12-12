<?php
$topdir = "..";
$title = "Source Code Access: Requirements to Build from a Developer Checkout";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
include_once("warning.inc");
?>

<p>After obtaining a successful <a href="git.php">Git clone</a>, the
following tools are required for developers to compile Open MPI from
its repository sources (users who download Open MPI tarballs <em>do
not need these tools - they are <strong>only</strong> required for
developers working on the internals of Open MPI itself</em>):

<!- ------------------------------------------------------------------ -->

<P>
<CENTER>
<TABLE BORDER=1 CELLPADDING=5>
<TR>
<TH>Software package</TH>
<TH>Notes</TH>
<TH>URL</TH>
</TR>

<TR>
<TD>Git client</TD>
<TD>Version 1.8.0 or above</TD>
<TD><?php print("<a href=\"http://git-scm.org/\">"); ?>http://git-scm.org/</A></TD>
</TR>

<TR>
<TD>GNU m4</TD>
<TD>See version chart below</TD>
<TD><?php print("<a href=\"ftp://ftp.gnu.org/gnu/m4\">"); ?>ftp://ftp.gnu.org/gnu/m4/</A></TD>
</TR>

<TR>
<TD>GNU autoconf</TD>
<TD>See version chart below</TD>
<TD><?php print("<a href=\"ftp://ftp.gnu.org/gnu/autoconf\">"); ?>ftp://ftp.gnu.org/gnu/autoconf/</A></TD>
</TR>

<TR>
<TD>GNU automake</TD>
<TD>See version chart below</TD>
<TD><?php print("<a href=\"ftp://ftp.gnu.org/gnu/automake\">"); ?>ftp://ftp.gnu.org/gnu/automake/</A></TD>
</TR>

<TR>
<TD>GNU libtool</TD>
<TD>See version chart below</TD>
<TD><?php print("<a href=\"ftp://ftp.gnu.org/gnu/libtool/\">"); ?>ftp://ftp.gnu.org/gnu/libtool/</A></TD>
</TR>

<TR>
<TD>Flex</TD>
<TD>See version chart below</TD>
<TD><?php print("<a href=\"ftp://ftp.gnu.org/non-gnu/flex/\">"); ?>ftp://ftp.gnu.org/non-gnu/flex/</A></TD>
</TR>

</TABLE>

<P>The following table lists the versions that are used to make
nightly snapshot and official release Open MPI tarballs.  Other
versions of the tools <em>may</em> work for <em>some</em> (but almost
certainly not <em>all</em>) platforms, but the ones listed below are
the versions that we <em>know</em> work across an extremely wide
variety of platforms and environments.</p>

<p><strong>NOTE:</strong> The <code>autogen.pl</code> and
<code>configure.ac</code> scripts tend to be a bit lenient and enforce
slightly <em>older</em> minimum versions than the ones listed below.
This is because such older versions still make usable Open MPI builds
on <em>many</em> platforms &mdash; especially Linux on x86_64 with GNU
compilers &mdash; and are convenient for developers whose Linux distro may
not have as recent as the versions listed below (but are recent enough
to produce a working version for their platform).</p>

<p>To be clear: the versions listed below are <em>required</em> to
support a wide variety of platforms and environments, and are used to
make nightly and official release tarballs.  When building Open MPI,
YMMV when using versions older than those listed below &mdash;
<em>especially if you are not building on Linux x86_64 with the GNU
compilers</em>.  Using older versions is unsupported.  If you run into
problems, upgrade to at least the versions listed below.</p>

<TABLE BORDER=1 CELLPADDING=5>
<TR>
<TH>Open MPI Release</TH>
<TH>M4 Versions</TH>
<TH>Autoconf Versions</TH>
<TH>Automake Versions</TH>
<TH>Libtool Versions</TH>
<TH>Flex Versions</TH>
</TR>

<?php

function row($str, $m4, $ac, $am, $lt, $flex) {
    print("<TR>\n<TD>$str</TD><TD>$m4</TD><TD>$ac</TD><TD>$am</TD><TD>$lt</TD><TD>$flex</TD>\n</TR>\n\n");
}

row("v1.0", "NA", "2.58 - 2.59", "1.7 - 1.9.6", "1.5.16 - 1.5.22", "2.5.4");

row("v1.1", "NA", "2.59", "1.9.6", "1.5.16 - 1.5.22", "2.5.4");

row("v1.2", "NA", "2.59", "1.9.6", "1.5.22 - 2.1a", "2.5.4");

row("v1.3", "1.4.11", "2.63", "1.10.1", "2.2.6b", "2.5.4");

row("v1.4", "1.4.11", "2.63", "1.10.3", "2.2.6b", "2.5.4");

row("v1.5 thru 1.5.4", "1.4.13", "2.65", "1.11.1", "2.2.6b", "2.5.4");

row("v1.5.5 and up", "1.4.16", "2.68", "1.11.3", "2.4.2", "2.5.35");

row("v1.6", "1.4.16", "2.68", "1.11.3", "2.4.2", "2.5.35");

row("v1.7",    "1.4.16", "2.69", "1.12.2", "2.4.2", "2.5.35");
row("v1.8",    "1.4.16", "2.69", "1.12.2", "2.4.2", "2.5.35");
row("v1.10.x", "1.4.16", "2.69", "1.12.2", "2.4.2", "2.5.35");

row("v2.0.x", "1.4.17", "2.69", "1.15", "2.4.6", "2.5.35");
row("v2.1.x", "1.4.17", "2.69", "1.15", "2.4.6", "2.5.35");
row("v3.0.x", "1.4.17", "2.69", "1.15", "2.4.6", "2.5.35");
row("v3.1.x", "1.4.17", "2.69", "1.15", "2.4.6", "2.5.35");
row("master", "1.4.17", "2.69", "1.15", "2.4.6", "2.5.35");

?>

</TABLE>

</CENTER>

<!- ------------------------------------------------------------------ -->

<p>Autotools notes:

<OL>

<LI> Other version combinations <em>may</em> work, but are untested
     and unsupported.  In particular, developers tend to use higher
     versions of Autotools for master/development work, and they
     usually work fine.</LI>

<LI> The v1.4 and v1.5 series had their Automake versions updated on
     10 July 2011 (from 1.10.1 to 1.10.3, and 1.11 to 1.11.1,
     respectively) due to CVE-2009-4029.  This applies to all new
     snapshot tarballs produced after this date, and the v1.4 series
     as of v1.4.4, and the v1.5 series as of 1.5.4.</LI>

<LI> If Autoconf 2.60 (and higher) is used, Automake 1.10 (and higher)
     <b>must</b> be used.</LI>

<LI> The <code>master</code> branch and all release branches starting
     with <code>v1.2</code> require the use of Libtool 2.x (or
     higher) so that Open MPI can build the Fortran 90 module as a
     shared library.  If (and only if) you intend to not build the
     Fortran 90 library or your Fortran 77 and Fortran 90 compilers
     have the same name (e.g., <code>gfortran</code>), you can use Libtool 1.5.22
     to build Open MPI v1.0 through v1.2.x.</LI>

<LI> There was a period of time where OMPI nightly trunk snapshot
     tarballs were made with a <a href="libtool.tar.gz">Libtool 2.0
     development snapshot</a>.  This is now deprecated; Open MPI uses
     official Libtool releases (no official Open MPI releases used the
     Libtool 2.0 development snapshot).</LI>

</OL>
</P>

<!- ------------------------------------------------------------------ -->

<P> Although it should probably be assumed, you'll also need a C/C++
compiler.  You'll also need a Fortran compiler if you want to build
the Fortran MPI bindings, and a Java compiler if you want to build the
(unofficial) Java MPI bindings.</P>

<P> The <?php
print("<a href=\"https://github.com/open-mpi/ompi/blob/master/HACKING\">");
?>HACKING file</a> in the top-level directory of the Open MPI checkout
details how to install the tools listed above and the steps required
to build a developer checkout of Open MPI.  It always contains the
most current information on how to build a developer's copy of Open
MPI.</p>

<?php print_code("<strong>shell$</strong> ./configure --prefix=\$HOME/openmpi-install
[...lots of output...]"); ?>

<p>This configures Open MPI and tells it to install under
<code>$HOME/openmpi-install</code>.</p>

<!- ------------------------------------------------------------------ -->

<P><strong>NOTE:</strong> By default, when configuring and building
Open MPI from a developer checkout, <strong><font color="red">all
debugging code is enabled.</font></strong> This results in a
<strong>significant</strong> run-time performance penalty.  There are
several options for building an optimized Open MPI; see the HACKING
file for more details.</p>

<p><strong>NOTE:</strong> Most Linux distributions and OS X/MacOS
install Flex by default (and this is sufficient).  Other operating
systems may provide "lex", but this is <em>not</em> sufficient &mdash; flex
is required.</p>

<?php 
  include_once("$topdir/includes/footer.inc"); 
