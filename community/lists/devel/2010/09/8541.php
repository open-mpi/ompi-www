<?
$subject_val = "Re: [OMPI devel] Autogen improvements: ready for blast off";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 16:56:14 2010" -->
<!-- isoreceived="20100923205614" -->
<!-- sent="Thu, 23 Sep 2010 16:56:07 -0400" -->
<!-- isosent="20100923205607" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen improvements: ready for blast off" -->
<!-- id="20100923205606.GB41232_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E2B4082-14B6-44A4-A800-76D3F1835D44_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Autogen improvements: ready for blast off<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 16:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8540.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We can build an SVN checkout, but with a tarball we get this:
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Undefined			first referenced
<br>
&nbsp;&nbsp;&nbsp;symbol  			    in file
<br>
&nbsp;&nbsp;opal_backtrace_print                ../../../opal/.libs/libopen-pal.so
<br>
&nbsp;&nbsp;opal_backtrace_buffer               ../../../opal/.libs/libopen-pal.so
<br>
&nbsp;&nbsp;ld: fatal: Symbol referencing errors. No output written to .libs/opal_wrapper
<br>
<p>I suspect this is because the -G link lines for libopen-pal.so differ
<br>
between the tarball and the SVN checkout.  Specifically, this file
<br>
is *not* included in the link line in the tarball case:
<br>
<p>&nbsp;&nbsp;mca/backtrace/printstack/.libs/libmca_backtrace_printstack.a
<br>
<p>I assume this means no backtrace plug-in is getting built in the
<br>
tarball case for some reason?
<br>
<p>-Ethan
<br>
<p>On Sat, Sep/18/2010 09:57:44AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I made autogen.pl take care of removing stale generated-m4 files automatically, so no one should need to manually rm any .m4 files.  Just running autogen.pl should be sufficient.  Additionally, making nightly tarballs was accidental collateral damage.  I'm working on fixing this; I think I'm pretty close.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I updated the wiki pages last week with all you need to know about the improvements to the build system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you make any new components or frameworks, I highly suggest you re-read these pages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A note from a prior email is critically important for all developers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** THE MOST IMPORTANT THING DEVELOPERS NEED TO KNOW ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;IMPORTANT&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If your component has a configure.m4 file, it MUST call AC_CONFIG_FILES for your Makefile.am!  (and/or any files that you want configure to generate).  We converted all existing configure.m4 files -- the ompi/mca/btl/tcp/configure.m4 is a nice simple example to see what I mean.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;/IMPORTANT&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; There's some other changes and improvements, but most of them are behind the scenes.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8540.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
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
