<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 01:59:42 2014" -->
<!-- isoreceived="20140304065942" -->
<!-- sent="Tue, 04 Mar 2014 08:59:35 +0200" -->
<!-- isosent="20140304065935" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="531579D7.8040006_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8DECABE2-AA2C-45CC-8412-FD1476329A9C_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-04 01:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14282.php">Rolf vandeVaart: "[OMPI devel] RFC: Add two new verbose outputs to BML layer"</a>
<li><strong>In reply to:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it is possible, but there is some different if I will do it this way -
<br>
&nbsp;&nbsp;&nbsp;With the current implementation (today into a trunk) if AC_RUN_IFELSE 
<br>
fails =&gt; old code of RDMACM will rise,
<br>
&nbsp;&nbsp;&nbsp;And by way you suggest, if we postpone the decision to a run time and 
<br>
the check fails =&gt;
<br>
&nbsp;&nbsp;&nbsp;we have to abort  RDMACM  at all, because it was compiled for working 
<br>
with AF_IB.
<br>
&nbsp;&nbsp;&nbsp;So my question to you, if we take into account all this stuff above -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;What's the right way to implement it ? What do you think ?
<br>
<p>Thank you,
<br>
Vasily.
<br>
<p><p><p>On 03-Mar-14 17:31, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can't you test for that at run-time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., can't you do the configure-time test to see if AF_IB exists, and if it does, do a run-time check to see if it's useful/supported in the kernel?  Or is there a reason not to do this (e.g., it would impose a performance penalty at run time because the check would need to be in the performance-critical code path)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2014, at 11:02 PM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; some additional explanation  - it could be a situation when AF_IB is defined in user space but kernel doesn't support it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03-Mar-14 08:53, Vasily Filipov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I've committed the fixes (r30905). It is a problem to detect kernel defines (such as AF_IB ), so we have to use AC_RUN_IFELSE macro.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vasily.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 27-Feb-14 17:09, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm seeing this warning this morning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:1139: warning: AC_RUN_IFELSE called without default to allow cross c\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompiling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../lib/autoconf/general.m4:2748: AC_RUN_IFELSE is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/btl/openib/configure.m4:37: MCA_ompi_btl_openib_CONFIG is expanded from.\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:571: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:352: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:252: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:39: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:1139: the top level
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it necessary to AC_RUN_IFELSE here?  Is AC_CHECK_DECLS not sufficient for some reason?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It strikes me that this test you currently have in configure.m4 really should be a run-time test, and that all you need in configure.m4 should be an AC_CHECK_DECLS to see if AF_IB exists.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14282.php">Rolf vandeVaart: "[OMPI devel] RFC: Add two new verbose outputs to BML layer"</a>
<li><strong>In reply to:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
