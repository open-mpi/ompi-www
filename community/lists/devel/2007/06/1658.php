<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 10:22:27 2007" -->
<!-- isoreceived="20070611142227" -->
<!-- sent="Mon, 11 Jun 2007 08:21:40 -0600" -->
<!-- isosent="20070611142140" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch to fix cross-compile failure" -->
<!-- id="50CC9582-4D86-4398-9310-B6CB43E9A4A8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48B5A270-94C5-4775-B48C-28BA68CAF3B5_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 10:21:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Argonne used AC_TRY_RUN instead of AC_TRY_COMPILE (I believe) because  
<br>
there are some places where aio functions behaved badly (returned  
<br>
ENOTIMPL or something).  I was going to make it call AC_TRY_RUN if we  
<br>
weren't cross-compiling and AC_TRY_COMPILE if we were.  I'll commit  
<br>
something this evening.
<br>
<p>Brian
<br>
<p><p>On Jun 11, 2007, at 6:07 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Paul -- Excellent; many thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian: this patch looks good to me, but I defer to the unOfficial
</span><br>
<span class="quotelev1">&gt; OMPI ROMIO Maintainer (uOORM)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2007, at 3:33 PM, Paul Henning wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached a patch relative to the revision 14962 version of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	ompi/mca/io/romio/romio/configure.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that fixes configuration errors when doing a cross-compile.  It
</span><br>
<span class="quotelev2">&gt;&gt; simply changes some tests for the number of parameters to
</span><br>
<span class="quotelev2">&gt;&gt; aio_suspend and aio_write from AC_TRY_RUN to AC_TRY_COMPILE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;romio_configure.in.diff&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
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
