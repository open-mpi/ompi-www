<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 21:50:55 2012" -->
<!-- isoreceived="20120524015055" -->
<!-- sent="Wed, 23 May 2012 21:50:49 -0400" -->
<!-- isosent="20120524015049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release" -->
<!-- id="CDAB181D-64EF-4401-9977-165DD07C9B48_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CBE2B1D4.ECDF%bwbarre_at_sandia.gov" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 21:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11025.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11024.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2012, at 5:25 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; It shouldn't be before AM_INIT_AUTOMAKE, that's just busted and needs to
</span><br>
<span class="quotelev1">&gt; be fixed in hwloc...
</span><br>
<p>I don't think that's right.  It's an AC macro, not an AM macro, so it can come before AM_INIT_AUTOMAKE.
<br>
<p>Here's what happens if you put it before AM_INIT_AUTOMAKE:
<br>
<p><pre>
----
[21:49] jsquyres-mac:~/tmp/foo % cat configure.ac
AC_INIT([bogus], [1.0], [<a href="http://example.com">http://example.com</a>], [bogus])
AC_CONFIG_AUX_DIR(./config)
AC_CONFIG_MACRO_DIR(./config)
AC_CANONICAL_TARGET
AM_INIT_AUTOMAKE([1.10 foreign -Wall -Werror])
AC_CONFIG_FILES([Makefile])
AC_OUTPUT
[21:49] jsquyres-mac:~/tmp/foo % autoreconf -ivf &amp;&amp; ./configure
autoreconf: Entering directory `.'
....it works fine
-----
But if you flip CANONICAL_TARGET / INIT_AUTOMAKE:
-----
[21:50] jsquyres-mac:~/tmp/foo % autoreconf -ivf &amp;&amp; ./configure
autoreconf: Entering directory `.'
autoreconf: configure.ac: not using Gettext
autoreconf: running: aclocal --force 
configure.ac:6: warning: AC_ARG_PROGRAM was called before AC_CANONICAL_TARGET
../../lib/autoconf/general.m4:1834: AC_CANONICAL_TARGET is expanded from...
configure.ac:6: the top level
autoreconf: configure.ac: tracing
configure.ac:6: warning: AC_ARG_PROGRAM was called before AC_CANONICAL_TARGET
../../lib/autoconf/general.m4:1834: AC_CANONICAL_TARGET is expanded from...
configure.ac:6: the top level
autoreconf: configure.ac: not using Libtool
autoreconf: running: /opt/local/bin/autoconf --force
configure.ac:6: warning: AC_ARG_PROGRAM was called before AC_CANONICAL_TARGET
../../lib/autoconf/general.m4:1834: AC_CANONICAL_TARGET is expanded from...
configure.ac:6: the top level
autoreconf: configure.ac: not using Autoheader
autoreconf: running: automake --add-missing --copy --force-missing
configure.ac:6: warning: AC_ARG_PROGRAM was called before AC_CANONICAL_TARGET
../../lib/autoconf/general.m4:1834: AC_CANONICAL_TARGET is expanded from...
configure.ac:6: the top level
autoreconf: Leaving directory `.'
.........etc.
-----
configure does seem to run ok, but I didn't include any other tests (like AC_PROG_CC), etc.  I have a dim recollection that other things would break, but am too tired to test that right now.
&gt; Brian
&gt; 
&gt; On 5/23/12 3:23 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Yea, the CANONICAL_HOST thing is because of hwloc; sorry...  It needs to
&gt;&gt; be very, very early in configure.ac.  So getting the ordering wrong there
&gt;&gt; was probably my fault; sorry.
&gt;&gt; 
&gt;&gt; On May 23, 2012, at 4:53 PM, Ralph Castain wrote:
&gt;&gt; 
&gt;&gt;&gt; Ah, okay - didn't realize that ordering. I'll fix it - thanks!
&gt;&gt;&gt; 
&gt;&gt;&gt; On May 23, 2012, at 2:49 PM, Barrett, Brian W wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Not sure what you mean; the file's loaded in OMPI_LOAD_PLATFORM, at
&gt;&gt;&gt;&gt; which
&gt;&gt;&gt;&gt; point all the contents of the file are evaluated as environment
&gt;&gt;&gt;&gt; variables.
&gt;&gt;&gt;&gt; The real problem is that someone really screwed up configure somewhere
&gt;&gt;&gt;&gt; along the way and called AC_CONONICAL_HOST before AM_INIT_AUTOMAKE,
&gt;&gt;&gt;&gt; which
&gt;&gt;&gt;&gt; means AC_PROG_GCC got evaluated really early, before
&gt;&gt;&gt;&gt; OMPI_LOAD_PLATFORM is
&gt;&gt;&gt;&gt; evaluated.  It really needs to be evaluated before any non-init macros.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Brian
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On 5/23/12 2:44 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; I'm looking at it...
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; We pickup the file at the right place, but we don't pull any of the
&gt;&gt;&gt;&gt;&gt; flags
&gt;&gt;&gt;&gt;&gt; out of it until later. I'm trying to see if I can adjust it.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; BTW: none of this changed from the 1.5 series, so this has been the
&gt;&gt;&gt;&gt;&gt; situation for a very long time.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; On May 23, 2012, at 2:41 PM, Barrett, Brian W wrote:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Yup, it sucks.  But that's not supported functionality.  Someone
&gt;&gt;&gt;&gt;&gt;&gt; could
&gt;&gt;&gt;&gt;&gt;&gt; possibly desire to support it, but I could never get behavior I was
&gt;&gt;&gt;&gt;&gt;&gt; comfortable with, so I'm not making promises that should work.  The
&gt;&gt;&gt;&gt;&gt;&gt; platform thing is a real hack to begin with in terms of what it does
&gt;&gt;&gt;&gt;&gt;&gt; to
&gt;&gt;&gt;&gt;&gt;&gt; autoconf...
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Brian
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; On 5/23/12 2:37 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; So perhaps I should stop calling them environment variables. Since
&gt;&gt;&gt;&gt;&gt;&gt;&gt; one
&gt;&gt;&gt;&gt;&gt;&gt;&gt; can always do something like
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ./configure CFLAGS=&quot;-I/usr/include/specialK&quot; ...
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; a line such as
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-I/usr/include/specialK&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; should be supported by the platform file reader.  No two systems are
&gt;&gt;&gt;&gt;&gt;&gt;&gt; alike here and we need these platform files to manage the dozens of
&gt;&gt;&gt;&gt;&gt;&gt;&gt; different OMPI builds. We have different paths for the IB libs,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Panasas
&gt;&gt;&gt;&gt;&gt;&gt;&gt; file system libs and includes, etc.  Essentially, we're not going to
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6
&gt;&gt;&gt;&gt;&gt;&gt;&gt; at the moment.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; -david
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Gunter
&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2012, at 2:23 PM, Barrett, Brian W wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David -
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Where exactly the platform file gets evaluated depends on a number
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; things that the OMPI developers don't have a lot of control over.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; was
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; never meant to be used to set environment variables, only command
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; arguments.  It looks like something bad has happened with ordering;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not sure when I'll be able to take a look, but we should be able to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it evaluate sooner...
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brian
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 5/23/12 2:16 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think I have some understanding of what is happening. In version
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the check for the platform file occurs after some basic compiler
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; testing
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; has already occured:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dog_at_tu-fe1 61%) ./configure --with-platform=non-existant
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===================================================================
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; == Configuring Open MPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===================================================================
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** Startup tests
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for gcc... gcc
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether the C compiler works... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for C compiler default output file name... a.out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for suffix of executables...
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether we are cross compiling... no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for suffix of object files... o
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether we are using the GNU C compiler... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether gcc accepts -g... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for gcc option to accept ISO C89... none needed
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking how to run the C preprocessor... gcc -E
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for grep that handles long lines and -e... /bin/grep
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for egrep... /bin/grep -E
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for ANSI C header files... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for sys/types.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for sys/stat.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for stdlib.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for string.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for memory.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for strings.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for inttypes.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for stdint.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for unistd.h... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking minix/config.h usability... no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking minix/config.h presence... no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for minix/config.h... no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether it is safe to define __EXTENSIONS__... yes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: platform file non-existant not found
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dog_at_tu-fe1 62%)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For OMPI 1.4.5, the platform file check occurs right off:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dog_at_tu-fe1 13%) ./configure --with-platform=non-existant
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: platform file non-existant not found
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As it is in the newer release, it will fail to work for the PGI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilers
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; then.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -david
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Gunter
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2012, at 12:21 PM, Gunter, David O wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought the purpose of the platform file was to be equivalent
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setting things on the command-line to configure. Still, it has
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; always
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; worked that way for us.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's what I'm seeing:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dog_at_lo1-fe 297%) ./configure
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-platform=./optimized-panasas-pgi
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==================================================================
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; == Configuring Open MPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==================================================================
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** Startup tests
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for gcc...
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/projects/hpcsoft/lobo/pgi/linux86-64/12.4/bin/pgcc
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking whether the C compiler works... no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: in
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/usr/projects/hpctools/dog/openmpi/openmpi-1.6':
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: C compiler cannot create executables
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; See `config.log' for more details
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The error happens because this particular compiler, pgi-12.4,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; needs
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; two
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flags: -lnomp and -lnuma. Thus the reason for the LDFLAGS line in
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; platform file.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I compile like this:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dog_at_lo1-fe 297%) ./configure
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-platform=./optimized-panasas-pgi LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then the configure proceeds normally.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -david
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Gunter
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2012, at 12:03 PM, Jeff Squyres (jsquyres) wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you send some output showing that those flags aren't passed
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; through, like some output from &quot;make V=1&quot; and or from
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; config.log?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Offhand, I don't know if we ever formally supported setting env
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; variables other than enable and with flag variables in the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; platform
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; files...?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent from my phone. No type good.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2012, at 12:49 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6 release does not seem to pick these up.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's the tail end of one of our platform files, for building
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the latest PGI compilers:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CXXFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FCFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCASFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The same platform file will configure the 1.4.5 release just
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; does not work with 1.6. If I set these variables in my
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; then run configure, it works just fine - as expected.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Has anyone else noticed this behavior?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -david
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Gunter
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt;&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; 
&gt; -- 
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11025.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11024.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
