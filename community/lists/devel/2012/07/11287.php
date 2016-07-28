<?
$subject_val = "Re: [OMPI devel] ucdm assertion failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 13 11:11:39 2012" -->
<!-- isoreceived="20120713151139" -->
<!-- sent="Fri, 13 Jul 2012 15:11:33 +0000" -->
<!-- isosent="20120713151133" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ucdm assertion failures" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7151700FF72_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EF37673-2752-436E-A3FC-85455C441D0E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ucdm assertion failures<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-13 11:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11288.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26790 - trunk/ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
<li><strong>In reply to:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Must be happening at teardown? The assertion was there for debugging purposes. I will change it to just return if either the context or channel are NULL.
<br>
<p>-Nathan
<br>
<p>On Friday, July 13, 2012 8:37 AM, devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Jeff Squyres [jsquyres_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] ucdm assertion failures
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I periodically get these on the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
</span><br>
<span class="quotelev1">&gt; alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
</span><br>
<span class="quotelev1">&gt; alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
</span><br>
<span class="quotelev1">&gt; alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (&quot;alloc-mem&quot; is the name of the particular IBM test that failed in this case)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They only happen sometimes, leading me to believe that it's a race condition of some kind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anyone else getting these?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11288.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26790 - trunk/ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
<li><strong>In reply to:</strong> <a href="11286.php">Jeff Squyres: "[OMPI devel] ucdm assertion failures"</a>
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
