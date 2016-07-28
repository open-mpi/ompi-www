<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 10:31:16 2014" -->
<!-- isoreceived="20140303153116" -->
<!-- sent="Mon, 3 Mar 2014 15:31:14 +0000" -->
<!-- isosent="20140303153114" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="8DECABE2-AA2C-45CC-8412-FD1476329A9C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="531428FB.8020805_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 10:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>In reply to:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't you test for that at run-time?
<br>
<p>I.e., can't you do the configure-time test to see if AF_IB exists, and if it does, do a run-time check to see if it's useful/supported in the kernel?  Or is there a reason not to do this (e.g., it would impose a performance penalty at run time because the check would need to be in the performance-critical code path)?
<br>
<p><p><p>On Mar 2, 2014, at 11:02 PM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; some additional explanation  - it could be a situation when AF_IB is defined in user space but kernel doesn't support it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03-Mar-14 08:53, Vasily Filipov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff, 
</span><br>
<span class="quotelev2">&gt;&gt;     I've committed the fixes (r30905). It is a problem to detect kernel defines (such as AF_IB ), so we have to use AC_RUN_IFELSE macro. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, 
</span><br>
<span class="quotelev2">&gt;&gt; Vasily. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 27-Feb-14 17:09, Jeff Squyres (jsquyres) wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm seeing this warning this morning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.ac:1139: warning: AC_RUN_IFELSE called without default to allow cross c\ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompiling 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../lib/autoconf/general.m4:2748: AC_RUN_IFELSE is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/btl/openib/configure.m4:37: MCA_ompi_btl_openib_CONFIG is expanded from.\ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/ompi_mca.m4:571: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/ompi_mca.m4:352: MCA_CONFIGURE_FRAMEWORK is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/ompi_mca.m4:252: MCA_CONFIGURE_PROJECT is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/ompi_mca.m4:39: OMPI_MCA is expanded from... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.ac:1139: the top level 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it necessary to AC_RUN_IFELSE here?  Is AC_CHECK_DECLS not sufficient for some reason? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It strikes me that this test you currently have in configure.m4 really should be a run-time test, and that all you need in configure.m4 should be an AC_CHECK_DECLS to see if AF_IB exists. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>In reply to:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
