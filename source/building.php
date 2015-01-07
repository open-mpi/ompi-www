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
nightly Open MPI tarballs.  Other versions may work, but these are the
versions that we <em>know</em> work.</p>

<TABLE BORDER=1 CELLPADDING=5>
<TR>
<TH>Open MPI Release</TH>
<TH>M4 Versions</TH>
<TH>Autoconf Versions</TH>
<TH>Automake Versions</TH>
<TH>Libtool Versions</TH>
<TH>Flex Versions</TH>
</TR>

<TR>
<TD>v1.0</TD><TD>NA</TD><TD>2.58 - 2.59</TD><TD>1.7 - 1.9.6</TD><TD>1.5.16 - 1.5.22</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.1</TD><TD>NA</TD><TD>2.59</TD><TD>1.9.6</TD><TD>1.5.16 - 1.5.22</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.2</TD><TD>NA</TD><TD>2.59</TD><TD>1.9.6</TD><TD>1.5.22 - 2.1a</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.3</TD><TD>1.4.11</TD><TD>2.63</TD><TD>1.10.1</TD><TD>2.2.6b</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.4</TD><TD>1.4.11</TD><TD>2.63</TD><TD>1.10.3</TD><TD>2.2.6b</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.5 thru 1.5.4</TD><TD>1.4.13</TD><TD>2.65</TD><TD>1.11.1</TD><TD>2.2.6b</TD><TD>2.5.4</TD>
</TR>

<TR>
<TD>v1.5.5 and up</TD><TD>1.4.16</TD><TD>2.68</TD><TD>1.11.3</TD><TD>2.4.2</TD><TD>2.5.35</TD>
</TR>

<TR>
<TD>v1.6</TD><TD>1.4.16</TD><TD>2.68</TD><TD>1.11.3</TD><TD>2.4.2</TD><TD>2.5.35</TD>
</TR>

<TR>
<TD>v1.7</TD><TD>1.4.16</TD><TD>2.69</TD><TD>1.12.2</TD><TD>2.4.2</TD><TD>2.5.35</TD>
</TR>

<TR>
<TD>v1.8</TD><TD>1.4.16</TD><TD>2.69</TD><TD>1.12.2</TD><TD>2.4.2</TD><TD>2.5.35</TD>
</TR>

<TR>
<TD>master</TD><TD>1.4.16</TD><TD>2.69</TD><TD>1.12.2</TD><TD>2.4.2</TD><TD>2.5.35</TD>
</TR>

</TABLE>

</CENTER>

<!- ------------------------------------------------------------------ -->

<P>Note that other version combinations <em>may</em> work, but are
untested and unsupported.</P>

<p> Note that the v1.4 and v1.5 series had their Automake versions
updated on 10 July 2011 (from 1.10.1 to 1.10.3, and 1.11 to 1.11.1,
respectively) due to CVE-2009-4029.  This applies to all new snapshot
tarballs produced after this date, and the v1.4 series as of v1.4.4,
and the v1.5 series as of 1.5.4.</p>

<P><B>Autoconf/Automake Note:</B> If Autoconf 2.60 (and higher) is
used, Automake 1.10 (and higher) <b>must</b> be used.

<P><B>Libtool Note:</B> The Open MPI v1.2 branch and later (including
the present trunk) require the use of the Libtool 2 so that Open MPI
can build the Fortran 90 module as a shared library.  If (and only if)
you intend to not build the Fortran 90 library or your Fortran 77 and
Fortran 90 compilers have the same name (ie, gfortran), you can use
Libtool 1.5.22.</p>

<blockquote><font color=red>Note:</font> There was a period of time
where OMPI nightly trunk snapshot tarballs were made with a <a
href="libtool.tar.gz">Libtool 2.0 development snapshot</a>.  This is
now deprecated; Open MPI uses official Libtool releases (no official
Open MPI releases used the Libtool 2.0 development
snapshot).</blockquote>

<P> Although it should probably be assumed, you'll also need a C/C++
compiler.</P>

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

<P><strong>NOTE:</strong> by default, when configuring and building
Open MPI from a developer checkout, <strong><font color="red">all
debugging code is enabled.</font></strong> This results in a
<strong>significant</strong> run-time performance penalty.  There are
several options for building an optimzed Open MPI; see the HACKING
file for more details.</p>

<p><strong>NOTE:</strong> Most Linux distributions and OSX install Flex
by default (and this is sufficient).  Other operating systems may
provide "lex", but this is notsufficient -- flex is required.</p>

<?php 
  include_once("$topdir/includes/footer.inc"); 
