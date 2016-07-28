<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 08:07:17 2007" -->
<!-- isoreceived="20070611120717" -->
<!-- sent="Mon, 11 Jun 2007 08:07:03 -0400" -->
<!-- isosent="20070611120703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch to fix cross-compile failure" -->
<!-- id="48B5A270-94C5-4775-B48C-28BA68CAF3B5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A87F9060-D8FD-43FE-8A21-925EB732D728_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 08:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1649.php">Paul Henning: "[OMPI devel] Patch to fix cross-compile failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Reply:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -- Excellent; many thanks!
<br>
<p>Brian: this patch looks good to me, but I defer to the unOfficial  
<br>
OMPI ROMIO Maintainer (uOORM)...
<br>
<p><p>On Jun 8, 2007, at 3:33 PM, Paul Henning wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached a patch relative to the revision 14962 version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	ompi/mca/io/romio/romio/configure.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that fixes configuration errors when doing a cross-compile.  It  
</span><br>
<span class="quotelev1">&gt; simply changes some tests for the number of parameters to  
</span><br>
<span class="quotelev1">&gt; aio_suspend and aio_write from AC_TRY_RUN to AC_TRY_COMPILE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;romio_configure.in.diff&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1649.php">Paul Henning: "[OMPI devel] Patch to fix cross-compile failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Reply:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
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
