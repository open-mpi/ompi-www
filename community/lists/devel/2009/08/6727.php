<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 17:01:05 2009" -->
<!-- isoreceived="20090827210105" -->
<!-- sent="Thu, 27 Aug 2009 17:00:59 -0400" -->
<!-- isosent="20090827210059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="CC006A4E-4616-40E4-9E7C-52E4795AE5FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A96F111.4030309_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 17:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6726.php">Eugene Loh: "[OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6726.php">Eugene Loh: "[OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't you need a rehash in your script to make sure it picks up the  
<br>
newly-installed autotools?
<br>
<p><p>On Aug 27, 2009, at 4:48 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm having a build problem.  I want to be able to build on all sorts  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; different machines and don't always know that the right versions of
</span><br>
<span class="quotelev1">&gt; various tools will be available.  So, I drag them around with me.  So,
</span><br>
<span class="quotelev1">&gt; e.g., I have these tarballs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoconf-2.63.tar.bz2
</span><br>
<span class="quotelev1">&gt; automake-1.10.2.tar.bz2
</span><br>
<span class="quotelev1">&gt; m4-1.4.13.tar.bz2
</span><br>
<span class="quotelev1">&gt; openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After building the other tools, I start autogen on OMPI and get this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev1">&gt; [Running] aclocal
</span><br>
<span class="quotelev1">&gt; configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt;       If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;       See the Autoconf documentation.
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
<span class="quotelev1">&gt; What's up?  This is SuSE with GCC.  Run script and log file attached.
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/csh -x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pwd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set INSTALLDIR = `pwd`/myopt
</span><br>
<span class="quotelev1">&gt; set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )
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
<span class="quotelev1">&gt;    ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;    make install
</span><br>
<span class="quotelev1">&gt;  popd
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
<span class="quotelev1">&gt; # ./configure                         \
</span><br>
<span class="quotelev1">&gt; #   --disable-visibility              \
</span><br>
<span class="quotelev1">&gt; #   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt; #   --prefix=$INSTALLDIR
</span><br>
<span class="quotelev1">&gt; # make
</span><br>
<span class="quotelev1">&gt; # make install
</span><br>
<span class="quotelev1">&gt; popd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6726.php">Eugene Loh: "[OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6726.php">Eugene Loh: "[OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
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
