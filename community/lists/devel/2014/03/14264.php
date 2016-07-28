<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 01:53:33 2014" -->
<!-- isoreceived="20140303065333" -->
<!-- sent="Mon, 03 Mar 2014 08:53:15 +0200" -->
<!-- isosent="20140303065315" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="531426DB.1020901_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A98085A4-8E13-40CE-9D9B-95522CF20A92_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-03 01:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14245.php">Jeff Squyres (jsquyres): "[OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've committed the fixes (r30905). It is a problem to detect kernel 
<br>
defines (such as AF_IB ), so we have to use AC_RUN_IFELSE macro.
<br>
<p>Thanks,
<br>
Vasily.
<br>
<p>On 27-Feb-14 17:09, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I'm seeing this warning this morning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure.ac:1139: warning: AC_RUN_IFELSE called without default to allow cross c\
</span><br>
<span class="quotelev1">&gt; ompiling
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/general.m4:2748: AC_RUN_IFELSE is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/configure.m4:37: MCA_ompi_btl_openib_CONFIG is expanded from.\
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; config/ompi_mca.m4:571: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded from...
</span><br>
<span class="quotelev1">&gt; config/ompi_mca.m4:352: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev1">&gt; config/ompi_mca.m4:252: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev1">&gt; config/ompi_mca.m4:39: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev1">&gt; configure.ac:1139: the top level
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it necessary to AC_RUN_IFELSE here?  Is AC_CHECK_DECLS not sufficient for some reason?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It strikes me that this test you currently have in configure.m4 really should be a run-time test, and that all you need in configure.m4 should be an AC_CHECK_DECLS to see if AF_IB exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14245.php">Jeff Squyres (jsquyres): "[OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14265.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
