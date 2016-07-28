<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 21:21:53 2009" -->
<!-- isoreceived="20090828012153" -->
<!-- sent="Thu, 27 Aug 2009 21:21:48 -0400" -->
<!-- isosent="20090828012148" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="ea86ce220908271821u6db709f4y4e000d56d9ee3bcd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC006A4E-4616-40E4-9E7C-52E4795AE5FF_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-27 21:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't forget to also install a recent gnu libtool.
<br>
-- Tim, sent from my iPhone
<br>
<p>On Thursday, August 27, 2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Don't you need a rehash in your script to make sure it picks up the newly-installed autotools?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2009, at 4:48 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a build problem. &#160;I want to be able to build on all sorts of
</span><br>
<span class="quotelev1">&gt; different machines and don't always know that the right versions of
</span><br>
<span class="quotelev1">&gt; various tools will be available. &#160;So, I drag them around with me. &#160;So,
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
<span class="quotelev1">&gt; <a href="http://configure.in:2123">http://configure.in:2123</a>: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; <a href="http://configure.in:2126">http://configure.in:2126</a>: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt;  &#160; &#160; &#160;If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;  &#160; &#160; &#160;See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;autoconf&quot; has failed. &#160;See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error running autogen.sh -l in romio. &#160;Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's up? &#160;This is SuSE with GCC. &#160;Run script and log file attached.
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
<span class="quotelev1">&gt; setenv CFLAGS &#160; &#160; &#160;&quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS &#160; &#160;&quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS &#160; &#160; &#160;&quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FCFLAGS &#160; &#160; &quot;-O -m64 -g&quot;
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
<span class="quotelev1">&gt; &#160;bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev1">&gt; &#160;tar xf &#160;$PACKAGE.tar
</span><br>
<span class="quotelev1">&gt; &#160;pushd &#160; $PACKAGE
</span><br>
<span class="quotelev1">&gt;  &#160; ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev1">&gt;  &#160; make
</span><br>
<span class="quotelev1">&gt;  &#160; make install
</span><br>
<span class="quotelev1">&gt; &#160;popd
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev1">&gt; tar xf &#160;openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev1">&gt; pushd &#160; openmpi-1.4a1r20984
</span><br>
<span class="quotelev1">&gt; &#160;./autogen.sh
</span><br>
<span class="quotelev1">&gt; # ./configure &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; \
</span><br>
<span class="quotelev1">&gt; # &#160; --disable-visibility &#160; &#160; &#160; &#160; &#160; &#160; &#160;\
</span><br>
<span class="quotelev1">&gt; # &#160; --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt; # &#160; --prefix=$INSTALLDIR
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
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
