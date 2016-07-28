<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 22:22:31 2009" -->
<!-- isoreceived="20090828022231" -->
<!-- sent="Thu, 27 Aug 2009 22:22:27 -0400" -->
<!-- isosent="20090828022227" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="ea86ce220908271922x27eb54e7hb8e5a541d78fa9e9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A9736A3.8090101_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] build problem, autogen<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 22:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
That FAQ entry is correct.. except that soon we won't need a C++ compiler :-)
<br>
<p>However, *IF* you want to run autogen.sh, you need recent
<br>
versions of all four gnu autotool dependencies:
<br>
m4, autoconf, automake, and libtool
<br>
as described here:
<br>
<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p>However, if you are using a nightly tarball or a release
<br>
tarball, you should not need to (nor want to!) run autogen.sh,
<br>
and can just do the usual:
<br>
&quot;./configure --pile-of-options; make; make install&quot;
<br>
<p>On Thu, Aug 27, 2009 at 9:45 PM, Eugene Loh&lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget to also install a recent gnu libtool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lemme see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-tools">http://www.open-mpi.org/faq/?category=building#build-tools</a> says: &quot;If you are
</span><br>
<span class="quotelev1">&gt; building Open MPI from a tarball, you need a C compiler, a C++ compiler, and
</span><br>
<span class="quotelev1">&gt; make... You do not need any special version of the GNU &quot;Auto&quot; tools
</span><br>
<span class="quotelev1">&gt; (Autoconf, Automake, Libtool).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, that presumably means I *should* be okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, I can no longer find the places that led me to believe
</span><br>
<span class="quotelev1">&gt; that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) I needed the versions of the tools (m4, autoconf, automake) that I picked
</span><br>
<span class="quotelev1">&gt; up.
</span><br>
<span class="quotelev1">&gt; *) I did not need libtool since OMPI had its own, hacked up version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but those were the assumptions I operated under.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, August 27, 2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't you need a rehash in your script to make sure it picks up the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newly-installed autotools?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point.  I'm a dummy about these things.  Assuming I know how to fix
</span><br>
<span class="quotelev1">&gt; what you're saying, I inserted a &quot;rehash&quot; in my script after &quot;make install&quot;,
</span><br>
<span class="quotelev1">&gt; but still got the same problem.  That is, the relevent part of the script
</span><br>
<span class="quotelev1">&gt; now says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev1">&gt;  bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev1">&gt;  tar xf  $PACKAGE.tar
</span><br>
<span class="quotelev1">&gt;  pushd   $PACKAGE
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev1">&gt;   make
</span><br>
<span class="quotelev1">&gt;   make install
</span><br>
<span class="quotelev1">&gt;  popd
</span><br>
<span class="quotelev1">&gt;  rehash
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev1">&gt; tar xf  openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev1">&gt; pushd   openmpi-1.4a1r20984
</span><br>
<span class="quotelev1">&gt;  ./autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the end of the log file still says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev1">&gt; [Running] aclocal
</span><br>
<span class="quotelev1">&gt; configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt;     If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error running autogen.sh -l in romio.  Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 27, 2009, at 4:48 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a build problem.  I want to be able to build on all sorts of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different machines and don't always know that the right versions of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; various tools will be available.  So, I drag them around with me.  So,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g., I have these tarballs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoconf-2.63.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automake-1.10.2.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4-1.4.13.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After building the other tools, I start autogen on OMPI and get this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] aclocal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://configure.in:2123">http://configure.in:2123</a>: warning: macro `AM_PROG_LIBTOOL' not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://configure.in:2126">http://configure.in:2126</a>: error: possibly undefined macro:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_PROG_LIBTOOL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error running autogen.sh -l in romio.  Aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's up?  This is SuSE with GCC.  Run script and log file attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/csh -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set INSTALLDIR = `pwd`/myopt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar xf  $PACKAGE.tar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pushd   $PACKAGE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; popd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar xf  openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pushd   openmpi-1.4a1r20984
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ./configure                         \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #   --disable-visibility              \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #   --prefix=$INSTALLDIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; popd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
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
