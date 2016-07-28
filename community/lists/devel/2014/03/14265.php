<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 02:02:23 2014" -->
<!-- isoreceived="20140303070223" -->
<!-- sent="Mon, 03 Mar 2014 09:02:19 +0200" -->
<!-- isosent="20140303070219" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="531428FB.8020805_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="531426DB.1020901_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Vasily Filipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 02:02:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14266.php">Adrian Reber: "[OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
some additional explanation  - it could be a situation when AF_IB is 
<br>
defined in user space but kernel doesn't support it.
<br>
<p>On 03-Mar-14 08:53, Vasily Filipov wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;     I've committed the fixes (r30905). It is a problem to detect 
</span><br>
<span class="quotelev1">&gt; kernel defines (such as AF_IB ), so we have to use AC_RUN_IFELSE macro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vasily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 27-Feb-14 17:09, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing this warning this morning:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:1139: warning: AC_RUN_IFELSE called without default to 
</span><br>
<span class="quotelev2">&gt;&gt; allow cross c\
</span><br>
<span class="quotelev2">&gt;&gt; ompiling
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/autoconf/general.m4:2748: AC_RUN_IFELSE is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/configure.m4:37: MCA_ompi_btl_openib_CONFIG is 
</span><br>
<span class="quotelev2">&gt;&gt; expanded from.\
</span><br>
<span class="quotelev2">&gt;&gt; ..
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:571: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded 
</span><br>
<span class="quotelev2">&gt;&gt; from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:352: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:252: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:39: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:1139: the top level
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it necessary to AC_RUN_IFELSE here?  Is AC_CHECK_DECLS not 
</span><br>
<span class="quotelev2">&gt;&gt; sufficient for some reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It strikes me that this test you currently have in configure.m4 
</span><br>
<span class="quotelev2">&gt;&gt; really should be a run-time test, and that all you need in 
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4 should be an AC_CHECK_DECLS to see if AF_IB exists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14266.php">Adrian Reber: "[OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
