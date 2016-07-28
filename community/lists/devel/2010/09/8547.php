<?
$subject_val = "Re: [OMPI devel] Autogen improvements: ready for blast off";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:27:54 2010" -->
<!-- isoreceived="20100924122754" -->
<!-- sent="Fri, 24 Sep 2010 08:27:48 -0400" -->
<!-- isosent="20100924122748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen improvements: ready for blast off" -->
<!-- id="7C265A0F-2058-4D71-A620-36F017104038_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100923205606.GB41232_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8546.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you compare the configure stdout/stderr from an SVN checkout and a tarball -- are there differences?
<br>
<p><p><p>On Sep 23, 2010, at 4:56 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; We can build an SVN checkout, but with a tarball we get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  Undefined			first referenced
</span><br>
<span class="quotelev1">&gt;   symbol  			    in file
</span><br>
<span class="quotelev1">&gt;  opal_backtrace_print                ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt;  opal_backtrace_buffer               ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt;  ld: fatal: Symbol referencing errors. No output written to .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect this is because the -G link lines for libopen-pal.so differ
</span><br>
<span class="quotelev1">&gt; between the tarball and the SVN checkout.  Specifically, this file
</span><br>
<span class="quotelev1">&gt; is *not* included in the link line in the tarball case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca/backtrace/printstack/.libs/libmca_backtrace_printstack.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume this means no backtrace plug-in is getting built in the
</span><br>
<span class="quotelev1">&gt; tarball case for some reason?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep/18/2010 09:57:44AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I made autogen.pl take care of removing stale generated-m4 files automatically, so no one should need to manually rm any .m4 files.  Just running autogen.pl should be sufficient.  Additionally, making nightly tarballs was accidental collateral damage.  I'm working on fixing this; I think I'm pretty close.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I updated the wiki pages last week with all you need to know about the improvements to the build system:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you make any new components or frameworks, I highly suggest you re-read these pages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A note from a prior email is critically important for all developers:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** THE MOST IMPORTANT THING DEVELOPERS NEED TO KNOW ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;IMPORTANT&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If your component has a configure.m4 file, it MUST call AC_CONFIG_FILES for your Makefile.am!  (and/or any files that you want configure to generate).  We converted all existing configure.m4 files -- the ompi/mca/btl/tcp/configure.m4 is a nice simple example to see what I mean.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/IMPORTANT&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There's some other changes and improvements, but most of them are behind the scenes.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8546.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
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
