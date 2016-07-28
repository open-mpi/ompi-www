<?
$subject_val = "Re: [OMPI devel] Autogen improvements: ready for blast off";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 03:57:50 2010" -->
<!-- isoreceived="20100918075750" -->
<!-- sent="Sat, 18 Sep 2010 09:57:44 +0200" -->
<!-- isosent="20100918075744" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen improvements: ready for blast off" -->
<!-- id="1E2B4082-14B6-44A4-A800-76D3F1835D44_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="284262CF-2F94-4D71-B9FF-90C13E29619C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-09-18 03:57:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8497.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8496.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I made autogen.pl take care of removing stale generated-m4 files automatically, so no one should need to manually rm any .m4 files.  Just running autogen.pl should be sufficient.  Additionally, making nightly tarballs was accidental collateral damage.  I'm working on fixing this; I think I'm pretty close.
<br>
<p>I updated the wiki pages last week with all you need to know about the improvements to the build system:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
<br>
<p>If you make any new components or frameworks, I highly suggest you re-read these pages.
<br>
<p>A note from a prior email is critically important for all developers:
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** THE MOST IMPORTANT THING DEVELOPERS NEED TO KNOW ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;IMPORTANT&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If your component has a configure.m4 file, it MUST call AC_CONFIG_FILES for your Makefile.am!  (and/or any files that you want configure to generate).  We converted all existing configure.m4 files -- the ompi/mca/btl/tcp/configure.m4 is a nice simple example to see what I mean.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/IMPORTANT&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There's some other changes and improvements, but most of them are behind the scenes.  
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8497.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8496.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
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
