<?php
$topdir = "../..";
$title = "Open MPI Developer's Workshop: Prerequisites";
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");
?>

<p><a href="<?php print($topdir); ?>/news/03-14-2006-ompi-workshop.php">Back to main
Workshop page</a></p>

<h2>Before you arrive</h2>

<p>We intend the tutorial to be a fast paced interactive session, with
attendees actively using the Open MPI code base throughout the week.
Building Open MPI from the Subversion repository requires a fairly
specific toolchain and the first build can take a significant amount.
Therefore, we ask that everyone please try to build Open MPI from a
Subversion checkout before coming to the tutorial.  If something
doesn't succeed, please contact us and we'll do our best to walk you
through the process.</p>

<H2>Required Tools</H2>

First, you need a supported operating system.  Linux and Mac OS X work
well.  Cygwin using gcc should work well enough for the tutorial.  We
do not recommend attempting to use any other Windows
compiler/environment for development during the tutorial.  Working C
and C++ compilers are required and a Fortran compiler is optional.
Open MPI uses Subversion for source code management and the GNU
Autotools for build system, so both will be required.

<H3>Subversion</H3>

You will need a version of the Subversion client that supports
the <code>https</code> repository access module.  Any version of
Subversion should work.   The client has improved drastically
over the last couple of releases, so you might want to grab the latest
release available for your platform.  The output below is from a
Subversion client with <code>https</code> access.

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ~% svn --version
svn, version 1.3.0 (r17949)
   compiled Feb  5 2006, 14:16:35

Copyright (C) 2000-2005 CollabNet.
Subversion is open source software, see http://subversion.tigris.org/
This product includes software developed by CollabNet (http://www.Collab.Net/).

The following repository access (RA) modules are available:

* ra_dav : Module for accessing a repository via WebDAV (DeltaV) protocol.
  - handles 'http' scheme
  - handles 'https' scheme
* ra_svn : Module for accessing a repository using the svn network protocol.
  - handles 'svn' scheme
* ra_local : Module for accessing a repository on local disk.
  - handles 'file' scheme
</pre></td>
</tr>
</table></p>

Releases of Subversion are available from
the <A HREF="http://subversion.apache.org/">Subversion web site</A>,
with binaries (including <code>https</code> support) available for
most common platforms.  We won't go into building the subversion
client from source, other than to mention that the flag to configure
for enabling <code>https</code> access is <code>--with-ssl</code>.

<H3>Autotools</H3>

<P>Open MPI uses GNU Autoconf, Automake, and Libtool (together
commonly refered to as the GNU Autotools) to provide a build system
which works on a large number of platforms.  Due to the use of some
advanced features of Automake and Libtool, recent versions of the
tools are required with Open MPI. The required versions of the
Autotools are listed in the table below.</P>

<CENTER><TABLE WIDTH="50%">
<tr><td><B>Tool</B></td><td><B>Required Version</B></td></tr>
<tr><td>Autoconf</td><td>2.59</td></tr>
<tr><td>Automake</td><td>1.9.6</td></tr>
<tr><td>Libtool</td><td>1.5.16</td></tr>
</TABLE></CENTER>

<P>All three tools provide a <code>--version</code> switch for
checking version numbers (below).  If any of your tools are not recent
enough, you will have to upgrade.  All three tools should be installed
into the same location (while not strictly required, there are some
extra steps required to avoid this).  The source for the tools can
be downloaded from: <A HREF="ftp://ftp.gnu.org/autoconf/">Autoconf</A>,
<A HREF="ftp://ftp.gnu.org/automake/">Automake</A>,
and <A HREF="ftp://ftp.gnu.org/libtool/">Libtool</A>.  Each project
contains its own installation instructions, but
generally <CODE>./configure --prefix=DIR ; make ; make install</CODE>
is all that is required.  Don't forget to make sure that your new
installation of the autotools appears in your <CODE>$PATH</CODE>
before any other installed version of the tools.</p>

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ~% autoconf --version
autoconf (GNU Autoconf) 2.59
Written by David J. MacKenzie and Akim Demaille.

Copyright (C) 2003 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
shell ~% automake --version
automake (GNU automake) 1.9.6
Written by Tom Tromey <tromey@redhat.com>.

Copyright 2005 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
shell ~% libtool --version
ltmain.sh (GNU libtool) 1.5.22 (1.1220.2.365 2005/12/18 22:14:06)

Copyright (C) 2005  Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</pre></td>
</tr>
</table></p>

<P><B>Note</B>: For those not familiar with the autotools system, the
    autotools requirement is only for developers working from
    Subversion checkouts.  Users of Open MPI who build from release
    tarballs do not need to "build the build system", as it is
    included in the release tarball.</P>

<H2>Obtaining Open MPI</H2>

<P>Subversion provides <A
HREF="http://svnbook.red-bean.com//">extensive usage
documentation</A>.  We'll go through the basic steps needed to obtain
and update a copy of the Open MPI source code, but you might want to
become familiar with the more advanced features as time goes on.  The
<code>svn co</code> command (below) is used to check out the source
code.  The first time you attempt to check out Open MPI, you will see
a warning about an invalid certificate.  Our certificate is
self-signed, which is why Subversion believes it is invalid.  It is
safe to permenantly except the certificate.</p>

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ~% svn co https://svn.open-mpi.org/svn/ompi/trunk ompi-trunk
Error validating server certificate for 'https://svn.open-mpi.org:443':
 - The certificate is not issued by a trusted authority. Use the
   fingerprint to validate the certificate manually!
Certificate information:
 - Hostname: svn.open-mpi.org
 - Valid: from Apr  4 13:52:48 2005 GMT until Apr  2 13:52:48 2015 GMT
 - Issuer: Computer Science Department, Indiana University, Bloomington, Indiana, US
 - Fingerprint: 92:dd:79:e4:43:6f:d1:a3:11:68:7f:81:38:ab:39:c1:be:c2:fd:1c
(R)eject, accept (t)emporarily or accept (p)ermanently? p
Authentication realm: <https://svn.open-mpi.org:443> Open MPI Subversion Access
Password for 'brbarret': 
A  ompi-trunk/test
A  ompi-trunk/test/mca
A  ompi-trunk/test/mca/oob

(Lots and lots of output skipped)

 U ompi-trunk
Checked out revision 9226.
</pre></td>
</tr>
</table></p>

The version number checked out will most likely be different when you
check out the code, and will change over time as more commits are made
to the Open MPI repository.

<H2>Building the Build System</H2>

<P>The Autotools have a complex set of commands that must be run in a
very specific order in order for them to operate correctly.  Open MPI
also requires some files to be generated before the Autotools are run
in order to generate the list of frameworks and components included in
the source tree.  There is a single script <code>autogen.sh</code> at
the root level of the Open MPI source tree does all the work for you.
The last step (running Automake at the top level) can take a
considerable amount of time to complete.  In the end, you should see
output like that below:

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ompi-trunk% ./autogen.sh 
[Checking] command line parameters
[Checking] prerequisites
Configuring projects: opal orte ompi
/Users/bbarrett/ompi-trunk

(Lots and lots of output skipped)

*** Found configure.(in|ac)
***   /Users/bbarrett/ompi-trunk

*** Running GNU tools
[Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
[Running] aclocal
[Running] autoheader
[Running] autoconf
[Running] libtoolize --automake --copy --ltdl
Adjusting libltdl for OMPI :-(
  -- patching for argz bugfix in libtool 1.5
     ==> your libtool doesn't need this! yay!
  -- patching configure for broken -c/-o compiler test
[Running] automake --foreign -a --copy --include-deps
configure.ac: installing `./config/install-sh'
configure.ac: installing `./config/missing'
ompi/Makefile.am: installing `./config/compile'
ompi/Makefile.am: installing `./config/depcomp'
shell ompi-trunk%
</pre></td>
</tr>
</table></p>

<H2>Configuring Open MPI</H2>

<P>Once <code>autogen.sh</code> completes, it is time to configure Open
MPI.  We'll talk about the various build options and the meaning of
most of the non-standard output from the script during the tutorial.
For the short term, there are only a couple of options that you need
to be familiar with (note: all capital words after an equal sign (=)
should be replaced by a value appropriate for your setup):</P>

<CENTER><TABLE WIDTH="90%">
<tr><td width=25%><B>Argument</B></td><td><B>Meaning</B></td></tr>
<tr><td><code>--help</code></td>
    <td>Print out a listing of supported arguments and their usage</td><tr>
<tr><td><code>--prefix=DIR</code></td>
    <td>Prefix where Open MPI should be installed</td>
</tr>
<tr><td><code>--disable-mpi-profile</code></td>
    <td>Disable the MPI profiling layer.  This can greatly decrease
    build times on Windows and Mac OS X, but will result in a lack of
    the profiling layer and the MPI-2 I/O interface</td>
</tr>
<tr><td><code>--config-cache</code></td>
    <td>Use a cache file to store configuration options between runs
    of configure.  This needs to be used with some care on file
    systems shared between machines, which we will talk about during
    the turorial.  But it can drastically speed up the time
    <code>configure</code> takes to run on slower machines.</td>
</tr>
</TABLE></CENTER>

<P>For example, on my Mac OS X laptop, I usually run configure as seen
below:

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ompi-trunk% ./configure --prefix=$HOME/local --disable-mpi-profile --config-cache
configure: loading cache config.cache
checking for a BSD-compatible install... (cached) /usr/bin/install -c
checking whether build environment is sane... yes
checking for gawk... (cached) awk
checking whether make sets $(MAKE)... (cached) yes

============================================================================
== Configuring Open MPI
============================================================================

(lots and lots and lots of output skipped)

config.status: executing depfiles commands
config.status: executing pml-direct commands
config.status: creating ompi/mca/pml/pml_direct_call.h
shell ompi-trunk%
</pre></td>
</tr>
</table></p>

<P>The configure script will abort if it determines that a feature
necessary to building Open MPI is unavailable on your platform.  If
you run into such an issue, information on what happened and what you
need to do to correct it is generally available in either the abort
message or the file <code>config.log</code> in the current directory.</p>

<H2>Building and Installing Open MPI</H2>

<P>This is by far the easiest step in the whole process, but one of
the longest running steps.  The first time Open MPI is built, it will
take a long time to compile and is definitely a coffee-break step.
The Autotools provide a very thorough dependency analysis system, so
(with very few exceptions) subsequent builds will cause significantly
fewer files to be recompiled.</P>

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ompi-trunk% make all install

(lots and lots of output)

shell ompi-trunk% 
</pre></td>
</tr>
</table></p>

If the last line from <code>make</code> is not an error message, your
build is complete and ready for testing.

<H2>Testing Your Installation</H2>

<P>For now, we can just use a simple Hello, World example to make sure
that Open MPI is operating correctly (<A HREF="hello.c">hello.c</A>).
Make sure Open MPI is in your path according to the FAQ item on <A
HREF="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">shell
configuation</A>.  The compile and execution output should look like
that below.</P>

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>
shell ompi-trunk% mpicc hello.c -o hello
shell ompi-trunk% mpirun -np 4 ./hello
Hello, World.  I am 1 of 4
Hello, World.  I am 4 of 4
Hello, World.  I am 2 of 4
Hello, World.  I am 0 of 4
shell ompi-trunk% 
</pre></td>
</tr>
</table></p>

<P>Don't worry if the output is in a slightly different order, since
the ordering of output from different processes is not deterministic.
It will likely change from run to run.</P>

<H2>That's All, Folks!</H2>

<P>You now have a working Open MPI installation and build tree.  It
would be a good idea to update your Subversion checkout and re-run the
"Building the Build System", "Configuring Open MPI", "Building and
Installing Open MPI", and "Testing your Installation" steps a day or
two before the tutorial starts to make sure you have the latest
changes to the source code.</P>

<P><B>See you at the tutorial!</B></P>

<?
print("<p><a href=\"$topdir/news/03-14-2006-ompi-workshop.php\">Back to main Workshop page</a></p>\n\n");

  include_once("$topdir/includes/footer.inc"); 
